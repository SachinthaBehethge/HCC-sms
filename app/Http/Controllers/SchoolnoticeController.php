<?php

namespace App\Http\Controllers;

use App\Models\Schoolnotice;
use Illuminate\Http\Request;

class SchoolnoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = Schoolnotice::all();
        //dd($notices);

        return view('admin.notices.index',compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.notices.create');
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
       

        $notice = new Schoolnotice;
        $notice->title = $request->notice_title;
        $notice->body = $request->noticeBody;
       
        $notice->save();

        return redirect()->route('admin.schoolnotices.index')->with('message', 'Notice Added successfully!');
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
    public function edit( $id)
    {
        $notice = Schoolnotice::findorFail($id);
        
        return view('admin.notices.edit',compact('notice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id ,Request $request)
    {
        $notice = Schoolnotice::find($id);
        $notice->title = $request->notice_title;
        $notice->body = $request->noticeBody;
       
        $notice->save();

        return redirect()->route('admin.schoolnotices.index')->with('message', 'Notice Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id ,Request $request)
    {
        $notice = Schoolnotice::find($id);
        $notice->delete();
        return redirect()->route('admin.schoolnotices.index')->with('message','Notice Deleted!');
    }
}
