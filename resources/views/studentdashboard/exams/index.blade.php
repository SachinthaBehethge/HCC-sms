@extends('layouts.userdashboard.userdashboard')

@section('content')
<div class="col-md-12 content">
    <div class="panel panel-default">
      <div class="panel-heading">
          <h1 class="page-header">Termtest Calender</h1>
      </div>
      <div class="panel-body">
        <br>
        <hr>

        <div class="row">
          @forelse($termtests as $key => $termtest)
          
         
          <div class="card  col-md-4 bg-primary mr-3 ml-3" style="width: 18rem;">
            <div class="card-body">
              <h2 class="card-title text-center d-bold">{{$termtest->term_name}} Test </h2>  
              
              <h4 class="card-text text-center">
                  Subject : {{$termtest->subject_name}}
              </h4>

              <h4 class="card-text text-center">
                Date : {{$termtest->test_date}}
              </h4>
              
              <h4 class="card-text text-center">
                Start Time :{{$termtest->start_time}}  
              </h4>
              {{-- <p class="card-text text-center">{{$notice->body}}</p> --}}
              <h4 class="card-text text-center">
                End Time :{{$termtest->end_time}}
              </h4>
             
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