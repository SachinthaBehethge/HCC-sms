@extends('layouts.admin.main')
@section('content')
<div class="col-md-10 content">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="page-header">Add New Student</h1>
        </div>
        <div class="panel-body">

            <form method="POST" action="{{route('admin.student.store')}}" enctype="multipart/form-data">
                @csrf

               


                <div class="form-group">

                        <div class="form-floating">            
                            <label for="floatingInput">Grade:</label>
                                <br>
                                <select id="grade" name="grade" class="form-control @error('grade') is-invalid @enderror" >
                                    <option value="">Select Class</option>
                                @foreach ($classes as $class)
                                    <option value="{{($class->id)}}">{{$class->grade->name}} {{$class->class_name}}</option>
                                    
                                @endforeach    
                                    
                                </select>
                                
                        </div>
                        <br>
                    
                        <div class="form-floating">
                            <label for="floatingInput">Index no:</label> 
                            <input type="text" id="indexno" name="indexno" placeholder="ex: index no" class="form-control @error('indexno') is-invalid @enderror"/>
                            @error('indexno')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-floating">
                            <label for="floatingInput">Student no:</label> 
                            <input type="text" id="stno" name="stno" placeholder="ex: student number" class="form-control @error('stno') is-invalid @enderror"/>
                            @error('stno')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <br>
                        {{-- <div class="form-floating">            
                            <label for="floatingInput">Section:</label>
                                <br>
                                <select id="section" name="section" class="form-control @error('section') is-invalid @enderror" >
                                @foreach ($sections as $section)
                                    <option value="{{($section->id)}}">{{$section->name}}</option>
                                    
                                @endforeach    
                                    
                                </select>
                                
                        </div> --}}

                        <div class="form-floating">
                            <label for="floatingInput">Email:</label> 
                            <input type="text" id="email" name="email" placeholder="ex: user@use.com" class="form-control @error('email') is-invalid @enderror"/>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div><br>
                        <div class="form-floating">
                            <label for="floatingInput">Full Name:</label> 
                            <input type="text" id="fullname" name="fullname" placeholder="ex: student name" class="form-control @error('fullname') is-invalid @enderror"/>
                            @error('fullname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div><br>
                        <div class="form-floating">
                            <label for="floatingInput">Name With Initials:</label> 
                            <input type="text" id="initials" name="initials" placeholder="ex: M.P.K.Perera" class="form-control @error('initials') is-invalid @enderror"/>
                            @error('initials')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div><br>
                       
                        <div class="form-floating">
                            <label for="floatingInput">Birth Date:</label> 
                            <input type="date" id="dob" name="dob"  class="form-control @error('dob') is-invalid @enderror"/>
                            @error('dob')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div> <br>
                        <div class="form-floating">            
                            <label for="floatingInput">Gender:</label>
                                <br>
                                <select id="gender" name="gender" class="form-control @error('gender') is-invalid @enderror" >
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    
                                </select>
                                
                        </div> <br>
                        <div class="form-floating">
                            <label for="floatingInput">National ID:</label> 
                            <input type="text" id="nic" name="nic" placeholder="nic" value="DONT HAVE NIC" class="form-control @error('nic') is-invalid @enderror"/>
                            @error('nic')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div> <br>
                        <div class="form-floating">            
                            <label for="floatingInput">Nationality:</label>
                                <br>
                                <select id="nationality" name="nationality" class="form-control @error('nationality') is-invalid @enderror" >
                                    <option value="sinhala">Sinhala</option>
                                    <option value="tamil">Tamil</option>
                                    <option value="muslim">Muslim</option>
                                    <option value="other">Other</option>
                                </select>
                                
                        </div> <br>
                        <div class="form-floating">
                            <label for="floatingInput">Address:</label> 
                            <input type="text" id="address" name="address" placeholder="student address" class="form-control @error('address') is-invalid @enderror"/>
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div> <br>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="check" class="special">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Has special needs</label>
                          </div>
                        <div class="form-floating" id="special">
                            <label for="floatingInput">Special needs:</label>
                            <textarea class="form-control @error('specialneed') is-invalid @enderror" rows="5" placeholder="" id="specialnote" value="No" name="specialneed"></textarea>
                            @error('specialneed')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <br>
                        
                        <div class="form-floating">
                            <label for="floatingInput">Guardian Name:</label> 
                            <input type="text" id="guardianname" name="guardianname" placeholder="ex: guardian name" class="form-control @error('guardianname') is-invalid @enderror"/>
                            @error('guardianname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div> <br>
                        <div class="form-floating">
                            <label for="floatingInput">Guardian Phone:</label> 
                            <input type="text" id="phone" name="phone" placeholder="phone" class="form-control @error('phone') is-invalid @enderror"/>
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div> <br>
                        <div class="form-floating">
                            <label for="floatingInput">Guardian Email:</label> 
                            <input type="text" id="guardianemail" name="guardianemail" placeholder="ex: guardian@guardian.com" class="form-control @error('guardianemail') is-invalid @enderror"/>
                                @error('guardianemail')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div> <br>
                        <div class="form-floating">
                            <label for="floatingInput"> Distance:</label> 
                            <input type="text" id="distance" name="distance" placeholder="distance" class="form-control @error('distance') is-invalid @enderror"/>
                            @error('distance')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div> <br>
                        <div class="form-floating">            
                            <label for="floatingInput">Way of Coming:</label>
                                <br>
                                <select id="coming" name="coming" class="form-control @error('coming') is-invalid @enderror" >
                                    <option value="bus">By Bus</option>
                                    <option value="school service">By School service</option>
                                    <option value="private vehical">By Private vehical</option>
                                    <option value="on foot">On foot</option>
                                    <option value="other">Other</option>
                                </select>
                                
                        </div>
                        
                        <br>
                        {{-- <div class="form-check">
                            <input class="form-check-input" name="sendEmail" type="checkbox" value="sendEmail" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                            Send Email With Credentials To the Teacher.
                            </label>
                        </div> --}}
                        
                        <br>
                        <input type="submit" value="Add New Student" class="btn btn-warning pull-right">
                </div>
            </form>
        </div>
    </div>
</div> 
       
@endsection



@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>

    $(document).ready(function() {

        $('#specialnote').summernote({
                    tabsize: 2,
                    height: 400
                });
    });


    $("#special").hide();
    $("#check").click(function() {
        if($(this).is(":checked")) {
            $("#special").show();
        } else {
            $("#special").hide();
        }
    });

    $("#s").hide();
    $("#check").click(function() {
        if($(this).is(":checked")) {
            $("#special").show();
        } else {
            $("#special").hide();
        }
    });
   
        
</script>
@endsection