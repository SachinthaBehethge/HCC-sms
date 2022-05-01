@extends('layouts.userdashboard.userdashboard')
@section('content')
<div class="col-md-12 content">
  <div class="panel panel-default">
      <div class="panel-heading">
        <h1 class="page-header">  Mark sheet</h1>
        <br>
        <hr>

      </div>
      <div class="panel-body">
        @include('components.validation')
        
         
            <table class=" table table-warning table-hover table-responsive table-center">
             <thead>
              <tr>
                <th>student</th>
                <th>index no</th>
                @foreach ($subjects as $subject)
                <th>{{$subject->subject_name}}</th>
              @endforeach   
              <th>total</th>
              <th>average</th>
              <th>position</th>
                
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
                   
                    if($thisMark!=null){
                      $value = $thisMark->marks;
                    }else {
                      $value = "N/A";
                    }
                   }else{

                    $value = "N/A";
                   }
              
                  
                @endphp

               
<td>{{$value}}</td>
              
              
              @endforeach  
             
              <td>
                @php
                   $total= $marks->where('student_id',$mark->student_id)->sum('marks');
                   $recordCount = $marks->where('student_id',$mark->student_id)->count();

                   $avg = $total/$recordCount;
                   
                @endphp
               {{$total}}
              </td>
              <td>
                {{number_format((float)$avg, 2, '.', '')}}
                </td>
                <td>
                  </td> 
              
                
              </tr>

             @endforeach
             </tbody>
          
  
  
                  
      
                      
                     
              </table>



            {{-- <input type="submit" value="Add Marks" class="btn btn-warning pull-right col-md-5"> --}}


   
       

    </div>
  </div>
</div> 
     
@endsection