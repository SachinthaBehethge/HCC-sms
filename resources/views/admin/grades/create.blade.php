@extends('layouts.admin.main')
@section('content')
<div class="col-md-10 content">
  <div class="panel panel-default">
    <div class="panel-heading">
        <h1 class="page-header">Add New Grade</h1>
    </div>
    <div class="panel-body">
        <form action="{{route('admin.grades.store')}}" method="POST"  enctype="multipart/form-data">
           @csrf
           <div class="form-floating">            
            <label for="floatingInput">Section :</label>
                <br>
                <select id="section" name="section" class="form-control @error('section') is-invalid @enderror" required>
                    <option value="" selected>select Section</option>
                    @foreach ($sections as $section)
                    <option value="{{($section->id)}}">{{$section->section_name}}</option>
                    
                @endforeach    
                    
                </select>
                
            </div>
            <br>
            <div class="form-floating">
                <label for="floating-input">Grade :</label>
                <input type="text" id="grade" name="grade" placeholder="ex: grade 6" class="form-control" required>
            </div>
            <br>
            <input type="submit" value="Save" class="btn btn-warning pull-right">

        </form>
      
    </div>
  </div>
</div> 
     
@endsection