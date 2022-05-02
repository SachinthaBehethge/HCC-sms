@extends('layouts.userdashboard.userdashboard')

@section('content')
<div class="col-md-12 content">
    <div class="panel panel-default">
      <div class="panel-heading">
          <h1 class="page-header">Add My Achievement</h1>
      </div>
      @php
          $loggedUser = Auth::user();
      @endphp
      <div class="panel-body">
          <form action="{{route('achievements.store')}}" method="POST"  enctype="multipart/form-data">
             @csrf
              <br>
              <div class="form-floating">
                  <input type="text" id="class" name="class" value="{{$loggedUser->student->class->id}}" class="form-control" hidden required>
                  {{-- <input type="text" id="stid" name="stid" value="" class="form-control" hidden required> --}}

                  <input type="text" id="stid" name="stid" value="{{$loggedUser->id}}" class="form-control" hidden required>
              </div>
              
              <br>
              <div class="form-floating">
                <label for="floating-input">Achievement</label>
                <textarea  id="achievement" name="achievement" rows="5" placeholder="Enter Your achievements - Ex : All island 1st place from dancing competition" class="form-control" required></textarea>
                <small>Use few words to submit your achievement </small>
             </div>
             <br>
           
              <input type="submit" value="Sumbit" class="btn btn-warning pull-right">
  
          </form>
        
      </div>
    </div>
  </div> 
@endsection