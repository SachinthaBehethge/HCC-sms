@extends('layouts.userdashboard.userdashboard')
@section('content')
<div class="col-md-10 content">
  <div class="panel panel-default">
      <div class="panel-heading">
        <h1 class="page-header">  Mark sheet</h1>
        <br>
        <hr>

      </div>
      <div class="panel-body">
        @include('components.validation')
        
            
      
    
            <table class=" table table-warning table-hover table-responsive table-center">
             
            <tr>
                <th >No</th>
                <th>Index</th> 
            
              @foreach ($subjects as $subject)
                <th>{{$subject->subject_name}}</th>
              
              @endforeach   
                <th >subject</th>
          
                <th>total</th>
                <th>average</th>
                <th>position</th>

            </tr>
                <td></td>
                @foreach ($students as $student)
                <td>{{$student->index_no}}</td>
                @endforeach
               
                <td></td>
                <td></td>
                <td></td>
            <tr>

             
              
            
      
            </tr>
            


                
    
                    
                   
            </table>

            {{-- <input type="submit" value="Add Marks" class="btn btn-warning pull-right col-md-5"> --}}


   
       

    </div>
  </div>
</div> 
     
@endsection