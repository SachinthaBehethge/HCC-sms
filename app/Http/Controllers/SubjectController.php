<?php

namespace App\Http\Controllers;

use App\Models\grade;
use App\Models\subject;
use App\Models\subjectcategory;
use App\Models\SubjectStream;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $grades = Grade::all();

        return view('admin.subject.index',compact('grades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grades = Grade::all();
        $categories = subjectcategory::all();

        return view('admin.subject.create',compact('grades','categories'));
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
            'subject' => 'required|max:255',
            'grade' => 'required',

        ]);
       
    
       

       
        $subject = new Subject;
        $subject->subject_name = $request->subject;
        $subject->grade_id = $request->grade;
        $subject->subject_category_id = $request->category;
        $subject->save();


        
        // $substream = new SubjectStream;
        // $substream->



        // $teacher = new Teacher;
        // $teacher->id = $user->id;
        // $teacher->name = $request->teachername;
        // $teacher->teacher_no = $request->teacherno;
        // $teacher->phone = $request->phone;
        // $teacher->email = $request->email;
        // $teacher->gender = $request->gender;
        // $teacher->save();

        return redirect()->route('admin.subjects.index')->with('message', 'Subject Saved successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(subject $subject)
    {
        //
    }
}
