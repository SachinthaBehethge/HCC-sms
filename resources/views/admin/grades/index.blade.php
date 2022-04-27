@extends('layouts.admin.main')
@section('content')
<div class="col-md-10 content">
  <div class="panel panel-default">
      <div class="panel-heading">
        <h1 class="page-header">Grades</h1>
      </div>
      <div class="panel-body">
            <table class=" table table-dark table-hover table-responsive ">
                <tr>
                    <th>No</th>
                    <th>Grade</th>
                    <th style="padding-left: 10%">Actions</th>
                </tr>
                @forelse($grades as $grade)
    
                        <tr>
                            <td>{{$grade->id }}</td>
                            <td>{{$grade->name}}</td>
                            
                            <td> 
                                <a href="{{ route('admin.grades.show', $grade->id) }}" class="btn btn-success col-md-2" style="margin-right: 2px">View</a>
                                <a href="{{route('admin.grades.edit', $grade->id)}}" class="btn btn-primary col-md-2" style="margin-right: 2px">Update Grade</a>

                                <form method="POST" action="{{route('admin.grades.destroy', $grade->id)}}">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <input type="submit" value="Delete" onclick="return confirm('Are you sure you want to delete this grade?')"
                                    class="btn  btn-danger col-md-2" />
                                </form>
                                
                            <td>

                            </td>
                            
    
    
                            
                        </tr>
    
                    @empty
                        <tr>
                            <td colspan="2">No Grades Found</td>
                        </tr>
                    @endforelse
                   
            </table>
       
            <a href="{{route('admin.grades.create')}}"><button type="button" class="btn btn-warning pull-right">Add New Section</button></a>

    </div>
  </div>
</div> 
     
@endsection