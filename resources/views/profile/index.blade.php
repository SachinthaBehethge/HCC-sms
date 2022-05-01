@extends('layouts.app')

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

<div class="container rounded bg-white mt-5 mb-5">
    <h1 class=" text-center">User Profile</h1>
    <hr>
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="{{asset('assets/img/profile/user-avatar.png')}}">
                <br>
                @if ($user->role_id == 2)
                    <span class="font-weight-bold">Teacher</span>
                @elseif ($user->role_id == 3)
                     <span class="font-weight-bold">Student</span> 
                @endif
               
                <span class="text-black-50">{{$user->email}}</span><span> </span></div>
        </div>
        
        <div class="col-md-8 border-right">
          
                    @if ($user->role_id == 2)
                        @include('partials.teacherprofile')
                    @elseif ($user->role_id == 3)
                        @include('partials.studentprofile')
                    @endif

                    

        </div>
            
        
    </div>
</div>
</div>
</div>

@endsection