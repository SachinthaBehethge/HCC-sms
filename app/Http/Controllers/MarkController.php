<?php

namespace App\Http\Controllers;

use App\Models\Mark;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Term;
use App\Models\Termtest;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;

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
        

            
        $termtests =  Termtest::select('term_name','subject_name','termtests.id as termtest_id')  //
            ->join('terms','termtests.term_id','=','terms.id')->where('terms.start','<',$today)->where('terms.end','>',$today)
            ->join('subjects','termtests.subject_id','=','subjects.id')
            ->join('grades','subjects.grade_id','=','grades.id')
            ->join('classes','classes.grade_id','=','grades.id')
            ->join('students','students.classes_id','=','classes.id')
            // ->join('marks','marks.student_id.','=','students.id')
            ->groupBy('termtests.id')->get();    


        //$terms = Term::where($today->between('start','end'))->get();
     
        // dd($termtests);
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
        for($i=0;$i< count($request->stid);$i++){
	
            $mark = new Mark;
            $mark->term_test_id = $request->term;
            $mark->student_id = $request->stid[$i];
            $mark->marks = $request->mark[$i];	
                            
            $mark->save();

            
        };

        return redirect()->route('marks.index')->with('message', 'Marks Added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function show(Mark $mark)
    {
        return view('dashboard.marks.view');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $termtest = Termtest::findorFail($id);
        $user = Auth::user();
        $teacher = Teacher::find($user->id);
        $students = $teacher->class->students;

        return view('dashboard.marks.add',compact('termtest','students'));
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
