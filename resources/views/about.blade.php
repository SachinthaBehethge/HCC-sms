@extends('layouts.app')
@section('content')

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


@endsection