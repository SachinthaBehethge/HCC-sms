<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use App\Models\termtest;

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
        $termtests =  termtest::select('subject_name','test_date','start_time','end_time')
                        ->join('subjects','termtests.subject_id','=','subjects.id')
                        ->join('grades','subjects.grade_id','=','grades.id')
                        ->join('classes','classes.grade_id','=','grades.id')
                        ->join('students','students.class_id','=','classes.id')->where('students.id',$student->id)->groupBy('termtests.id')->get();


        dd($termtests);

        return view('studentdashboard.exams.index',compact('termtests'));
    }

}
