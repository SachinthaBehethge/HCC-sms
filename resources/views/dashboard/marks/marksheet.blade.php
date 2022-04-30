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
            <table class=" table table-warning table-hover table-responsive table-center">
             <thead>
              <tr>
                <th>student</th>
                <th>index no</th>
                @foreach ($subjects as $subject)
                <th>{{$subject->subject_name}}</th>
              @endforeach   
                
              </tr>
               
             </thead>
             <tbody>
               @foreach($marks as $index =>$mark)
              <tr>
                <td>{{$mark->student->name_with_ini}}</td>
                <td>{{$mark->student->index_no}}</td>
                @foreach ($subjects as $subject)
                 @php
                   $termtest = App\Models\TermTest::where('subject_id',$subject->id)->where('term_id',$thisTerm->id)->first();
                   if($termtest!=null){
                    $thisMark = $marks->where('term_test_id',$termtest->id)->where('student_id',$mark->student_id)->first();
                    $value = $thisMark->marks;

                   }else{

                    $value = "N/A";
                   }
              
                  
                @endphp

               
               
                <td>{{$value}}</td>
              
              @endforeach   
              
                
              </tr>

             @endforeach
             </tbody>
          
  
  
                  
      
                      
                     
              </table>



            {{-- <input type="submit" value="Add Marks" class="btn btn-warning pull-right col-md-5"> --}}


   
       

    </div>
  </div>
</div> 
     
@endsection