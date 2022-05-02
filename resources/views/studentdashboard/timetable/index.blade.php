@extends('layouts.userdashboard.userdashboard')
@section('content')
<div class="col-md-12 content">
  <div class="panel panel-default">
      <div class="panel-heading">
        <h1 class="page-header">  Class Time Table</h1>
        <br>
        <hr>

      </div>
      <div class="panel-body">
            <table class=" table table-danger table-hover table-responsive table-center">
             <thead>
              <tr>
                <th></th>
                
                @foreach ($periods as $period)
                <th>
                  {{$period->period}} <br>
                  {{$period->start}} - {{$period->end}}
                    
                </th>
                @endforeach                
              </tr>
               
             </thead>
             <tbody>
              
             
              @foreach ($days as $day)
              <tr>
              <td>
                {{$day->day}}
                <input type="text" value="{{$day->id}}" name="day_id[]" hidden>
                  

              </td>
              @foreach ($timetables as $timetable)
              @php
               $subject = $timetable->subject;
              
               if($subject!=null){
                 $value = $subject;
               }else {
                 $value = "Not Set";
               }
              @endphp
                <td><input type="text" placeholder="{{$value}}"></td>
              @endforeach

             
              
              @endforeach    
              
                
              </tr>

            
             </tbody>
          
  
  
                  
      
                      
                     
              </table>


            


   
        


    </div>
  </div>
</div> 
     
@endsection