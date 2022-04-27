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
        <h1 class="page-header">{{$term->term_name}} - Update Term</h1>
    </div>
    <div class="panel-body">
        <form action="{{route('admin.terms.update',$term->id)}}" method="POST"  enctype="multipart/form-data">
            {{ method_field('put') }}
            @csrf
            <br>
            <h2>{{$term->term_name}}</h2>
            <br>
            <div class="form-floating">
                <label for="floating-input">Start Date :</label>
                <input type="date" data-date-format="YYYY MM DD" name="start" value="{{$term->start}}" class="form-control" >
            </div>
            <br>
            <div class="form-floating">
                <label for="floating-input">End Date :</label>
                <input type="date"  name="end" value="{{$term->end}}" class="form-control" >
            </div>
            <br>
            <div class="mt-5 mb-5 text-center"><input class="btn btn-primary submit" type="submit" value="Update Term"></div>

        </form>
      
    </div>
  </div>
</div> 
     
@endsection