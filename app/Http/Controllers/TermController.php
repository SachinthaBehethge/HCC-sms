<?php

namespace App\Http\Controllers;

use App\Models\term;
use Illuminate\Http\Request;

class TermController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terms = Term::all();
        return view('admin.terms.index',compact('terms'));
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
     * @param  \App\Models\term  $term
     * @return \Illuminate\Http\Response
     */
    public function show(term $term)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\term  $term
     * @return \Illuminate\Http\Response
     */
    public function edit(term $term)
    {
        $term = Term::findorFail($term->id);
        
        return view('admin.terms.edit', compact('term') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\term  $term
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, term $term)
    {
        $term->start = $request->start;
        $term->end = $request->end;
        $term->save();

        return redirect()->route('admin.terms.index')->with('message', 'Term Updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\term  $term
     * @return \Illuminate\Http\Response
     */
    public function destroy(term $term)
    {
        //
    }
}
