@extends('layouts.app') 

@section('content')
<!-- Settlement-et ki kell kommentelni -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-11 col-lg-8 col-xl-8 col-xxl-7">
            <div class="card shadow">
                <div class="card-header">
                    <i class="fa-btn fa-solid fa-id-card"></i>{{ __('Szülő-Gondviselő') }}
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

                        <!-- UserPhoneNumber -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserPhoneNumber" class="col-4 col-form-label">Telefonszám</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserPhoneNumber') is-invalid @enderror" name="fieldUserPhoneNumber" value="{{ isset($userdata->telefonszam) ? $userdata->telefonszam : '' }}" pattern="^.{0,14}$" placeholder="telefonszám">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-phone"></i></span>
                                    @error('fieldUserPhoneNumber')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>
                    
                     <!-- UserEmail -->
                     <div class="form-group row mb-3">
                            <label for="fieldUserPhoneNumber" class="col-4 col-form-label">E-mail</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserPhoneNumber') is-invalid @enderror" name="fieldUserPhoneNumber" value="{{ isset($userdata->telefonszam) ? $userdata->telefonszam : '' }}" pattern="^.{0,14}$" placeholder="email">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-phone"></i></span>
                                    @error('fieldUserPhoneNumber')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>

                     <!-- TörvényesKépviselő -->
                     
                        <div class="form-group row mb-3">
                            <label for="fieldUserEmail" class="col-4 col-form-label">Törvényes Képviselő</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="fieldUserEmail" value="{{ Auth::user()->email }}" readonly>
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-at"></i></span>
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