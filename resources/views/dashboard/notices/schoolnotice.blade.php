@extends('layouts.userdashboard.userdashboard')

@section('content')
<div class="col-md-12 content">
    <div class="panel panel-default">
      <div class="panel-heading">
          <h1 class="page-header">School Notices</h1>
      </div>
      <div class="panel-body">
        <br>
        <hr>

        <div class="row">
          @forelse($notices as $key => $notice)

        
          <div class="card  col-md-3 bg-warning mr-3 ml-3" style="width: 18rem;">
            <div class="card-body">
              <small class="card-subtitle mb-2 text-muted  "> updated at : {{$notice->updated_at}}</small>
              <h3 class="card-title ">{{$key+1}} - {{$notice->title}} 

               
                  
                
              </h3>
              
              <p class="card-text text-center">{{$notice->body}}</p>
              
              

            </div>
          </div>     


                      
                

              @empty
                  <div>
                      <h3>No notices Found</h3>
                  </div>
              @endforelse

        </div>
         
             
      
      </div>
    </div>
  </div> 
@endsection