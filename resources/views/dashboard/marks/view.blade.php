@extends('layouts.userdashboard.userdashboard')
@section('content')
<div class="col-md-10 content">
  <div class="panel panel-default">
      <div class="panel-heading">
        <h1 class="page-header">{{$termtest->term->term_name}} - Mark sheet</h1>
        <br>
        <hr>
      </div>
      <div class="panel-body">
        @include('components.validation')
        
         
            <table class=" table table-warning table-hover table-responsive table-center">
             
            <tr>
                <th >No</th>
                <th>Index</th> 
            {{-- @foreach ($term->termtests as $termtest)               --}}
                <th >subject</th>
            {{-- @endforeach  --}}
                <th>total</th>
                <th>average</th>
                <th>position</th>

            </tr>
                
            <tr>

             
              
            
      
            </tr>
            


                
    
                    
                   
            </table>

            <input type="submit" value="Add Marks" class="btn btn-warning pull-right col-md-5">


        </form>
    
       

    </div>
  </div>
</div> 
     
@endsection