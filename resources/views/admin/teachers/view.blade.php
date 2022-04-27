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
        <h2 class="text-center">Teacher Information</h2>
    </div>
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="{{asset('assets/img/profile/user-avatar.png')}}">
                <br>
                
                <span class="font-weight-bold">{{$teacher->name}}</span>
               
               <br>
                <span class="text-black-50">{{$teacher->email}}</span><span> </span></div>
        </div>
        
        <div class="col-md-9 border-right">
            <div class="p-3 py-5">
                <form method="POST" action="{{route('admin.teachers.update', $teacher->id)}}" enctype="multipart/form-data">
                {{method_field('PUT')}}  
                @csrf    
                    
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Name :</label><input type="text" name="name" class="form-control"  value="{{$teacher->name}}" ></div>
                        <br>
                        <div class="col-md-6"><label class="labels">Email :</label><input type="email" name="email" class="form-control" value="{{$teacher->email}}" ></div>
                        <br>
                        <div class="col-md-6"><label class="labels">Teacher no :</label><input type="text" name="teacherno" class="form-control" value="{{$teacher->teacher_no}}" ></div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Mobile Number :</label><input type="text" name="phone" class="form-control"  value="{{$teacher->phone}}" ></div>
                        <br>
                        <div class="col-md-6"><label class="labels">Gender :</label><input type="text" class="form-control"  value="{{$teacher->gender}}" disabled ></div>

                        <div class="col-md-6">
                            <br>
                            <select type="text" name="gender" class="form-control " required>
                                    <option value="{{$teacher->gender}}">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                            </select>  
                            
                            
                        </div>
                        
                        
                    </div>
                    
            
                    <br>
                    <div class="mt-5 mb-5 text-center"><input class="btn btn-primary profile-button" type="submit" value="update student info"></div>
                    <br>
                </form>
            </div>
        </div>

        
    </div>
</div>
</div>
</div>

@endsection
