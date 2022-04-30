@extends('layouts.admin.main')

@section('content')
<div class="col-md-10 content">
    <div class="panel panel-default">
      <div class="panel-heading">
          <h1 class="page-header">Add Notices</h1>
      </div>
      <div class="panel-body">
        @include('components.validation')
          <form action="{{route('admin.schoolnotices.store')}}" method="POST"  enctype="multipart/form-data">
             @csrf
              <br>
              <div class="form-floating">
                  <label for="floating-input">Notice Title</label>
                  <input type="text" id="notice_title" name="notice_title" placeholder="title" class="form-control" required>
              </div>
              
              <br>


              <div class="form-floating">
                <label for="floating-input">Notice Body</label>
                <textarea  id="noticeBody" name="noticeBody" rows="5" placeholder="Enter Notice Here " class="form-control" required></textarea>
             </div>
             <br>
             {{-- <div class="form-floating">
              
              <input type="text"  value="" name="class" placeholder="id" class="form-control"  required>
            </div> --}}
              <input type="submit" value="Send Notice" class="btn btn-warning pull-right">
  
          </form>
        
      </div>
    </div>
  </div> 
@endsection