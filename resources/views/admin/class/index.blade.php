@extends('layouts.admin.main')
@section('content')
<div class="col-md-10 content">
    <div class="panel panel-default">
        <div class="panel-heading">
          <h1 class="page-header">Classes List</h1>
        </div>
        <div class="panel-body">
          <a href="{{route('admin.classes.create')}}"><button type="button" class="btn btn-warning pull-right">Add New Class</button></a><br>
        
              <table class=" table table-boardered table-hover table-responssive mt-5">
                  <tr>
                      <th>#</th>
                      <th>section</th>
                      <th> Class</th> 
                      <th>Class Teacher</th>
                      <th>Action</th>
                  </tr>
                 
                  @foreach($classes as $key => $class)
    
                  <tr>
                      <td>{{$key+1}}</td>

                     
                      <td>
                       
                       {{$class->grade->name}}
                         
                    
                        
                      </td>
                      <td>
                        {{$class->class_name}}
                      
                         
                    
                        
                      </td>
                      <td>
                       
                        {{$class->teacher->name}}
                         
                    
                        
                      </td>
                      <td>
                       

                      </td>
                      <td>
                       
                      </td>


                      
                  </tr>
                  @endforeach
             
            
                     
              </table>
         
  
      </div>
    </div>
</div> 

@endsection
