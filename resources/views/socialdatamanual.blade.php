@extends('layouts.app') 

@section('content')
<!-- Settlement-et ki kell kommentelni -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-11 col-lg-8 col-xl-8 col-xxl-7">
            <div class="card shadow">
                <div class="card-header">
                    <i class="fa-btn fa-solid fa-id-card"></i>{{ __('Szociális státusz') }}
                </div>
                <div class="card-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('') }}" autocomplete="off" class="needs-validation">
                        @csrf
                        
                        @if (Session::has('success_message'))
                            <div class="alert alert-success alert-dismissible fade show">
                                <strong>{{ Session::get('success_message') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="form-group row mb-3">
                            <label for="fieldUserId" class="col-4 col-form-label">Oktatási azonosító</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="fieldUserId" value="{{ Auth::user()->id }}" readonly>
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-key"></i></span>
                                </div>
                            </div>
                        </div>

                        <hr>
                        
                        
                        <!-- Gyermekvédelmi kedvezmény radio -->
                         <div class="form-group row mb-3">
                        <label for="exampleFormControlSelect1" class="col-4 col-form-label" name="GyermKedv">Gyermekvédelmi kedvezmény</label>
                        <div class="col-md-8">
                        <div class="input-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option>Jogosult</option>
                        <option>Nem jogosult</option>
                        </select>
                        <span class="input-group-text"><i class="fa-thin fa-percent"></i></i></span>
                    </div>
                    </div>
                    </div>
                        
                        <!--Gyermekvédelmi kedvezmény kezdete -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserBirthdate" class="col-4 col-form-label">Gyermekvédelmi kedvezmény kezdete</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="date" class="form-control" name="gyermKezd" value="{{ isset($userdata->szuletesi_ido) ? $userdata->szuletesi_ido->format('Y-m-d') : date('Y-m-d')}}" required>
                                    <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></i></span>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Gyermekvédelmi kedvezmény vége -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserBirthdate" class="col-4 col-form-label">Gyermekvédelmi kedvezmény vége</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="date" class="form-control" name="GyermVeg" value="{{ isset($userdata->szuletesi_ido) ? $userdata->szuletesi_ido->format('Y-m-d') : date('Y-m-d')}}" required>
                                    <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></i></span>
                                </div>
                            </div>
                        </div>
                       
                        <!-- Hátrányos helyzetű check  -->
                        <div class="form-group row mb-3">
                        <label for="exampleFormControlSelect1" class="col-4 col-form-label" name="Hatr">Hátrányos helyzetű?</label>
                        <div class="col-md-8">
                        <div class="input-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option>Igen</option>
                        <option>Nem</option>
                        </select>
                        <span class="input-group-text"><i class="fa-thin fa-percent"></i></i></span>
                        </div>
                        </div>
                        </div>
                        
                        <!-- HH kezdete -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserBirthdate" class="col-4 col-form-label">HH kezdete</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="date" class="form-control" name="HhKezd" value="{{ isset($userdata->szuletesi_ido) ? $userdata->szuletesi_ido->format('Y-m-d') : date('Y-m-d')}}" required>
                                    <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></i></span>
                                </div>
                            </div>
                        </div>
                    
                        <!-- HH vége -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserBirthdate" class="col-4 col-form-label">HH vége</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="date" class="form-control" name="HhVeg" value="{{ isset($userdata->szuletesi_ido) ? $userdata->szuletesi_ido->format('Y-m-d') : date('Y-m-d')}}" required>
                                    <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></i></span>
                                </div>
                            </div>
                        </div>

                        <!-- Halmozottan hátrányos helyzetű radio -->
                        <div class="form-group row mb-3">
                        <label for="exampleFormControlSelect1" class="col-4 col-form-label" name="HalmHatr">Halmozottan hátrányos helyzetű?</label>
                        <div class="col-md-8">
                        <div class="input-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option>Igen</option>
                        <option>Nem</option>
                        </select>
                        <span class="input-group-text"><i class="fa-thin fa-percent"></i></i></span>
                        </div>
                        </div>
                        </div>

                        <!-- HHH kezdete -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserBirthdate" class="col-4 col-form-label">HHH kezdete</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="date" class="form-control" name="HHHkezd" value="{{ isset($userdata->szuletesi_ido) ? $userdata->szuletesi_ido->format('Y-m-d') : date('Y-m-d')}}" required>
                                    <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></i></span>
                                </div>
                            </div>
                        </div>
                    
                        <!-- HHH vége -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserBirthdate" class="col-4 col-form-label">HHH vége</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="date" class="form-control" name="HhhVeg" value="{{ isset($userdata->szuletesi_ido) ? $userdata->szuletesi_ido->format('Y-m-d') : date('Y-m-d')}}" required>
                                    <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></i></span>
                                </div>
                            </div>
                        </div>
                       
                        <div class="row text-center">
                            <div class="col">
                                <button type="submit" class="btn btn-primary mb-5 mt-4 me-4">
                                    <i class="fa-btn fa-solid fa-floppy-disk"></i>Mentés
                                </button>
                                <a href="{{url('/home')}}" class="btn btn-secondary mb-5 mt-4 ms-4">
                                    <i class="fa-btn fa-solid fa-xmark"></i>Mégsem
                                </a>                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

@endsection