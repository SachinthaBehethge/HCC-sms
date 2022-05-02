<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\Mark;
use App\Models\Period;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use App\Models\Term;
use App\Models\termtest;
use App\Models\Timetable;
use Carbon\Carbon;

class StudentdashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user(); 
        $student = Student :: find($user->id);
        //dd($student);
    
        return view('studentdashboard.index',compact('student'));
    }

    public function notice()
    {   
        $user = Auth::user();
        $student = Student::find($user->id);
        $notices = $student->class->notices;
        //dd($notices);

        return view('studentdashboard.notices.index',compact('notices'));
    }

    public function subject()
    {   
        $user = Auth::user();
        $student = Student::find($user->id);
        $subjects = $student->class->grade->subjects;
        //dd($subjects);

        return view('studentdashboard.subjects.index',compact('subjects'));
    }

    public function exam()
    {   
        $user = Auth::user();
        $student = Student::find($user->id);
        // $termtests = $student->class->grade->subject->termtests;
        $termtests =  termtest::select('term_name','subject_name','test_date','start_time','end_time')
                        ->join('terms','termtests.term_id','=','terms.id')   
                        ->join('subjects','termtests.subject_id','=','subjects.id')
                        ->join('grades','subjects.grade_id','=','grades.id')
                        ->join('classes','classes.grade_id','=','grades.id')
                        ->join('students','students.classes_id','=','classes.id')->where('students.id',$student->id)->groupBy('termtests.id')->get();


        //dd($termtests);

        return view('studentdashboard.exams.index',compact('termtests'));
    }

    public function timetable()
    {
        $user = Auth::user();
        $student = Student::find($user->id);
        $days = Day::all();
        $periods = Period::all();
        $class = $student->class;

        $timetables = Timetable::where('class_id','=',$class->id)->get();

        return view('studentdashboard.timetable.index',compact('days','periods','timetables','class'));
    }


     /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function mark(Mark $mark)
    {
        $today = Carbon::today();
        $thisTerm = Term::where('start','<',$today)->where('end','>',$today)->first();


        $user = Auth::user();
        $student = Student::find($user->id);


        $marks = Mark::where('student_id',$student->id)->whereHas('termtest',function($query) use ($thisTerm){
            $query->with('subject_id')->where('term_id',$thisTerm->id);
             })->groupBy('marks.id')->get();


        $total= $marks->sum('marks');
        $recordCount = $marks->count();

        $avg = $total/$recordCount;     

        //$marks = Mark :: with('student_id',$user->id);
        
        return view('studentdashboard.reports.index',compact('marks','total','avg'));
    }

}
