@extends('layouts.admin.main')
@section('content')
<div class="col-md-10 content">
  <div class="panel panel-default">
    <div class="panel-heading">
        <h1 class="page-header">Create Term Test</h1>
    </div>
    <div class="panel-body">
        <form action="{{route('admin.termtests.store')}}" method="POST"  enctype="multipart/form-data">
           @csrf
            <br>

            <div class="form-floating">            
                <label for="floatingInput">Term :</label>
                <br>
                <select id="term" name="term" class="form-control @error('term') is-invalid @enderror" >
                    <option value="" selected>Select Term</option>
                    @foreach ($terms as $term)
                    <option value="{{($term->id)}}">{{$term->term_name}}</option>
                        
                    @endforeach    
                        
                </select>
            </div> <br>

            <div class="form-floating">            
                <label for="floatingInput">Subject :</label>
                <br>
                <select id="subject" name="subject" class="form-control @error('subject') is-invalid @enderror" >
                    <option value="" selected>Select Subject</option>
                    @foreach ($subjects as $subject)
                    <option value="{{($subject->id)}}">{{$subject->subject_name}}</option>
                        
                    @endforeach    
                        
                </select>
            </div><br>

            <div class="form-floating">
                <label for="floatingInput">Test Date :</label> 
                <input type="date" id="testdate" name="testdate"  class="form-control @error('testdate') is-invalid @enderror"/>
                @error('testdate')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div> <br>

            <div class="form-floating">
                <label for="floatingInput"> Sart Time :</label> 
                <input type="time" id="start" name="start" min="07:30" max="14:00" required>
                <small>School hours are 7.30am to 1.30pm</small>
            </div> <br>

            <div class="form-floating">
                <label for="floatingInput"> End Time :</label> 
                <input type="time" id="end" name="end" min="07:30" max="14:00" required>
                <small>School hours are 7.30am to 1.30pm</small>
            </div> <br>


            <br>
            <input type="submit" value="Save" class="btn btn-warning pull-right">

        </form>
      
    </div>
  </div>
</div> 
     
@endsection