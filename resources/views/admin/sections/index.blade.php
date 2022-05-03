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
                    
                </tr>
                @forelse($sections as $key => $section)
    
                        <tr>
                            <td>{{$key+1 }}</td>
                            <td>{{$section->section_name}}</td>
                            <td> 
                                {{-- <a href="{{ route('admin.sections.edit', $section->id) }}" class="btn btn-xs btn-primary col-md-8 mb-2">Edit</a> --}}
                                
                                {{-- <form method="POST" action="{{route('admin.sections.destroy', $section->id)}}">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    
                                    <input type="submit" value="Delete" onclick="return confirm('Are you sure you want to delete this grade?')"
                                        class="btn  btn-danger col-md-5 " />
                                </form> --}}
                                
                        

                            </td>
                            
    
    
                            
                        </tr>
    
                    @empty
                        <tr>
                            <td colspan="2">No Sections Found</td>
                        </tr>
                    
                @endforelse
                   
            </table>
       
            <a href="{{route('admin.sections.create')}}"><button type="button" class="btn btn-warning pull-right">Add New Section</button></a>

    </div>
  </div>
</div> 
     
@endsection