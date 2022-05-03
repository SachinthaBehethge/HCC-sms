<?php

namespace App\Http\Controllers;

use App\Models\grade;
use App\Models\section;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $grades = Grade::all();
        return view('admin.grades.index',compact('grades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sections = Section::all();
        return view('admin.grades.create',compact('sections'));
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
            'grade' => 'required|max:100',
           
        ]);

        $grade = new Grade;
        $grade->section_id = $request->section;
        $grade->name = $request->grade;
        $grade->save();

        return redirect()->route('admin.grades.index')->with('message', 'Grade Added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show(Grade $grade)
    {
        $grade = Grade::findorFail($grade->id);

        return view('admin.grades.show',compact('grade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function edit(Grade $grade)
    {
        $sections = Section::all();
        $grade = Grade::findorFail($grade->id);

        return view('admin.grades.edit',compact('grade','sections'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grade $grade)
    {
        $grade->section_id = $request->section;
        $grade->name = $request->grade;
        $grade->save();

        return redirect()->route('admin.grades.index')->with('message', 'Grade updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grade $grade)
    {
        $grade->delete();

        return redirect()->route('admin.grades.index')->with('message','Grade Deleted!');
    }
}
