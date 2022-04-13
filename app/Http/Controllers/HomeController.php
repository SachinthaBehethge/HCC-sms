<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteSetting;
use Auth;
use App\Models\Teacher;

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
        
        return view('dashboard.index');
    }



    public function contact()
    {
        return view('contact');
    }

    public function admin(){

        return view('admin.index');
     }
}
