@extends('layouts.admin.main')
@section('content')
<div class="col-md-10 content">
  <div class="panel panel-default">
      <div class="panel-heading">
        <h1 class="page-header">Students List</h1>
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
    
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$student->index_no }}</td>
                            <td>{{$student->fullname}}</td>
                            {{-- <td> <a href="{{ route('#', $section->id) }}" class="btn btn-xs btn-primary">Edit</a> --}}
                            
                            {{-- <form method="POST" action="{{route('admin.sections.destroy', $section->id)}}">
                                @csrf
                                {{method_field('DELETE')}}
                                <input type="submit" value="Delete" onclick="return confirm('Are you sure you want to delete this grade?')"
                                    class="btn btn-xs btn-danger" />
                            </form> --}}
                                
                            <td>

                            </td>
                            
    
    
                            
                        </tr>
    
                   
                    @endforeach
                   
            </table>
       
            <a href="{{route('admin.student.create')}}"><button type="button" class="btn btn-warning pull-right">Add New Student</button></a>

    </div>
  </div>
</div> 
     
@endsection