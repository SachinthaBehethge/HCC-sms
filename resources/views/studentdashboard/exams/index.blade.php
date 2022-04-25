@extends('layouts.userdashboard.userdashboard')

@section('content')
<div class="col-md-12 content">
    <div class="panel panel-default">
      <div class="panel-heading">
          <h1 class="page-header">Class Notices</h1>
      </div>
      <div class="panel-body">
        <br>
        <hr>

        <div class="row">
          @forelse($termtests as $key => $termtest)

        
          <div class="card  col-md-3 bg-primary mr-3 ml-3" style="width: 18rem;">
            <div class="card-body">
              <small class="card-subtitle mb-2 text-muted  "> updated at : {{$notice->updated_at}}</small>
              <h3 class="card-title ">Term - {{$termtest->term->term_name}} 

               
                  
                
              </h3>
              <h4>
                  Subject : {{$termtest->subject->subject_name}}
              </h4>
              <h4>
                Date : {{$termtest->test_date}}
            </h4>
            <h4>
                Start Time :{{$termtest->start_time}}  End Time :{{$termtest->end_time}}
            </h4>
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