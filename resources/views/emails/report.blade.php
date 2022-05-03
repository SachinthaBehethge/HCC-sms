<h1>Report Card of {{$name}} </h1>
 Hi Mr/Mrs.{{$parent}} <br/>
 Here is your Child's marks report for {{$term->term_name}} - {{$term->start}} : {{$term->end}} !!!<br/>
 <br>
 <div >
    <table class="ml-50 table table-danger table-hover table-responsive text-center col-md-3">
      <thead class="">
       <tr>
            <td class="font-weight-bold">No</td>
            <td  class="font-weight-bold">Subjects</td>
            <td  class="font-weight-bold">Marks</td> 
                     
       </tr>
        
      </thead>
      <tbody>
       @foreach ($marks as $key => $mark )
         <tr>
         
           <td class="font-weight-bold">{{$key+1}}</td>
           <td >{{$mark->termtest->subject->subject_name}}</td>
           <td>{{$mark->marks}}</td>
        
            
         </tr>
         @endforeach
         <tr>
           <td></td>
           <td class="font-weight-bold">Total</td>
           <td>{{$total}}</td>
           
         </tr>
         <tr>
           <td></td>
           <td class="font-weight-bold">Average</td>
           <td>{{$avg}}</td>
         </tr>
     
      </tbody>
   


           

               
              
       </table>

   </div>

 <p>
*This video conference will be recorded to ensure excellent customer service & adhere with Guideline No.03/2020 for Non-face-to-face Customer Verification & Identification. 
</p>
