<?php

namespace App\Http\Controllers;

use App\Models\Achievment;
use Illuminate\Http\Request;
use App\Models\Achievement;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;

class AchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $user = Auth::user();
        $teacher = Teacher::find($user->id);
        $class = $teacher->class;

        $achievements = Achievement::where('class_id','=',$class->id)->where('is_approved','=',0)->get();
       
        


       
        return view('dashboard.student.achievement',compact('achievements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('studentdashboard.achievements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $achievement = new Achievement;
        $achievement->student_id = $request->stid;
        $achievement->achievement =$request->achievement;
        $achievement->class_id = $request->class;
        $achievement->save();

        return redirect()->route('achievements.create')->with('message', 'Your achievement Added successfully, please wait until approvement!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function show(Achievement $achievement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function edit(Achievement $achievement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Achievement $achievement)
    {
        $user = Auth::user();
        $teacher = Teacher::find($user->id);
        $achievement->is_approved = $request->approve;
        $achievement->approved_by = $teacher->name;
        $achievement->save();

        return redirect()->route('achievements.index')->with('message','Achievement Approved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Achievement $achievement)
    {
        //
    }
}
