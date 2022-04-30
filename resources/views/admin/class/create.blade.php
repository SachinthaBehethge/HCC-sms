@extends('layouts.admin.main')
@section('content')
<div class="col-md-10 content">
  <div class="panel panel-default">
    <div class="panel-heading">
        <h1 class="page-header">Add New Class</h1>
    </div>
    <div class="panel-body">
        <form action="{{route('admin.classes.store')}}" method="POST"  enctype="multipart/form-data">
           @csrf
            <br>
           

            <div class="form-floating">            
                <label for="floatingInput">Grade :</label>
                    <br>
                    <select id="grade" name="grade" class="form-control @error('grade') is-invalid @enderror" >
                        <option value="" selected>select Grade</option>
                        @foreach ($grades as $grade)
                        <option value="{{($grade->id)}}">{{$grade->name}}</option>
                        
                    @endforeach    
                        
                    </select>
                    
            </div>
            <br>
            <div class="form-floating">            
                <label for="floatingInput">class :</label>
                    <br>
                    <select id="class" name="class" class="form-control @error('class') is-invalid @enderror" >
                        <option value="" selected>select class</option>   
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        
                    </select>
                    
            </div>
            <br>
            <div class="form-floating">            
                <label for="floatingInput">Class Teacher :</label>
                    <br>
                    <select id="classteacher" name="classteacher" class="form-control @error('classteacher') is-invalid @enderror" >
                        <option value="" selected>select class teacher</option>
                    @foreach ($teachers as $teacher)
                        @if ($teacher->is_classteacher==1)
                        <option value="{{($teacher->id)}}">{{$teacher->name}}</option>
                        @endif
                    @endforeach    
                        
                    </select>
                    
            </div>
            <br>
            <input type="submit" value="Save" class="btn btn-warning pull-right">

        </form>
      
    </div>
  </div>
</div> 
     
@endsection