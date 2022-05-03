@extends('layouts.admin.main')
@section('content')


<style>
    .profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
    }

    .profile-button:hover {
        background: #682773
    }

    .profile-button:focus {
        background: #682773;
        box-shadow: none
    }

    .profile-button:active {
        background: #682773;
        box-shadow: none
    }

    .back:hover {
        color: #682773;
        cursor: pointer
    }

    .labels {
        font-size: 11px
    }

    .add-experience:hover {
        background: #BA68C8;
        color: #fff;
        cursor: pointer;
        border: solid 1px #BA68C8
    }    
</style>  

<div class="container rounded bg-white mt-5 mb-5 col-md-10 ">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="text-center">Student Information</h2>
    </div>
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="{{asset('assets/img/profile/user-avatar.png')}}">
                <br>
                
                <span class="font-weight-bold">{{$student->name_with_ini}}</span>
               
               <br>
                <span class="text-black-50">{{$student->email}}</span><span> </span></div>
        </div>
        
        <div class="col-md-5 border-right">
            <form method="POST" action="{{route('admin.student.update', $student->id)}}" enctype="multipart/form-data">
                {{method_field('PUT')}}
                @csrf
                <div class="p-3 py-5">
                    <h3>Personal Details</h3>
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Name</label><input type="text" name="fullname" class="form-control"  value="{{$student->fullname}}" ></div>
                        <div class="col-md-12"><label class="labels">Birthday -</label><input type="date" class="form-control" name="dob" value="{{$student->dob}}" ></div>

                        {{-- <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="" value="surname"></div> --}}
                    </div>
                
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">Name with initials</label><input type="text" class="form-control" name="initials"   value="{{$student->name_with_ini}}" ></div>
                        <div class="col-md-6"><label class="labels">Student Email</label><input type="text" class="form-control" name="email"  value="{{$student->email}}" ></div>

                        <div class="col-md-6"><label class="labels">Index no</label><input type="text" class="form-control" name="indexno"  value="{{$student->index_no}}" ></div>
                        <div class="col-md-6"><label class="labels">Student no</label><input type="text" class="form-control" name="studentno" value="{{$student->student_no}}" ></div>
                        <div class="col-md-12"><label class="labels">Grade</label><input type="text" class="form-control"   value="{{$student->class->grade->name}}" disabled></div>
                        <div class="col-md-6"><label class="labels">Class</label><input type="text" class="form-control"  value="{{$student->class->class_name}}" disabled></div>
                        <div class="col-md-6"><label for=""></label>
                            <select name="class" class="form-control">
                                <option value="{{$student->classes_id}}">Select new Grade</option>
                                @foreach ($classes as  $class)
                                    <option value="{{$class->id}}">{{$class->grade->name}} - {{$class->class_name}}</option>
                                @endforeach
                            </select>   
                        </div>
                        <div class="col-md-12"><label class="labels">Address </label><input type="text-area" name="address" class="form-control" value="{{$student->address}}"></div>

                        <div class="col-md-6"><label class="labels">Nationality</label><input type="text" name="nationality" class="form-control"  value="{{$student->nationality}}" ></div>
                        <div class="col-md-6"><label class="labels">N.I.C</label><input type="text" name="nic" class="form-control"  value="{{$student->nic}}" ></div>

                    </div>  
                    <div class="row mt-3">
                        <h3>Other Details</h3>
                        <div class="col-md-12"><label class="labels">Parent/Gardian Name</label><input type="text" name="gardianname" class="form-control"  value="{{$student->gardian_name}}" ></div>
                        <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" name="phone" value="{{$student->gardian_phone}}""></div>
                        <div class="col-md-12"><label class="labels">Parent/Gardian Email</label><input type="email" class="form-control" name="gardianemail"  value="{{$student->gardian_email}}" ></div>
                        <div class="col-md-12"><label class="labels">Way of comming</label><input type="text" class="form-control" name="coming" value="{{$student->way_of_coming}}" ></div>
                        <div class="col-md-4"><label class="labels">Distance from School</label><input type="text" class="form-control" name="distance" value="{{$student->distance}}" ></div>
                        <div class="col-md-4"><label class="labels">Weight</label><input type="text" class="form-control" name="height" value="{{$student->weight}}" ></div>
                        <div class="col-md-4"><label class="labels">Height</label><input type="text" class="form-control" name="weight" value="{{$student->height}}" ></div>

                        
                    </div>
                    
         
                    <br>
                    <div class="mt-5 mb-5 text-center"><input class="btn btn-primary profile-button" type="submit" value="update student info"></div>
                    <br>
                </form>    
            </div>
        </div>

        <div class="col-md-4">
            <h3>Student's Achievements</h3>
            <div class="card text-left">
                <img class="card-img-top" src="holder.js/100px180/" alt="">
                <div class="card-body">
          
                  <table class=" table table-success table-hover table-responssive ">
                      <tr class="tr-success">
                          <th>No</th>
                          <th>Achievements</th>
                          <th>Approved By</th>
                          <th>Approved Day</th>
                      </tr>
                      @foreach($student->achievements as $key => $achievement)
                          @if ($achievement->is_approved=1)
                          <tr id="tableRow">
                              <td>{{$key+1}}</td>
                              <td>{{$achievement->achievement }}</td>
                              <td>{{$achievement->approved_by}}</td>
                              <td>{{$achievement->updated_at}}</td>
                            
          
          
                              
                          </tr>
                          @endif
                             
          
                         
                          @endforeach
                         
                  </table>
               
                  
                  
                </div>
              </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection
