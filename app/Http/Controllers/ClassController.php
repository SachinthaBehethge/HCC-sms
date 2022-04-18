<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\section;
use App\Models\Classes;
use App\Models\SectionClass;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = section::with('classes')->get();
        dd($sections);
        //$sectionclasses = SectionClass::where('section_id','=',$section->id);
       

        return view('admin.class.index' ,compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = Teacher::all();
        $classes = Classes::all();
        $sections = Section::all();


        return view('admin.class.create', compact('sections','classes','teachers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        $secclass = new SectionClass;
        $secclass->section_id = $request->section;
        $secclass->class_id = $request->class;
        $secclass->class_teacher_id =$request->classteacher;
        $secclass->save();

        $teacher=Teacher::find($request->classteacher);
        $teacher->is_classteacher = 0;
        $teacher->save();

        return redirect()->route('admin.classes.index')->with('message', 'Class Added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
