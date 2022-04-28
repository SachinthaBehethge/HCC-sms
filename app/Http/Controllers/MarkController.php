<?php

namespace App\Http\Controllers;

use App\Models\Mark;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Term;
use App\Models\Termtest;

class MarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $today = Carbon::today();
        

            
        $termtests =  Termtest::select('term_name','subject_name','termtest_id')  
            ->join('terms','termtests.term_id','=','terms.id')->where('terms.start','<',$today)->where('terms.end','>',$today)
            ->join('subjects','termtests.subject_id','=','subjects.id')
            ->join('grades','subjects.grade_id','=','grades.id')
            ->join('classes','classes.grade_id','=','grades.id')
            ->join('students','students.classes_id','=','classes.id')
            ->join('marks','marks.student_id.','=','students.id')
            ->groupBy('termtests.id')->get();    


        //$terms = Term::where($today->between('start','end'))->get();
     
        dd($termtests->id);
         return view('dashboard.marks.index',compact('termtests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function show(Mark $mark)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function edit(Mark $mark)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mark $mark)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mark $mark)
    {
        //
    }
}
