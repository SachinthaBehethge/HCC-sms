
<form method="POST" action="{{route('admin.teachers.update', $teacher->id)}}" enctype="multipart/form-data">
        {{method_field('PUT')}}  
        @csrf    
            
            <div class="row mt-2">
                <div class="col-md-12"><label class="labels">Name :</label><input type="text" name="name" class="form-control"  value="{{$teacher->name}}" ></div>
                <br>
                <div class="col-md-12"><label class="labels">Email :</label><input type="email" name="email" class="form-control" value="{{$teacher->email}}" ></div>
                <br>
                <div class="col-md-12"><label class="labels">Teacher no :</label><input type="text" name="teacherno" class="form-control" value="{{$teacher->teacher_no}}" ></div>

            </div>
            <div class="row mt-3">
                <div class="col-md-12"><label class="labels">Mobile Number :</label><input type="text" name="phone" class="form-control"  value="{{$teacher->phone}}" ></div>
                <br>
                <div class="col-md-12"><label class="labels">Gender :</label><input type="text" class="form-control"  value="{{$teacher->gender}}" disabled ></div>

               
                
                
            </div>
            
    
            <br>
            <div class="mt-5 mb-5 text-center"><input class="btn btn-primary profile-button" type="submit" value="Update My Details"></div>
            <br>
</form>
    