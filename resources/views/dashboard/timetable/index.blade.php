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
        <a href="{{route('timetable.create')}}"><button type="button" class="btn btn-warning pull-right">Create Time Table</button></a>
        <br>
        <form action="{{route('timetable.store')}}" method="POST"  enctype="multipart/form-data">
            @csrf
            <input type="text" value="{{$class->id}}" name="period" hidden>

         
            <table class=" table table-default table-hover table-responsive table-center">
             <thead>
              <tr>
                <th></th>
                
                @foreach ($days as $day)
                <th>
                   
                    {{$day->day}}
                    <input type="text" value="{{$day->id}}" name="day_id[]" hidden>
                </th>
                @endforeach                
              </tr>
               
             </thead>
             <tbody>
              
             
              @foreach ($periods as $period)
              <tr>
              <td>
                  {{$period->period}} <br>
                  {{$period->start}} - {{$period->end}}
                  <input type="text" value="{{$period->id}}" name="period_id[]" hidden>

              </td>
              
              <td><input type="text" name="subjects[]"></td>
              <td><input type="text" name="subjects[]"></td>
              <td><input type="text" name="subjects[]"></td>
              <td><input type="text" name="subjects[]"></td>
              <td><input type="text" name="subjects[]"></td>
              
              @endforeach    
              
                
              </tr>

            
             </tbody>
          
  
  
                  
      
                      
                     
              </table>


              <input type="submit" value="Add Timetable" class="btn btn-warning pull-right col-md-5">


        </form>
   
        


    </div>
  </div>
</div> 
     
@endsection