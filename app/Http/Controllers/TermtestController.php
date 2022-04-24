<?php

namespace App\Http\Controllers;

use App\Models\termtest;
use Illuminate\Http\Request;
use App\Models\subject;
use App\Models\term;

class TermtestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $termtests = Termtest::all();

        return view('admin.termtests.index',compact('termtests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = Subject::all();
        $terms = Term::all();

        return view('admin.termtests.create',compact('subjects', 'terms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $termtest = new Termtest;
        $termtest->term_id = $request->term;
        $termtest->subject_id = $request->subject;
        $termtest->test_date = $request->testdate;
        $termtest->start_time = $request->start;
        $termtest->end_time = $request->end;
        $termtest->save();

        return redirect()->route('admin.termtests.index')->with('message', 'Termtest Created Successfilly!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\termtest  $termtest
     * @return \Illuminate\Http\Response
     */
    public function show(termtest $termtest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\termtest  $termtest
     * @return \Illuminate\Http\Response
     */
    public function edit(termtest $termtest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\termtest  $termtest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, termtest $termtest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\termtest  $termtest
     * @return \Illuminate\Http\Response
     */
    public function destroy(termtest $termtest)
    {
        //
    }
}
