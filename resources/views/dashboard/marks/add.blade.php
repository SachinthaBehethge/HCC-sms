@extends('layouts.userdashboard.userdashboard')
@section('content')
<div class="col-md-10 content">
  <div class="panel panel-default">
      <div class="panel-heading">
        <h1 class="page-header">{{$termtest->term->term_name}} - {{$termtest->subject->subject_name}} Mark sheet</h1>
        <br>
        <hr>
      </div>
      <div class="panel-body">
        @include('components.validation')
        <form action="{{route('marks.store')}}" method="POST"  enctype="multipart/form-data">
             @csrf
           <br>
          <div hidden>
            <input type="text" class="form-control" name="term" value="{{$termtest->id}}" >

          </div>
            <table class=" table table-warning table-hover table-responsive table-center">
             
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-6">Student Name</th>
                <th class="col-md-3">Index No</th>
                <th class="col-md-2">Mark</th>
            </tr>
           @foreach ($students as $key => $student)
            <tr >

              <td class="col-md-1">{{$key+1}}
                <input type="text" class="form-control" value="{{$student->id}}" name="stid[]" hidden>
              </td>
              <td class="col-md-6">{{$student->name_with_ini}}</td>
              <td class="col-md-3" >{{$student->index_no}}</td>
              <td class="col-md-2">
                
                <input type="int" class="form-control col-md-6" maxlength="3"  name="mark[]">
              </td>
            
      
            </tr>
            


           @endforeach

          
    
                    
                   
            </table>

            <input type="submit" value="Add Marks" class="btn btn-warning pull-right col-md-5">


        </form>
    
       

    </div>
  </div>
</div> 
     
@endsection