@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header"><i class="fa-btn fa-solid fa-table-columns"></i>{{ __('Áttekintő') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p class="text-center"><img src="img/tanonc_logo.png" height="100px" class="img-fluid" width="400px"></p>
                    <p><hr /></p>
                    <h4 class="display-5">Tisztelt {{ Auth::user()->name }}!</h4><br />
                    <p class="lead">Ön sikeresen bejelentkezett a Tanonc rendszerbe! További lehetőségekért kérem használja a felső menüsort!</p>
                </div>
                <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 py-5">
            <div class="card shadow">                
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide "></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/thought-catalog-505eectW54k-unsplash.jpg" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="img/tim-mossholder-WE_Kv_ZB1l0-unsplash.jpg" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="img/inaki-del-olmo-NIJuEQw0RKg-unsplash.jpg" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="img/brooke-cagle--uHVRvDr7pg-unsplash.jpg" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="img/vasily-koloda-8CqDvPuo_kI-unsplash.jpg" class="d-block w-100">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
            </div>
        </div>
    </div>
   <br/>
@endsection