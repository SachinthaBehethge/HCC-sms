<?php

namespace App\Http\Controllers;

use App\Models\stream;
use App\Models\subject;
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

        $subjects = Subject::all();

        return view('admin.subject.index',compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $streams = Stream::all();
        return view('admin.subject.create',compact('streams'));
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
            'stream' => 'required',
    

            
        ]);

    
       

        $subject = new subject;
        $subject->id = $request->id;
        $subject->name = $request->subject;
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

        // return redirect()->route('admin.teachers.index')->with('message', 'Teacher Saved successfully!');
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
