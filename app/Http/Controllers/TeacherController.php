<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use mail;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $teachers = Teacher::all();

        return view('admin.teachers.index',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('admin.teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'teacherno' => 'required|max:255',
            'teachername' => 'required|max:255',
    

            'email'=> 'required|unique:users'
        ]);

        $user = new User;
        $user->name = $request->teachername;
        $user->email = $request->email;
        $passWord = str::random(8);
        $user->password = Hash::make($passWord);
        $user->role_id ='2';
        $user->save();

        $teacher = new Teacher;
        $teacher->id = $user->id;
        $teacher->name = $request->teachername;
        $teacher->teacher_no = $request->teacherno;
        $teacher->phone = $request->phone;
        $teacher->email = $request->email;
        $teacher->gender = $request->gender;
        $teacher->save();

        if($request->sendEmail){

            Mail::send('email.welcomeTeacher', ['name' => $request->teachername,'email'=>$request->email,'password'=>$passWord], function($message) use($request){
                $message->to($request->email);
                $message->subject('Welcome to Hewaheta Central College - Student Management System '.$request->teachername);
            });
        }

        return redirect()->route('admin.teachers.index')->with('message', 'Teacher Saved successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        $teacher = Teacher::findorFail($teacher->id);

        return view('admin.teachers.view',compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        //
    }

    
    

    public function classteacher(Request $request){

        $teacher= Teacher::findOrFail($request->teacher_id);

       
        if($teacher->is_classteacher){
            $teacher->is_classteacher=0;
        }else{
            $teacher->is_classteacher=1;
        }

        $teacher->save();


        return redirect()->back();



     }
}
