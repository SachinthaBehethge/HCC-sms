@extends('layouts.admin.main')
@section('content')
<div class="col-md-10 content">
  <div class="panel panel-default">
      <div class="panel-heading">
        <h1 class="page-header">Terms</h1>
        
      </div>
      <div class="panel-body">
            <table class=" table table-dark table-hover table-responsive ">
                <tr>
                    <th>No</th>
                    <th>Term</th>
                    <th>Starting Date</th>
                    <th>End Date</th>
                    <th>Action</th>
                </tr>
                @forelse($terms as $key => $term)
    
                        <tr>
                            <td>{{$key+1 }}</td>
                            <td>{{$term->term_name}}</td>
                            <td>{{$term->start}}</td>
                            <td>{{$term->end}}</td>
                            <td> 
                                <a href="{{ route('admin.terms.edit', $term->id) }}" class="btn btn-success col-md-6" style="margin-right: 2px">Edit</a> 
                                                            
                            </td>
                            
    
    
                            
                        </tr>
    
                    @empty
                        <tr>
                            <td colspan="2">No Sections Found</td>
                        </tr>
                       
                @endforelse
                   
            </table>
       

    </div>
  </div>
</div> 
     
@endsection