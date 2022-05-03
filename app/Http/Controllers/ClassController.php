<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\section;
use App\Models\Classes;
use App\Models\grade;
use App\Models\ClassSection;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$sections=Section::has('classes')->get();
        //$classes=classes::find($id=1);
        //$sections = Section::with('classes')->get()->pluck('classes.name');
        
       
        //$teachers = teacher::has('section_class')->get;

        
        $classes = Classes ::all(); 
       

        return view('admin.class.index', compact('classes') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = Teacher::all();
        $grades = Grade::all();


        return view('admin.class.create', compact('grades','teachers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $class = new Classes;
        $class->grade_id = $request->grade;
        $class->class_name = $request->class;
        $class->teacher_id =$request->classteacher;
        $class->save();
        if ($request->classteacher!=null) {
            $teacher=Teacher::find($request->classteacher);
            $teacher->is_classteacher = 0;
            $teacher->save();
        }
       

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
        $teachers = Teacher::all();
        $class =Classes::findorFail($id);

        return view('admin.class.edit', compact('teachers','class'));


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

        $class = Classes::find($id);
        if ($request->classteacher!=null) {
            $teacher= Teacher::find($class->teacher_id);
            $teacher->is_classteacher = 1;
            $teacher->save();
        }
        $class->teacher_id = $request->classteacher;
        $class->save();

        if ($request->classteacher!=null) {
            $teacher=Teacher::find($request->classteacher);
            $teacher->is_classteacher = 0;
            $teacher->save();
        }

        return redirect()->route('admin.classes.index')->with('message','Class Teacher Added!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
        $class = Classes::find($id);
        $teacher= Teacher::find($class->teacher_id);
        $teacher->is_classteacher = 1;
        $teacher->save();
        $class->delete();
        return redirect()->route('admin.classes.index')->with('message','Class Deleted!');

    }
}
