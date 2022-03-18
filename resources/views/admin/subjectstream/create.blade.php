@extends('layouts.admin.main')
@section('content')
<div class="col-md-10 content">
  <div class="panel panel-default">
    <div class="panel-heading">
        <h1 class="page-header">Add New Stream</h1>
    </div>
    <div class="panel-body">
        <form action="{{route('admin.streams.store')}}" method="POST"  enctype="multipart/form-data">
           @csrf
            <br>
            <div class="form-floating">
                <label for="floating-input">Stream :</label>
                <input type="text" id="stream" name="stream" placeholder="ex: O/L" class="form-control" required>
            </div>
            <br>
            <input type="submit" value="Save" class="btn btn-warning pull-right">

        </form>
      
    </div>
  </div>
</div> 
     
@endsection