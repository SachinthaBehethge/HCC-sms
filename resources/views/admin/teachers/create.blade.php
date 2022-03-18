@extends('layouts.admin.main')
@section('content')
<div class="col-md-10 content">
    <div class="panel panel-default">
        <div class="panel-heading">
          <h1 class="page-header">Welcome to admin panel</h1>
        </div>
        <div class="panel-body">
            <form method="POST" action="{{route('admin.teachers.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-floating">
                    <label for="floatingInput">Teacher no:</label> 
                    <input type="text" id="teacherno" name="teacherno"  placeholder="teacher no" class="form-control @error('teacherno') is-invalid @enderror"/>
                    @error('teacherno')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-floating">
                    <label for="floatingInput">Teacher Name:</label> 
                    <input type="text" id="teachername" name="teachername" placeholder="ex: teacher name" class="form-control @error('teachername') is-invalid @enderror"/>
                    @error('teachername')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-floating">
                    <label for="floatingInput">Email:</label> 
                    <input type="text" id="email" name="email" placeholder="ex: user@use.com" class="form-control @error('email') is-invalid @enderror"/>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>
                <div class="form-floating">
                    <label for="floatingInput">Phone No:</label> 
                    <input type="text" id="phone" name="phone" placeholder="phone no" class="form-control @error('phone') is-invalid @enderror"/>
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-floating">            
                    <label for="floatingInput">Gender:</label>
                        <br>
                        <select id="gender" name="gender" class="form-control @error('gender') is-invalid @enderror" >
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            
                        </select>
                        
                </div>
                <br>
                <input type="submit" value="Add New Teacher" class="btn btn-primary pull-right">
            </form>
          


        
        
      </div>
    </div>
  </div> 
       
@endsection