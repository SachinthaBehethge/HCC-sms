@extends('layouts.admin.main')
@section('content')
<div class="col-md-10 content">
  <div class="panel panel-default">
      <div class="panel-heading">
        <h1 class="page-header">Subjects</h1>
      </div>
      <div class="panel-body">
        <a href="{{route('admin.subjects.create')}}"><button type="button" class="btn btn-warning pull-right">Add New Subject</button></a>
        <br>

        @foreach ($grades as $grade)
            <button id="subbtn" class="btn btn-primary " onclick="show()">
                {{$grade->name}} - Subjects
            </button>
            <br><br>
            <table class=" table table-dark table-hover table-responsive " id="showsub">
                <tr>
                    <th>No</th>
                    <th>Subject</th>
                    <th>Grade</th>
                    <th>Action</th>
                </tr>
                @forelse($grade->subjects as $key => $subject)
    
                        <tr >
                            <td>{{$key+1}}</td>
                            <td>{{$subject->subject_name}}</td>
                            <td>{{$subject->grade->name}}</td>
                            
                            <td> <a href="{{ route('admin.subjects.edit', $subject->id) }}" class="btn btn-success col-md-6" style="margin-right: 2px">Edit</a> 
                            
                            <form method="POST" action="{{route('admin.sections.destroy', $subject->id)}}">
                                @csrf
                                {{method_field('DELETE')}}
                                <input type="submit" value="Delete" onclick="return confirm('Are you sure you want to delete this Subject?')"
                                    class="btn  btn-danger col-md-5" />
                            </form>
                                
                            <td>

                            </td>
                            
    
    
                            
                        </tr>
    
                    @empty
                        <tr>
                            <td colspan="2">No Subjects Found</td>
                        </tr>
                    @endforelse
                   
            </table>
        @endforeach

    </div>
  </div>
</div> 
     
@endsection
@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>

   


   
   
        
</script>
@endsection