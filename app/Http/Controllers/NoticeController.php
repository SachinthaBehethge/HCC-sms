<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\notice;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $user = Auth::user();
        $teacher = Teacher::find($user->id);
        $notices = $teacher->class->notices;
        //dd($notices);

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
        $user = Auth::user();
        $teacher = Teacher::find($user->id);
        

        $notice = new Notice;
        $notice->title = $request->notice_title;
        $notice->body = $request->noticeBody;
        $notice->classes_id = $teacher->class->id;
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
        $notice = Notice::findorFail($notice->id);
        
        return view('dashboard.notices.edit',compact('notice'));
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
        $notice->title = $request->notice_title;
        $notice->body = $request->noticeBody;
       
        $notice->save();

        return redirect()->route('notices.index')->with('message', 'Notice Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy(notice $notice)
    {
        $notice->delete();
        return redirect()->route('notices.index')->with('message','Notice Deleted!');
    }

    public function student()
    {
       
        
        return view('dashboard.student.index');
    }
}
