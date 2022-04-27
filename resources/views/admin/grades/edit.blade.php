@extends('layouts.admin.main')
@section('content')
<style>
    .submit {
        background: rgb(99, 39, 120);
        box-shadow: none;
        border: none
    }
</style>
<div class="col-md-10 content">
  <div class="panel panel-default">
    <div class="panel-heading">
        <h1 class="page-header">Update Grade</h1>
    </div>
    <div class="panel-body">
        <form action="{{route('admin.grades.update', $grade->id)}}" method="POST"  enctype="multipart/form-data">
        {{method_field('PUT')}}
           @csrf
          
            <br>
            <div class="form-floating">
                <label for="floating-input">Grade :</label>
                <input type="text" id="grade" name="grade" value="{{$grade->name}}"  class="form-control" required>
            </div>
            <br>

            <div class="form-floating">            
                <label for="floatingInput">Section :</label>
                    <input type="text" name="Section" value="{{$grade->section->section_name}}"  class="form-control" disabled>
    
                    <br>
                    <select id="section" name="section" class="form-control @error('section') is-invalid @enderror" >
                        <option value="{{$grade->section->id}}" selected>select Section</option>
                        @foreach ($sections as $section)
                        <option value="{{($section->id)}}">{{$section->section_name}}</option>
                        
                        @endforeach    
                        
                    </select>
                    
            </div>
            <br>
            <div class="mt-5 mb-5 text-center"><input class="btn btn-primary submit" type="submit" value="Update Grade"></div>

        </form>
      
    </div>
  </div>
</div> 
     
@endsection