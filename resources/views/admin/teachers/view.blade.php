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
        
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <h3>Basic Info</h3>
                <div class="row mt-2">
                    <div class="col-md-12"><label class="labels">Name</label><input type="text" class="form-control"  value="{{$teacher->name}}" disabled></div>
                    {{-- <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="" placeholder="surname"></div> --}}
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control"  value="{{$teacher->phone}}" disabled></div>
                    <div class="col-md-12"><label class="labels">Address Line 1</label><input type="text-area" class="form-control" placeholder="enter address line 1" value=""></div>
                    <div class="col-md-12"><label class="labels">Address Line 2</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">Gender</label><input type="text" class="form-control" value="{{$teacher->gender}}" disabled></div>
                    
                </div>
                
         
                <br>
                <div class="mt-5 mb-5 text-center"><button class="btn btn-primary profile-button" type="button">Update Teacher Info</button></div>
                <br>
            </div>
        </div>

        <div class="col-md-4">
            <h3>Other info</h3>
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Subjects</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Class</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection
