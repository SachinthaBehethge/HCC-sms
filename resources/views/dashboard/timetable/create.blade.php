@extends('layouts.userdashboard.userdashboard')
@section('content')
<div class="col-md-12 content">
  <div class="panel panel-default">
      <div class="panel-heading">
        <h1 class="page-header">  Create Time Table</h1>
        <br>
        <hr>

      </div>
      <div class="panel-body">
       
        <form action="{{route('timetable.store')}}" method="POST"  enctype="multipart/form-data">
         @csrf
         <h6 class="font-weight-bold">Select a Day</h6>
            <input type="text" value="{{$class->id}}" name="class" hidden>
            <select id="day" name="day" class=" form-control col-md-8 @error('day') is-invalid @enderror" required  >
                <option value="" selected>Select Day</option>
                @foreach ($days as $day)
                <option value="{{($day->id)}}">{{$day->day}}</option>
                
                 @endforeach    
                
            </select>

            <br>
            <h6 class="font-weight-bold">Add Subjects to Period Slots</h6>
            <div class="row">
              <input type="text" placeholder="Period 1" name="subject1" class="col-md-3 m-3  class=" form-control col-md-8 @error('subject') is-invalid @enderror" required>
              <input type="text" placeholder="Period 2" name="subject2" class="col-md-3 m-3  class=" form-control col-md-8 @error('subject') is-invalid @enderror" required>
              <input type="text" placeholder="Period 3" name="subject3" class="col-md-3 m-3  class=" form-control col-md-8 @error('subject') is-invalid @enderror" required>
              <input type="text" placeholder="Period 4" name="subject4" class="col-md-3 m-3  class=" form-control col-md-8 @error('subject') is-invalid @enderror" required>
              <input type="text" placeholder="Period 5" name="subject5" class="col-md-3 m-3  class=" form-control col-md-8 @error('subject') is-invalid @enderror" required>
              <input type="text" placeholder="Period 6" name="subject6" class="col-md-3 m-3  class=" form-control col-md-8 @error('subject') is-invalid @enderror" required>
              <input type="text" placeholder="Period 7" name="subject7" class="col-md-3 m-3  class=" form-control col-md-8 @error('subject') is-invalid @enderror" required>
              <input type="text" placeholder="Period 8" name="subject8" class="col-md-3 m-3  class=" form-control col-md-8 @error('subject') is-invalid @enderror" required>
            </div>
           

            <br>

            {{-- <select id="period" name="period" class="form-control col-md-8 @error('period') is-invalid @enderror" >
                <option value="" selected>select Period</option>
                @foreach ($periods as $period)
                <option value="{{($period->id)}}">{{$period->period}}</option>
                
                @endforeach    
                
            </select>
                
            <br>
            <input type="text"  name="subject" class="form-control col-md-8 @error('subject') is-invalid @enderror"> --}}
            <br>

            <input type="submit" value="Add to Timetable" class="btn btn-warning pull-right col-md-5">


        </form>
   
       

    </div>
  </div>
</div> 
     
@endsection