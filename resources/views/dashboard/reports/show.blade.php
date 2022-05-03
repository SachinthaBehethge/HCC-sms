@extends('layouts.userdashboard.userdashboard')
@section('content')
<div class="col-md-12 content">
  <div class="panel panel-default">
      <div class="panel-heading">
        <h1 class="page-header">  {{$student->name_with_ini}}'s Report Card</h1>
        <br>
        <hr>

      </div>
      <div class="panel-body">
           <div >
            <table class="ml-50 table table-danger table-hover table-responsive text-center col-md-3">
              <thead class="">
               <tr>
                    <td class="font-weight-bold">No</td>
                    <td  class="font-weight-bold">Subjects</td>
                    <td  class="font-weight-bold">Marks</td> 
                             
               </tr>
                
              </thead>
              <tbody>
               @foreach ($student->marks as $key => $mark )
                 <tr>
                 
                   <td class="font-weight-bold">{{$key+1}}</td>
                   <td >{{$mark->termtest->subject->subject_name}}</td>
                   <td>{{$mark->marks}}</td>
                
                    
                 </tr>
                 @endforeach
                 <tr>
                   <td></td>
                   <td class="font-weight-bold">Total</td>
                   <td>{{$total}}</td>
                   
                 </tr>
                 <tr>
                   <td></td>
                   <td class="font-weight-bold">Average</td>
                   <td>{{$avg}}</td>
                 </tr>
             
              </tbody>
           
   
   
                   
       
                       
                      
               </table>
 
           </div>

    </div>
  </div>
</div> 
     
@endsection