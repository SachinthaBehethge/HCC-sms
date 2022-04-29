<form method="POST" action="{{route('admin.student.update', $student->id)}}" enctype="multipart/form-data">
    {{method_field('PUT')}}
    @csrf
    <div class="p-3 py-5">
        <h3>Personal Details</h3>
        <div class="row mt-2">
            <div class="col-md-12"><label class="labels">Name</label><input type="text" name="fullname" class="form-control"  value="{{$student->fullname}}" ></div>
            <div class="col-md-12"><label class="labels">Birthday</label><input type="date" class="form-control" name="birthday" value="{{$student->dob}}" ></div>

            {{-- <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="" value="surname"></div> --}}
        </div>
    
        <div class="row mt-3">
            <div class="col-md-6"><label class="labels">Name with initials</label><input type="text" class="form-control" name="initials"   value="{{$student->name_with_ini}}" disabled></div>
            <div class="col-md-6"><label class="labels">Student Email</label><input type="text" class="form-control" name="email"  value="{{$student->email}}" ></div>

            <div class="col-md-6"><label class="labels">Index no</label><input type="text" class="form-control" name="indexno"  value="{{$student->index_no}}" disabled ></div>
            <div class="col-md-6"><label class="labels">Student no</label><input type="text" class="form-control" name="studentno" value="{{$student->student_no}}" disabled></div>
            <div class="col-md-12"><label class="labels">Grade</label><input type="text" class="form-control"   value="{{$student->class->grade->name}}" disabled></div>
            <div class="col-md-6"><label class="labels">Class</label><input type="text" class="form-control"  value="{{$student->class->class_name}}" disabled></div>
            
            <div class="col-md-12"><label class="labels">Address </label><input type="text-area" name="address" class="form-control" value="{{$student->address}}"></div>

            <div class="col-md-6"><label class="labels">Nationality</label><input type="text" name="nationality" class="form-control"  value="{{$student->nationality}}" ></div>
            <div class="col-md-6"><label class="labels">N.I.C</label><input type="text" name="nic" class="form-control"  value="{{$student->nic}}" ></div>

        </div>  
        <div class="row mt-3">
            <h3>Other Details</h3>
            <div class="col-md-12"><label class="labels">Parent/Gardian Name</label><input type="text" name="gardianname" class="form-control"  value="{{$student->gardian_name}}" disabled ></div>
            <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" name="phone" value="{{$student->gardian_phone}}"" disabled></div>
            <div class="col-md-12"><label class="labels">Parent/Gardian Email</label><input type="email" class="form-control" name="gardianemail"  value="{{$student->gardian_email}}" disabled ></div>
            <div class="col-md-12"><label class="labels">Way of comming</label><input type="text" class="form-control" name="coming" value="{{$student->way_of_coming}}" ></div>
            <div class="col-md-4"><label class="labels">Distance from School</label><input type="text" class="form-control" name="distance" value="{{$student->distance}}" ></div>
            <div class="col-md-4"><label class="labels">Weight</label><input type="text" class="form-control" name="height" value="{{$student->weight}}" ></div>
            <div class="col-md-4"><label class="labels">Height</label><input type="text" class="form-control" name="weight" value="{{$student->height}}" ></div>

            
        </div>
        

        <br>
        <div class="mt-5 mb-5 text-center"><input class="btn btn-primary profile-button" type="submit" value="update My Details"></div>
        <br>
    </form>    