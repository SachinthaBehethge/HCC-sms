@extends('layouts.admin.main')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
                <input type="text" id="stream" name="subject" placeholder="ex:English" class="form-control" required>
            </div><br>
            {{-- <select class="form-control multiple-select {{ $errors->has('streams') ? 'is-invalid' : '' }}" name="streams[]" id="streams" multiple required>
                @foreach($streams as $stream)
                    <option value="{{ $stream->id }}" {{ in_array($stream->id, old('streams', [])) ? 'selected' : '' }}>{{ $stream->stream_name }}</option>
                @endforeach
            </select> --}}
            <select class="form-control multiple-select " name="streams[]" id="streams" multiple>
                
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
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>  
<script>
$('#streams').select2({
    selectOnClose: true
});
</script> 
@endsection