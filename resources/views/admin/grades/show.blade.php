@extends('layouts.admin.main')
@section('content')


<div class="col-md-10 content">
  <div class="panel panel-default">
      <div class="panel-heading">
        <h1 class="page-header">{{$grade->name}}</h1>
      </div>
      <a href="{{route('admin.grades.edit', $grade->id)}}"><button type="button" class="btn btn-primary pull-right col-md-2 h-3">Update Grade</button></a>

      <div class="panel-body">
            <table class=" table table-dark table-hover table-responsive ">
                <tr>
                    <th>No</th>
                    <th>Class</th>
                    <th>Class Teacher</th>
                    <th>No of Students</th>
                    <th>Actions</th>
                </tr>
                @forelse($grade->classes as $key => $class)
    
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$class->class_name }}</td>
                            <td>{{$class->teacher->name}}</td>
                            <td>{{$class->students->count()}}</td>
                            <td> <a href="{{route('admin.classes.edit', $class->id) }}" class="btn btn-success col-md-6" style="margin-right: 2px">Change class Teacher</a>
                            
                             <form method="POST" action="{{route('admin.classes.destroy', $class->id)}}">
                                @csrf
                                {{method_field('DELETE')}}
                                <input type="submit" value="Delete" onclick="return confirm('Are you sure you want to delete this grade?')"
                                    class="btn  btn-danger col-md-5" />
                            </form> 
                                
                            <td>

                            </td>
                            
    
    
                            
                        </tr>
    
                    @empty
                        <tr>
                            <td colspan="2">No Classes Found in grade</td>
                        </tr>
                    @endforelse
                   
            </table>
       
            <a href="{{route('admin.grades.index')}}"><button type="button" class="btn btn-secondary pull-right">Back</button></a>

    </div>
  </div>
</div> 
     
@endsection