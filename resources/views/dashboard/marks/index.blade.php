@extends('layouts.userdashboard.userdashboard')

@section('content')
<div class="col-md-12 content">
    <div class="panel panel-default">
      <div class="panel-heading">
          <h1 class="page-header">Term Test - subjects</h1>
          <small>Click on subjects to add marks</small>
      </div>
      <div class="panel-body">
        <br>
        <hr>

        <div class="row">
          @forelse($termtests as  $termtest)
                
            <div class="row col-md-12">
                <a href="{{ route('marks.edit',$termtest->termtest_id ) }}" class="btn btn-success col-md-6 mt-10" style="margin: 10px">{{$termtest->subject_name}}</a>
                <br>
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