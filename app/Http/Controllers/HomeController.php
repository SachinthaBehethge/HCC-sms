<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Mark;
use App\Models\Student;
use Illuminate\Http\Request;
use App\SiteSetting;
use App\Models\Teacher;
use App\Models\Term;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

use function GuzzleHttp\Promise\exception_for;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return \Illuminate\Http\Response
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['homepage']]);
    
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function homepage()
    {
        
        
        $teachers = Teacher::all();
        
        foreach ($teachers as  $key => $teacher) {
            $teacher;
        }

        return view('dashboard',compact('teacher'));
    }



    // public function studentdashboard()
    // {
        
    //     return view('dashboard.student.index');
    // }

    public function dashboard()
    {
        $user = Auth::user(); 
        $teacher = Teacher :: find($user->id);
        //dd($teacher->class->students);
        return view('dashboard.index',compact('teacher'));
    }

    
    



    public function classstudent()
    {
        $user = Auth::user(); 
        $teacher = Teacher :: find($user->id);
        $class= $teacher->class;
        $students = Student::where('classes_id','=', $class->id)->get();
        

        return view('dashboard.student.index',compact('students'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function studentview($student_id)
    {
        
        $student = Student::find($student_id);
        // dd($student);

        return view('dashboard.student.view',compact('student'));
    }

    public function sendReports(Request $request,$student_id)
    {
        $user = Auth::user();
        $teacher = Teacher::find($user->id);
        $students = $teacher->class->students;
        
        foreach ($students as $student) {

            $today = Carbon::today();
            $thisTerm = Term::where('start','<',$today)->where('end','>',$today)->first();

            $marks = Mark::where('student_id',$student->id)->whereHas('termtest',function($query) use ($thisTerm){
                $query->with('subject_id')->where('term_id',$thisTerm->id);
                 })->groupBy('marks.id')->get();



            $total= $marks->sum('marks');
            $recordCount = $marks->count();
         
            $avg = $total/$recordCount;          



            Mail::send('emails.report', ['name' => $student->name_with_ini,'term'=>$thisTerm,'parent'=>$student->gardian_name,'total'=>$total,'avg'=>$avg,'email'=>$student->gardian_email,'marks'=>$marks], function($message) use($student,$marks){
                $message->to($student->gardian_email);
                $message->subject('Students Performance Repoert of '.$student->name_with_ini." Student");
            });
        }
    
    }


    public function admin(){

        return view('admin.index');
     }
}
