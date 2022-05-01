@extends('layouts.userdashboard.userdashboard')

@section('content')
<div class="col-md-12 content">
    <div class="panel panel-default">
      <div class="panel-heading">
          <h1 class="page-header">My Achievements</h1>
      </div>
      <a href="{{route('achievements.create')}}"><button type="button" class="btn btn-warning pull-right">Add My Achievements</button></a>

      <div class="panel-body">
        <br>
        <hr>

        <div class="row">
         

        
          <div class="card  col-md-3 bg-dark mr-3 ml-3" style="width: 18rem;">
            <div class="card-body">
             
              
             
            </div>
          </div>     


                      
                

                  <div>
                      <h3>No notices Found</h3>
                  </div>
            

        </div>
         
             
      
      </div>
    </div>
  </div> 
@endsection