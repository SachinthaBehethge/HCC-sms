@extends('layouts.admin.main')
@section('content')
<div class="col-md-10 content">
  <div class="panel panel-default">
    <div class="panel-heading">
        <h1 class="page-header">Add New Section</h1>
    </div>
    <div class="panel-body">
        <form action="{{route('admin.sections.store')}}" method="post">
            <br>
            <div class="form-floating">
                <label for="floating-input">section</label>
                <input type="text" id="section" name="section" placeholder="ex: grade 6" class="form-control" required>
            </div>
            <br>
            <input type="submit" value="Save" class="btn btn-warning pull-right">

        </form>
      
    </div>
  </div>
</div> 
     
@endsection