@extends('layouts.admin.main')
@section('content')
<div class="col-md-10 content">
  <div class="panel panel-default">
      <div class="panel-heading">
        <h1 class="page-header">Sections</h1>
      </div>
      <div class="panel-body">
            <table class=" table table-dark table-hover table-responsive ">
                <tr>
                    <th>No</th>
                    <th>Section</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td></td>
                </tr>
                   
            </table>
       
            <a href="{{route('admin.sections.create')}}"><button type="button" class="btn btn-warning pull-right">Add New Section</button></a>

    </div>
  </div>
</div> 
     
@endsection