@extends('layouts.admin.main')
@section('content')
<div class="col-md-10 content">
  <div class="panel panel-default">
    <div class="panel-heading">
        <h1 class="page-header">Add New Subject</h1>
    </div>
    <div class="panel-body">
        <form action="{{route('admin.subjects.store')}}" method="POST"  enctype="multipart/form-data">
           @csrf
            <br>
            <div class="form-floating">
                <label for="floating-input">Subject :</label>
                <input type="text" id="stream" name="stream" placeholder="ex:English" class="form-control" required>
            </div><br>
            <select class="form-control select {{ $errors->has('streams') ? 'is-invalid' : '' }}" name="streams[]" id="streams" multiple required>
                @foreach($streams as $stream)
                    <option value="{{ $stream->id }}" {{ in_array($stream->id, old('streams', [])) ? 'selected' : '' }}>{{ $stream->stream_name }}</option>
                @endforeach
            </select>
            <select class="form-control" name="streams" id="strerams">
                <option value="">--Select Streams--</option>
                @foreach ($streams as $stream)
                 <option value="{{($stream->id)}}">{{$stream->stream_name}}</option>
                    
                @endforeach
            </select>
            <br>
            <input type="submit" value="Save" class="btn btn-warning pull-right">

        </form>
      
    </div>
  </div>
</div> 
     
@endsection