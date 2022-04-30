@extends('layouts.admin.main')

@section('content')
<div class="col-md-10 content">
    <div class="panel col-md-12 panel-default">
      <div class="panel-heading">
          <h1 class="page-header">School Notices</h1>
      </div>
      <br>
      <a href="{{route('admin.schoolnotices.create')}}"><button type="button" class="btn btn-warning pull-right">Send Notice</button></a><br>

      <div class="panel-body col-md-12">
        
        <hr>

        <div class="row col-md-12">
          @forelse($notices as $key => $notice)

        
          <div class="card  col-md-12 bg-success mr-3 ml-3" style="width: 25rem;">
            <div class="card-body">
              <small class="card-subtitle mb-2 text-muted  "> updated at : {{$notice->updated_at}}</small>
              
              <h3 class="card-title ">{{$key+1}} - {{$notice->title}} 

               
              
               
                
              </h3>
              
              <p class="card-text text-center">{{$notice->body}}</p>
              <br>
              
              <div class="row col-md-12"> 
               
               
                <a href="{{ route('admin.schoolnotices.edit', $notice->id) }}" class="btn  btn-primary col-md-6 pull-right">Update</a>
                <div class="col-md-6  pull-right">
                  <form method="POST" action="{{route('admin.schoolnotices.destroy', $notice->id)}}">
                    @csrf
                    {{method_field('DELETE')}} 
                    {{-- <i  class="fa fa-trash fa-lg col-md-4 pull-left" aria-hidden="true" type="submit" onclick="return confirm('Are you sure you want to delete this notice?')" style="color: red"></i> --}}
                    <input style="font-family: FontAwesome; color:crimson; height:32px; width:32px"  value="&#xf1f8;" type="submit" onclick="return confirm('Are you sure you want to delete this notice?')" >
                  </form>
                </div>
              </div>
             
              
             
            </div>
          </div>     


                      
                

              @empty
                  <div>
                      <h3>No notices Found</h3>
                  </div>
              @endforelse

        </div>
         
             
      
      </div>
    </div>
  </div> 
@endsection