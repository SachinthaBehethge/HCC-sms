@extends('layouts.userdashboard.userdashboard')

@section('content')
        
       
@php
$loggedUser = Auth::user();
@endphp  
<div class="col-md-12 content">
    <div class="panel panel-default">

      <div class="panel-heading">
          <h1 class="page-header">
           
            {{$student->name_with_ini}}'s Dashboard
         
           
          </h1>
      </div>
      <div class="panel-body">
        <br>
        <hr>
        <div class="row">
         

          
          <div class="card  col-md-12 bg-primary mr-3 ml-3" style="width: 18rem;">
            <div class="card-body">
              <h2>
                Welcome {{$student->name_with_ini}}   !
              </h2>
             <br> <br>
             <h4>
                 Name : {{$student->fullname}}
             </h4>
             <h4>
                Class  : {{$student->class->grade->name}}-{{$student->class->class_name}} 
             </h4>
             
             <h4>
                Class Teacher : {{$student->class->teacher->name}}
             </h4>
            </div>
          </div>     


                      
                

            

        </div>
         
      
      </div>
    </div>
  </div> 
@endsection