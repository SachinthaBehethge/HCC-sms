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
                
                <label for="floating-input">Subject Name :</label>
                <input type="text" id="subject" name="subject" placeholder="ex: Grade 6 English" class="form-control @error('subject') is-invalid @enderror" required>
               
            </div> <br>

            <div class="form-floating">            
                <label for="floatingInput">Grade :</label>
                <br>
                <select id="grade" name="grade" class="form-control @error('grade') is-invalid @enderror" >
                    <option value="" selected>Select Grade</option>
                    @foreach ($grades as $grade)
                    <option value="{{($grade->id)}}">{{$grade->name}}</option>
                        
                    @endforeach    
                        
                </select>
            </div> <br>

            <div class="form-floating">            
                <label for="floatingInput">Subject Category :</label>
                <br>
                <select id="category" name="category" class="form-control @error('category') is-invalid @enderror" >
                    <option value="" selected>Select Subject Category</option>
                    @foreach ($categories as $category)
                    <option value="{{($category->id)}}">{{$category->subject_category}}</option>
                        
                    @endforeach    
                        
                </select>
            </div> <br>


           
           
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