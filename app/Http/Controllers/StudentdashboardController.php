<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;

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
        $subjects = $student->class->grade->subjects;
        //dd($subjects);

        return view('studentdashboard.exams.index',compact('subjects'));
    }

}
