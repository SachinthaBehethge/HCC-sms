<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteSetting;
use Auth;

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
        $this->middleware('auth', ['except' => ['homepage', 'about', 'contact']]);
    
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function homepage()
    {
        return view('dashboard');
    }



    public function dashboard()
    {
        return view('student.index');
    }



    public function contact()
    {
        return view('contact');
    }

    public function admin(){

        return view('admin.index');
     }
}
