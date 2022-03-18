@extends('layouts.app')

@section('content')
    <header class="masthead" style="background-image: url('assets/img/slider/school.jpg')">
      <div class="container position-relative px-4 px-lg-5">
          <div class="row gx-4 gx-lg-5 justify-content-center">
              <div class="col-md-10 col-lg-8 col-xl-7">
                  <div class="site-heading">
                      <h1>HCC-Student Management System </h1>
                      <span class="subheading text-light">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam vitae obcaecati dolores sed veniam in atque minima sunt quasi dolor, esse natus ea, mollitia architecto rem quae quaerat nihil a.</span>
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
              <img src="assets/img/slider/school.jpg" class="d-block w-100 " style="height: 40% !important" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="assets/img/slider/school.jpg" class="d-block  w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h2>"අප්පමාදේන සම්පාදේථ"</h2>
                <p>Hewaheta Central College</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="assets/img/slider/school.jpg" class="d-block w-100" alt="...">
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
    
    <section class="vision-mission" >
      <div class="container">
        <h1>Services</h1>
        <hr>
          <div class="row justify-content-center ">
              <div class="col-md-4 col-lg-4 image-element">
                  <div class="img-wrap " style="height:auto; width: auto;">
                      <img class="vision mv" src="assets/img/slider/badge.jpg" style="height:auto; width: 100%;" alt="" title="">
                      <div class="middle">
                        <div class="text-vm">MARKS ANALYSIS</div>
                      </div>
                  </div>
                  <br>
              </div>
              <div class="col-md-4 col-lg-4 image-element">
                <div class="img-wrap " style="height:auto; width: auto;">
                    <img class="vision mv" src="assets/img/slider/badge.jpg" style="height:auto; width: 100%;" alt="" title="">
                    <div class="middle">
                      <div class="text-vm">STUDENT DETAILS</div>
                    </div>
                </div>
                <br>
              </div>
              <div class="col-md-4 col-lg-4 image-element">
                <div class="img-wrap " style="height:auto; width: auto;">
                    <img class="vision mv" src="assets/img/slider/badge.jpg" style="height:auto; width: 100%;" alt="" title="">
                    <div class="middle">
                      <div class="text-vm">ADD NOTIICES</div>
                    </div>
                </div>
                <br>
              </div>
          </div>
          <div class="row justify-content-center ">
            <div class="col-md-4 col-lg-4 image-element">
                <div class="img-wrap " style="height:auto; width: auto;">
                    <img class="vision mv" src="assets/img/slider/badge.jpg" style="height:auto; width: 100%;" alt="" title="">
                    <div class="middle">
                      <div class="text-vm">CHECK TIMETABLES</div>
                    </div>
                </div>
                <br>
            </div>
            <div class="col-md-4 col-lg-4 image-element">
              <div class="img-wrap " style="height:auto; width: auto;">
                  <img class="vision mv" src="assets/img/slider/badge.jpg" style="height:auto; width: 100%;" alt="" title="">
                  <div class="middle">
                    <div class="text-vm">EXAMS CALENDER</div>
                  </div>
              </div>
              <br>
          </div>
          <div class="col-md-4 col-lg-4 image-element">
            <div class="img-wrap " style="height:auto; width: auto;">
                <img class="vision mv" src="assets/img/slider/badge.jpg" style="height:auto; width: 100%;" alt="" title="">
                <div class="middle">
                  <div class="text-vm">Vision</div>
                </div>
            </div>
            <br>
        </div>     
          
         
      </div>          
  </section>
    
    
@endsection