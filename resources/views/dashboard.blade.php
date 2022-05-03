@extends('layouts.app')

@section('content')
    <header class="masthead " style="background-image: url('assets/img/slider/school.jpg')">
      <div class="container position-relative px-4 px-lg-5">
          <div class="row gx-4 gx-lg-5 sm-12 justify-content-center">
              <div class="col-md-10 col-sm-12 col-lg-8 col-xl-7">
                  <div class="site-heading">
                      <h1>HCC-Student Management System </h1>
                      <span class=" subheading text-center text-light">
                        This is the school management system of Hewaheta Central College - Kandy. This system is developed for manage students and their information. This system is consistented of class dashboards, student dashboards and admin panels. So that they make it easier to control the system and system related issues comfortably.
                      </span>
                  </div>
              </div>
          </div>
      </div>
    </header>
   
    <section class="mtop-0">
      <div id="slider" class="carousel carousel-primary slide mtop-0" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <img src="assets/img/slider/school1.jpg" class="d-block w-100 " style="height: 40% !important; " alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000" >
              <div class="transbox" style="background-color: black !important; opacity:0.6;" >
                <img src="assets/img/slider/school1.jpg" class="d-block  w-100"  alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h2>"අප්පමාදේන සම්පාදේථ"</h2>
                  <p>Hewaheta Central College</p>
                </div>
              </div>
              
            </div>
            <div class="carousel-item">
              <img src="assets/img/slider/school1.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <br>
    </section>
    <br>
    <section class="vision-mission" >
      <div class="container">
        <h1>Dashboards</h1>
        <hr>
          <div class="row justify-content-center ">
              <div class="col-md-4 col-lg-3 image-element">
                  <div class="img-wrap " style="height:auto; width: auto;">
                      <img class="vision mv" src="assets/img/slider/admin.PNG" style="height:auto; width: 100%;" alt="" title="">
                      <div class="middle">
                        <div class="text-vm">Admin Dashboard</div>
                      </div>
                  </div>
                  <br>
              </div>
              <div class="col-md-4 col-lg-3 image-element">
                <div class="img-wrap " style="height:auto; width: auto;">
                    <img class="vision mv" src="assets/img/slider/class dashboard.PNG" style="height:auto; width: 100%;" alt="" title="">
                    <div class="middle">
                      <div class="text-vm">Class Dashboard</div>
                    </div>
                </div>
                <br>
              </div>
              <div class="col-md-4 col-lg-3 image-element">
                <div class="img-wrap " style="height:auto; width: auto;">
                    <img class="vision mv" src="assets/img/slider/student dashboard.PNG" style="height:auto; width: 100%;" alt="" title="">
                    <div class="middle">
                      <div class="text-vm">Student Dashboard</div>
                    </div>
                </div>
                <br>
              </div>
          </div>
         
          
         
      </div>          
  </section>
  <br>
    <section class="vision-mission" >
      <div class="container">
        <h1>Services</h1>
        <hr>
          <div class="row justify-content-center ">
              <div class="col-md-3 col-lg-3 image-element">
                  <div class="img-wrap " style="height:auto; width: auto;">
                      <img class="vision mv" src="assets/img/slider/marks.jpg" style="height:auto; width: 100%;" alt="" title="">
                      <div class="middle">
                        <div class="text-vm">MARKS ANALYSIS</div>
                      </div>
                  </div>
                  <br>
              </div>
              <div class="col-md-3 col-lg-3 image-element">
                <div class="img-wrap " style="height:auto; width: auto;">
                    <img class="vision mv" src="assets/img/slider/info.jpg" style="height:auto; width: 100%;" alt="" title="">
                    <div class="middle">
                      <div class="text-vm">STUDENT DETAILS</div>
                    </div>
                </div>
                <br>
              </div>
              <div class="col-md-3 col-lg-3 image-element">
                <div class="img-wrap " style="height:auto; width: auto;">
                    <img class="vision mv" src="assets/img/slider/notice.jpg" style="height:auto; width: 100%;" alt="" title="">
                    <div class="middle">
                      <div class="text-vm">ADD NOTIICES</div>
                    </div>
                </div>
                <br>
              </div>
          </div>
          <div class="row justify-content-center ">
            <div class="col-md-3 col-lg-3 image-element">
                <div class="img-wrap " style="height:auto; width: auto;">
                    <img class="vision mv" src="assets/img/slider/time table.jpg" style="height:; width: 100%; " alt="" title="">
                    <div class="middle">
                      <div class="text-vm">CHECK TIMETABLES</div>
                    </div>
                </div>
                <br>
            </div>
            <div class="col-md-3 col-lg-3 image-element">
              <div class="img-wrap " style="height:auto; width: auto;">
                  <img class="vision mv" src="assets/img/slider/exam.jpg" style="height:auto; width: 100%;" alt="" title="">
                  <div class="middle">
                    <div class="text-vm">EXAMS CALENDER</div>
                  </div>
              </div>
              <br>
          </div>
          <div class="col-md-3 col-lg-3 image-element">
            <div class="img-wrap " style="height:auto; width: auto;">
                <img class="vision mv" src="assets/img/slider/achievements.jpeg" style="height:auto; width: 110%;" alt="" title="">
                <div class="middle">
                  <div class="text-vm">STUDENT ACHIEVEMENTS</div>
                </div>
            </div>
            <br>
        </div>     
          
         
      </div>          
  </section>
    
    
@endsection