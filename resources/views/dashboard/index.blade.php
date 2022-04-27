@extends('layouts.userdashboard.userdashboard')

@section('content')
        
       
@php
$loggedUser = Auth::user();
@endphp  
<div class="col-md-12 content">
    <div class="panel panel-default">

      <div class="panel-heading">
          <h1 class="page-header">
           
            {{$teacher->class->grade->name}}-{{$teacher->class->class_name}}
         
           
          </h1>
      </div>
      <div class="panel-body">
        <br>
        <hr>
        <div class="row">
         

          
          <div class="card  col-md-12 bg-success mr-3 ml-3" style="width: 18rem;">
            <div class="card-body">
              <h2>
                Welcome to {{$teacher->class->grade->name}}-{{$teacher->class->class_name}} class !
              </h2>
             <br> <br>
             <h4>
                Class Teacher : {{$teacher->name}} 
             </h4>
             <br>
             <h4>
                No of Students : .{{$teacher->class->students->count()}}
             </h4>
            </div>
          </div>     


                      
                

            

        </div>
         
      
      </div>
    </div>
  </div> 
@endsection