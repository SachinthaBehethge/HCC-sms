@extends('layouts.admin.main')
@section('content')
<div class="col-md-10 content">
  <div class="panel panel-default">
      <div class="panel-heading">
        <h1 class="page-header">Students List</h1>
        <form class="navbar-form pullright" method="GET" role="search">
          <div class="form-group">
            <input type="text" name="q" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
        </form>
      </div>
      <div class="panel-body">
            <table class=" table table-boardered table-hover table-responssive ">
                <tr>
                    <th>#</th>
                    <th>Index No.</th>
                    <th>Student Name</th>
                    <th>Action</th>
                </tr>
                @foreach($students as $key => $student)
    
                        <tr id="tableRow">
                            <td>{{$key+1}}</td>
                            <td>{{$student->index_no }}</td>
                            <td>{{$student->fullname}}
                            </td>
                            <td> 
                              <a href="{{ route('admin.student.show', $student->id) }}" class="btn btn-success col-md-6" style="margin-right: 2px">View</a>
                              
                              <form method="POST" action="{{route('admin.student.destroy', $student->id)}}">
                                @csrf
                                {{method_field('DELETE')}}
                                
                                <input type="submit" value="delete" onclick="return confirm('Are you sure you want to delete this grade?')"
                                    class="btn  btn-danger col-md-5 " />
                            </form>

                              {{-- <a href="{{ route('admin.student.edit', $student->id) }}" class="btn btn-xs btn-primary col-md-8 mb-2">Edit</a>
                              
                              <form method="POST" action="{{route('admin.student.destroy', $student->id)}}">
                                  @csrf
                                  {{method_field('DELETE')}}
                                  
                                  <input type="submit" value="Delete" onclick="return confirm('Are you sure you want to delete this grade?')"
                                      class="btn btn-xs btn-danger col-md-8 " />
                              </form> --}}
                              
                      

                          </td>
                            
    
    
                            
                        </tr>
    
                   
                    @endforeach
                   
            </table>
       
            <a href="{{route('admin.student.create')}}"><button type="button" class="btn btn-warning pull-right">Add New Student</button></a>

    </div>
  </div>
</div> 
     
@endsection
