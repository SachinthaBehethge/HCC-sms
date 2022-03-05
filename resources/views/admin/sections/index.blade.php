@extends('layouts.admin.main')
@section('content')
<div class="col-md-10 content">
  <div class="panel panel-default">
      <div class="panel-heading">
        <h1 class="page-header">Sections</h1>
      </div>
      <div class="panel-body">
            <table class=" table table-dark table-hover table-responsive ">
                <tr>
                    <th>No</th>
                    <th>Section</th>
                    <th>Action</th>
                </tr>
                @forelse($sections as $section)
    
                        <tr>
                            <td>{{$section->id }}</td>
                            <td>{{$section->name}}</td>
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
                            <td colspan="2">No Grades Found</td>
                        </tr>
                    @endforelse
                   
            </table>
       
            <a href="{{route('admin.sections.create')}}"><button type="button" class="btn btn-warning pull-right">Add New Section</button></a>

    </div>
  </div>
</div> 
     
@endsection