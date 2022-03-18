@extends('layouts.admin.main')
@section('content')
<div class="col-md-10 content">
  <div class="panel panel-default">
      <div class="panel-heading">
        <h1 class="page-header">Subjects</h1>
      </div>
      <div class="panel-body">
            <table class=" table table-dark table-hover table-responsive ">
                <tr>
                    <th>No</th>
                    <th>Section</th>
                    <th>Action</th>
                </tr>
                @forelse($subjects as $subject)
    
                        <tr>
                            <td>{{$subject->id }}</td>
                            <td>{{$subject->name}}</td>
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
    
                    @empty
                        <tr>
                            <td colspan="2">No Streams Found</td>
                        </tr>
                    @endforelse
                   
            </table>
       
            <a href="{{route('admin.subjects.create')}}"><button type="button" class="btn btn-warning pull-right">Add New Subject</button></a>

    </div>
  </div>
</div> 
     
@endsection