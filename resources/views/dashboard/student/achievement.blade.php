@extends('layouts.userdashboard.userdashboard')

@section('content')
<div class="col-md-12 content">
    <div class="panel panel-default">
      <div class="panel-heading">
          <h1 class="page-header">Studentst Achivements</h1>
      </div>
      <div class="panel-body">
        <br>
        
     
            <table class=" table table-boardered table-warning table-hover table-responssive ">
                <tr class="tr-success">
                    <th>No</th>
                    <th>Index No.</th>
                    <th>Student Name</th>
                    <th>Achievements</th>
                    <th>Approval</th>
                </tr>
                
                         
                @foreach ($achievements as $key => $achievement )
                 <tr id="tableRow">


                  <td>{{$key+1}}</td>
                  <td>{{$achievement->student->index_no}}</td>
                  <td>{{$achievement->student->name_with_ini}}</td>
                  <td>{{$achievement->achievement}}</td>
                  <td>
                    <form method="POST" action="{{route('achievements.update',$achievement->id)}}" enctype="multipart/form-data">
                      @csrf
                      {{method_field('PUT')}} 

                      <input type="bool" class="form-group" name="approve" value="1" hidden> 
                      
                      <input type="submit" value="Approve" class="btn btn-primary ">


                
                    </form>
                  </td>
                 </tr>        
                  @endforeach
                         
    
    
                            
                 
                   
                    
                   
            </table>
         
             
      
      </div>
    </div>
  </div> 
@endsection