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
        <h1 class="page-header">Change Class Teacher</h1>
    </div>
    <div class="panel-body">
        <form action="{{route('admin.classes.store', $class->id)}}" method="POST"  enctype="multipart/form-data">
            {{method_field('PUT')}}
           @csrf
            <br>
            <div class="form-floating">
                <label for="floating-input">Grade :</label>
                <input type="text"  placeholder="{{$class->grade->name}}" class="form-control" disabled>
            </div>
            <br>

            <div class="form-floating">
                <label for="floating-input">class :</label>
                <input type="text"  placeholder="{{$class->class_name}}" class="form-control" disabled>
            </div>

           
            
            <br>
            <div class="form-floating">            
                <label for="floatingInput">Class Teacher :</label>
                    <input type="text"  placeholder="{{$class->teacher->name}}" class="form-control" disabled>

                    <br>
                    <select id="classteacher" name="classteacher" class="form-control @error('classteacher') is-invalid @enderror" >
                        <option value="{{$class->teacher->id}}" selected>select class teacher</option>
                    @foreach ($teachers as $teacher)
                        @if ($teacher->is_classteacher==1)
                        <option value="{{($teacher->id)}}">{{$teacher->name}}</option>
                        @endif
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