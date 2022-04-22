<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use App\Models\Classes;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();

        return view('admin.student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = Classes::all();

        return view('admin.student.create',compact('classes'));
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
            'indexno' => 'required|max:255',
            'fullname' => 'required|max:255',
            'guardianemail'=> 'required',

            'email'=> 'required|unique:users'
        ]);

        $user = new User;
        $user->name = $request->fullname;
        $user->email = $request->email;
        $user->password = Hash::make($request->indexno);
        $user->role_id ='3';
        $user->save();

        $student = new Student;
        $student->id = $user->id;
        $student->index_no = $request->indexno;
        $student->student_no = $request->stno;
        $student->index_no = $request->indexno;
        $student->fullname = $request->fullname;
        $student->email = $request->email;
        $student->name_with_ini = $request->initials;
        $student->address = $request->address;
        $student->dob = $request->dob;
        $student->nationality = $request->nationality;
        $student->nic = $request->nic;
        $student->special_needs = $request->specialneed;

        $student->gardian_name = $request->guardianname;
        $student->gardian_email = $request->guardianemail;
        $student->gardian_phone = $request->phone;
        $student->distance = $request->distance;
        $student->way_of_coming = $request->coming;
        $student->section_id = $request->section;
        
        $student->save();

        

       
        return redirect()->route('admin.student.create')->with('message', 'Student Saved successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $student = Student::findorFail($student->id);
        return view('admin.student.view',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
