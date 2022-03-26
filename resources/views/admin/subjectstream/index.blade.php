@extends('layouts.admin.main')
@section('content')
<div class="col-md-10 content">
  <div class="panel panel-default">
      <div class="panel-heading">
        <h1 class="page-header">Streams</h1>
        
      </div>
      <div class="panel-body">
            <table class=" table table-dark table-hover table-responsive ">
                <tr>
                    <th>No</th>
                    <th>Stream</th>
                    <th>Action</th>
                </tr>
                @forelse($streams as $stream)
    
                        <tr>
                            <td>{{$stream->id }}</td>
                            <td>{{$stream->stream_name}}</td>
                            <td> 
                                <a href="{{ route('admin.streams.edit', $stream->id) }}" class="btn btn-xs btn-primary col-md-8 mb-2">Edit</a>
                                
                                <form method="POST" action="{{route('admin.streams.destroy', $stream->id)}}">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    
                                    <input type="submit" value="Delete" onclick="return confirm('Are you sure you want to delete this grade?')"
                                        class="btn btn-xs btn-danger col-md-8 " />
                                </form>
                                
                        

                            </td>
                            
    
    
                            
                        </tr>
    
                    @empty
                        <tr>
                            <td colspan="2">No Streams Found</td>
                        </tr>
                    @endforelse
                   
            </table>
       
            <a href="{{route('admin.streams.create')}}"><button type="button" class="btn btn-warning pull-right">Add New Stream</button></a>

    </div>
  </div>
</div> 
     
@endsection