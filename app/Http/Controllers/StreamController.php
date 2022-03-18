<?php

namespace App\Http\Controllers;

use App\Models\stream;
use Illuminate\Http\Request;

class StreamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $streams = Stream::all();


        return view('admin.subjectstream.index',compact('streams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subjectstream.create');
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
            'stream' => 'required|max:100',
           
        ]);

        $stream = new Stream;
        $stream->stream_name = $request->stream;
        $stream->save();

        return redirect()->route('admin.streams.index')->with('message', 'Stream Added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\stram  $stram
     * @return \Illuminate\Http\Response
     */
    public function show(stream $stream)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\stream  $stream
     * @return \Illuminate\Http\Response
     */
    public function edit(stream $stream)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\stream  $stream
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, stream $stream)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\stream  $stream
     * @return \Illuminate\Http\Response
     */
    public function destroy(stream $stream)
    {
        //
    }
}
