@extends('layouts.userdashboard.userdashboard')

@section('content')
<div class="col-md-12 content">
    <div class="panel panel-default">
      <div class="panel-heading">
          <h1 class="page-header">Studentst Achivements</h1>
      </div>
      <div class="panel-body">
        <br>
        
        @php
            $user = Auth::user();
            $teacher = Teacher::find($user->id);
            $class = $teacher->class;
        @endphp
            <table class=" table table-boardered table-warning table-hover table-responssive ">
                <tr class="tr-success">
                    <th>No</th>
                    <th>Index No.</th>
                    <th>Student Name</th>
                    <th>Approval</th>
                </tr>
            
                    
    
                        <tr id="tableRow">
                            <td></td>
                            <td></td>
                            <td></td>
                           <td>
                            
                           </td>
                              
                      

                          </td>
                            
    
    
                            
                        </tr>
    
                   
                    
                   
            </table>
         
             
      
      </div>
    </div>
  </div> 
@endsection