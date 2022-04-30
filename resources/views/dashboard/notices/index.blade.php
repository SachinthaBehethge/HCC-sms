@extends('layouts.userdashboard.userdashboard')

@section('content')
<div class="col-md-12 content">
    <div class="panel panel-default">
      <div class="panel-heading">
          <h1 class="page-header">Class Notices</h1>
      </div>
      <div class="panel-body">
        <br>
        <hr>

        <div class="row">
          @forelse($notices as $key => $notice)

        
          <div class="card  col-md-3 bg-success mr-3 ml-3" style="width: 18rem;">
            <div class="card-body">
              <small class="card-subtitle mb-2 text-muted  "> updated at : {{$notice->updated_at}}</small>
              
              <h3 class="card-title ">{{$key+1}} - {{$notice->title}} 

               
              
               
                
              </h3>
              
              <p class="card-text text-center">{{$notice->body}}</p>
              <br>
              
              <div class="row"> 
               
               
                <a href="{{ route('notices.edit', $notice->id) }}" class="btn btn-xs btn-primary col-md-6 mb-2">Update</a>
                <div class="col-md-6 text-center">
                  <form method="POST" action="{{route('notices.destroy', $notice->id)}}">
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