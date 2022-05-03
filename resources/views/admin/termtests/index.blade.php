@extends('layouts.admin.main')
@section('content')
<div class="col-md-10 content">
  <div class="panel panel-default">
      <div class="panel-heading">
        <h1 class="page-header">Term Tests</h1>
        
      </div>
      <div class="panel-body">
        <a href="{{route('admin.termtests.create')}}"><button type="button" class="btn btn-warning pull-right">Add New Term Test</button></a>
        <br>
            <table class=" table table-dark table-hover table-responsive ">
                <tr>
                    <th>No</th>
                    <th>Term</th>
                    <th>Subject</th>
                    <th>Date</th>
                    <th>Start</th>
                    <th>End</th>
                    <th>Action</th>
                </tr>
                @forelse($termtests as $key => $termtest)
    
                        <tr>
                            <td>{{$key+1 }}</td>
                            <td>{{$termtest->term->term_name}}</td>
                            <td>{{$termtest->subject->subject_name}}</td>
                            <td>{{$termtest->test_date}}</td>
                            <td>{{$termtest->start_time}}</td>
                            <td>{{$termtest->end_time}}</td>
                            <td> 
                                {{-- <a href="{{ route('admin.termtests.edit', $termtest->id) }}" class="btn btn-md btn-success col-md-6" style="margin-right: 2px">Edit</a> --}}
                                
                                <form method="POST" action="{{route('admin.termtests.destroy', $termtest->id)}}">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    
                                      
                                        @if ($termtest->test_date <= $today)
                                        <input type="submit" value="Delete" onclick="return confirm('Are you sure you want to delete this grade?')"
                                        class="btn btn-md btn-danger  "  disabled/>
                                        @else
                                        <input type="submit" value="Delete" onclick="return confirm('Are you sure you want to delete this grade?')"
                                        class="btn btn-md btn-danger  " />
                                        @endif
                                    
                                       
                                </form>
                                
                        

                            </td> 
                            
    
    
                            
                        </tr>
    
                    @empty
                        <tr>
                            <td colspan="2">No Termtests Found</td>
                        </tr>
                    @endforelse
                   
            </table>
       

    </div>
  </div>
</div> 
     
@endsection