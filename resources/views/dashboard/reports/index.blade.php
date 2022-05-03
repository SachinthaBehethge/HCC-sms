@extends('layouts.userdashboard.userdashboard')

@section('content')
<div class="col-md-12 content">
    <div class="panel panel-default">
      <div class="panel-heading">
          <h1 class="page-header">
          Student Report Cards
          </h1>
      </div>
      
      

      <div class="panel-body">
          <hr>
        <a href="{{route('sendReports')}}" class="btn btn-danger col-md-6 mt-10" style="margin: 10px">Send Reports to Parents</a>
        <br>
        
        <table class=" table table-boardered table-hover table-responssive ">
            <tr>
                <th>No</th>
                <th>Index No.</th>
                <th>Student Name</th>
                <th>Action</th>
            </tr>
            @foreach($students as $key => $student)

                    <tr id="tableRow">
                        <td>{{$key+1}}</td>
                        <td>{{$student->index_no }}</td>
                        <td>{{$student->name_with_ini}}
                        </td>
                        <td> 
                            <a href="{{ route('marks.view',$student->id) }}" class="btn btn-primary col-md-6 mt-10" style="margin: 10px">view report card</a>
                          
                         
                       
                  

                      </td>
                        


                        
                    </tr>

               
                @endforeach
               
        </table>
      
             
      
      </div>
    </div>
  </div> 
@endsection