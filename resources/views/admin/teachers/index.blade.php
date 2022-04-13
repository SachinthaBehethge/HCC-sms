@extends('layouts.admin.main')
@section('content')
<div class="col-md-10 content">
    <div class="panel panel-default">
        <div class="panel-heading">
          <h1 class="page-header">Teachers List</h1>
        </div>
        <div class="panel-body">
              <table class=" table table-boardered table-hover table-responssive ">
                  <tr>
                      <th>#</th>
                      <th>Teacher No.</th>
                      <th> Teacher Name</th> Name</th>
                      <th>Is Class Teacher</th>
                      <th>Action</th>
                  </tr>
                 
                  @foreach($teachers as $key => $teacher)
    
                  <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$teacher->teacher_no }}</td>
                      <td>{{$teacher->name}}</td>
                      <td>
                        <form method="POST" action="{{route('admin.teachers.classteacher')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="custom-control custom-switch">
                                <input type="checkbox" value="{{$teacher->is_classteacher?"classteacher":""}}" class="custom-control-input isClassTeacher" {{$teacher->is_classteacher?"":"checked"}}>
                                 <input type="hidden" name="teacher_id" value="{{$teacher->id}}">
                                <label class="custom-control-label" for="customSwitch1">{{$teacher->is_classteacher?"Not a Class Teacher":"Class Teacher"}}</label>
                              </div>
                         

                      </td>
                      <td>
                        </form>
                        <a href="{{ route('admin.teachers.show', $teacher->id) }}" class="btn btn-success col-md-6" style="margin-right: 2px">View</a>
                            
                        <form method="POST" action="{{route('admin.teachers.destroy', $teacher->id)}}">
                        @csrf
                        {{method_field('DELETE')}}
                        
                        <input type="submit" value="delete" onclick="return confirm('Are you sure you want to delete this grade?')"
                            class="btn  btn-danger col-md-5 " />
                      </td>


                      
                  </tr>

             
              @endforeach
                     
              </table>
         
              <a href="{{route('admin.teachers.create')}}"><button type="button" class="btn btn-warning pull-right">Add New Teacher</button></a>
  
      </div>
    </div>
</div> 

@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous"></script>
<script>
     $(document).ready(function(){
        $('.isClassTeacher').on('change', function(){
            if (confirm('Are you Sure you want to change the teacher status?')) {
              
                    $(this).parents('form:first').submit();
           

            } else {
               
            }


               

        });

     });
</script>

@endsection 