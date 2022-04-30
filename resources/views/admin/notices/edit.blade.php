@extends('layouts.admin.main')

@section('content')
<div class="col-md-10 content">
    <div class="panel panel-default">
      <div class="panel-heading">
          <h1 class="page-header">Update Notices</h1>
      </div>
      <div class="panel-body">
        @include('components.validation')
          <form action="{{route('admin.schoolnotices.update', $notice->id)}}" method="POST"  enctype="multipart/form-data">
             @csrf
             {{method_field('PUT')}} 
              <br>
              <div class="form-floating">
                  <label for="floating-input">Notice Title</label>
                  <input type="text" id="notice_title" name="notice_title" placeholder="title"  value="{{$notice->title}}" class="form-control" required>
              </div>
              
              <br>


              <div class="form-floating">
                <label for="floating-input">Notice Body</label>
                <textarea  id="noticeBody" name="noticeBody" rows="5" placeholder="Enter Notice Here "  class="form-control" required></textarea>
             </div>
             <br>
             {{-- <div class="form-floating">
              
              <input type="text"  value="" name="class" placeholder="id" class="form-control"  required>
            </div> --}}
              <input type="submit" value="Update" class="btn btn-primary pull-right">
  
          </form>
        
      </div>
    </div>
  </div> 
@endsection