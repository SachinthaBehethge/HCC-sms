<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\Period;
use App\Models\Teacher;
use App\Models\Timetable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TimetableController extends Controller
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
        $days = Day::all();
        $periods = Period::all();
        $class = $teacher->class;

        $timetables = Timetable::where('class_id','=',$class->id)->get();
        
        //dd($timetables);

        return view('dashboard.timetable.index',compact('class','days','periods','timetables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
        $user = Auth::user();
        $teacher = Teacher::find($user->id);
        $days = Day::all();
        $periods = Period::all();
        $class = $teacher->class;

        return view('dashboard.timetable.create',compact('days','periods','class'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
       

            $match= Timetable::where('day_id',$request->day)->where('class_id',$request->class);
            $matchCount = $match->count();
             if($matchCount == 0){
   
                $timetable = new Timetable;


                $data = [
                    ['class_id'=>$request->class,'day_id'=>$request->day,'period_id'=>'1','subject'=> $request->subject1],
                    ['class_id'=>$request->class,'day_id'=>$request->day,'period_id'=>'2','subject'=> $request->subject2],
                    ['class_id'=>$request->class,'day_id'=>$request->day,'period_id'=>'3','subject'=> $request->subject3],
                    ['class_id'=>$request->class,'day_id'=>$request->day,'period_id'=>'4','subject'=> $request->subject4],
                    ['class_id'=>$request->class,'day_id'=>$request->day,'period_id'=>'5','subject'=> $request->subject5],
                    ['class_id'=>$request->class,'day_id'=>$request->day,'period_id'=>'6','subject'=> $request->subject6],
                    ['class_id'=>$request->class,'day_id'=>$request->day,'period_id'=>'7','subject'=> $request->subject7],
                    ['class_id'=>$request->class,'day_id'=>$request->day,'period_id'=>'8','subject'=> $request->subject8],
        
                ];
                $timetable::insert($data);
                
            //     $timetable->class_id = $request->class;
            //     //$timetable->period_id = $request->period;
            //     $timetable->day_id = $request->day;
            //    // $timetable->subject = $request->subject;	
   
       
             } else {
   
                $timetable  = $match->first();
                $timetable->class_id = $request->class;
                $timetable->period_id = $request->period;
                $timetable->day_id = $request->day;
               // $timetable->subject = $request->subject;	
   
            } 
       
        
             
                           
        return redirect()->route('timetable.create')->with('message', 'Period Adde Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Timetable  $timetable
     * @return \Illuminate\Http\Response
     */
    public function show(Timetable $timetable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Timetable  $timetable
     * @return \Illuminate\Http\Response
     */
    public function edit(Timetable $timetable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Timetable  $timetable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Timetable $timetable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Timetable  $timetable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Timetable $timetable)
    {
        //
    }
}
