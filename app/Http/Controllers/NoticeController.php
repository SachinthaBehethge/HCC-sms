<?php

namespace App\Http\Controllers;

use App\Models\notice;
use Illuminate\Http\Request;
use PHPUnit\Framework\Error\Notice as ErrorNotice;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = Notice::all();

        return view('dashboard.notices.index',compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      

        return view('dashboard.notices.create');
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
            'notice_title' => 'required|max:100',
            'noticeBody' => 'required|',
           
        ]);

        $notice = new Notice;
        $notice->title = $request->notice_title;
        $notice->body = $request->noticeBody;
        $notice->save();

        return redirect()->route('notices.index')->with('message', 'Notice Added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show(notice $notice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit(notice $notice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, notice $notice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy(notice $notice)
    {
        //
    }
}
