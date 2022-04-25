<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Student;
use Illuminate\Http\Request;
use App\SiteSetting;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;

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
    
        return view('dashboard.index',compact('teacher'));
    }

    
    



    public function contact()
    {
        return view('contact');
    }

    public function admin(){

        return view('admin.index');
     }
}
