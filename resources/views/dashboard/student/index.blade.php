@extends('layouts.userdashboard.userdashboard')

@section('content')
<div class="col-md-12 content">
    <div class="panel panel-default">
      <div class="panel-heading">
          <h1 class="page-header">Class Students</h1>
      </div>
      <div class="panel-body">
        <br>
        
        
            <table class=" table table-boardered table-warning table-hover table-responssive ">
                <tr class="tr-success">
                    <th>No</th>
                    <th>Index No.</th>
                    <th>Student Name</th>
                    <th>Action</th>
                </tr>
                @foreach($students as $key => $student)
    
                        <tr id="tableRow">
                            <td>{{$key+1}}</td>
                            <td>{{$student->index_no }}</td>
                            <td>{{$student->fullname}}</td>
                           <td>
                            <a href="{{ route('studentview', $student->id) }}" class="btn btn-success col-md-6" style="margin-right: 2px">View</a>
                           
                           </td>
                              
                      

                          </td>
                            
    
    
                            
                        </tr>
    
                   
                    @endforeach
                   
            </table>
         
             
      
      </div>
    </div>
  </div> 
@endsection