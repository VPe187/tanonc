@extends('layouts.app') 

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-11 col-lg-8 col-xl-8 col-xxl-7">
            <div class="card shadow">
                <div class="card-header">
                    <i class="fa-btn fa-solid fa-id-card"></i>{{ __('Kir törzsadatok') }}
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

                         <!-- Oktatási azonosító -->
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
                        
                        
                         <!-- Viselt név előtag-->
                         <div class="form-group row mb-3">
                            <label for="fieldUserSureName" class="col-4 col-form-label">Viselt név előtag</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserSureName') is-invalid @enderror" name="NameWornPref" value="{{ isset($userdata->vezeteknev) ? $userdata->vezeteknev : '' }}" pattern="^.{0,30}$" placeholder="Viselt név előtag">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-pen-to-square"></i></span>
                                    @error('fieldUserSureName')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>             


                         <!-- Viselt név vezetéknév-->
                         <div class="form-group row mb-3">
                            <label for="fieldUserSureName" class="col-4 col-form-label">Viselt név vezetéknév</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserSureName') is-invalid @enderror" name="NameWornSur" value="{{ isset($userdata->vezeteknev) ? $userdata->vezeteknev : '' }}" pattern="^.{0,30}$" placeholder="Viselt név vezetéknév">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-pen-to-square"></i></span>
                                    @error('fieldUserSureName')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>             

                         <!-- Viselt név keresztnév-->
                         <div class="form-group row mb-3">
                            <label for="fieldUserSureName" class="col-4 col-form-label">Viselt név keresztnév</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserSureName') is-invalid @enderror" name="NameWornFirst" value="{{ isset($userdata->vezeteknev) ? $userdata->vezeteknev : '' }}" pattern="^.{0,30}$" placeholder="Viselt név keresztnév">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-pen-to-square"></i></span>
                                    @error('fieldUserSureName')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>             

                        <!-- Viselt név sorrend-->
                        <div class="form-group row mb-3">
                            <label for="fieldUserSureName" class="col-4 col-form-label">Viselt név sorrend</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserSureName') is-invalid @enderror" name="NameWornOrd" value="{{ isset($userdata->vezeteknev) ? $userdata->vezeteknev : '' }}" pattern="^.{0,30}$" placeholder="Viselt név sorrend">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-pen-to-square"></i></span>
                                    @error('fieldUserSureName')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>             
                        
                    
                

                     <!-- Születési név előtag-->
                     <div class="form-group row mb-3">
                            <label for="fieldUserSureName" class="col-4 col-form-label">Születési név előtag</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserSureName') is-invalid @enderror" name="BirthNamePref" value="{{ isset($userdata->vezeteknev) ? $userdata->vezeteknev : '' }}" pattern="^.{0,30}$" placeholder="Születési név előtag">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-pen-to-square"></i></span>
                                    @error('fieldUserSureName')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>             


                         <!-- Születési név vezetéknév-->
                         <div class="form-group row mb-3">
                            <label for="fieldUserSureName" class="col-4 col-form-label">Születési név vezetéknév</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserSureName') is-invalid @enderror" name="BirthNamenSur" value="{{ isset($userdata->vezeteknev) ? $userdata->vezeteknev : '' }}" pattern="^.{0,30}$" placeholder="Születési név vezetéknév">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-pen-to-square"></i></span>
                                    @error('fieldUserSureName')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>             

                         <!-- Születési név keresztnév-->
                         <div class="form-group row mb-3">
                            <label for="fieldUserSureName" class="col-4 col-form-label">Születési név keresztnév</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserSureName') is-invalid @enderror" name="BirthNameFirst" value="{{ isset($userdata->vezeteknev) ? $userdata->vezeteknev : '' }}" pattern="^.{0,30}$" placeholder="Születési név keresztnév">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-pen-to-square"></i></span>
                                    @error('fieldUserSureName')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>             

                        <!-- Születési név sorrend-->
                        <div class="form-group row mb-3">
                            <label for="fieldUserSureName" class="col-4 col-form-label">Születési név sorrend</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserSureName') is-invalid @enderror" name="BirthNameOrd" value="{{ isset($userdata->vezeteknev) ? $userdata->vezeteknev : '' }}" pattern="^.{0,30}$" placeholder="Születési név sorrend">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-pen-to-square"></i></span>
                                    @error('fieldUserSureName')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>             

                            
                    
                    
                    <!-- Anyja neve előtag-->
                     <div class="form-group row mb-3">
                            <label for="fieldUserSureName" class="col-4 col-form-label">Anyja neve  előtag</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserSureName') is-invalid @enderror" name="MothersNamePref" value="{{ isset($userdata->vezeteknev) ? $userdata->vezeteknev : '' }}" pattern="^.{0,30}$" placeholder="Anyja neve  előtag">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-pen-to-square"></i></span>
                                    @error('fieldUserSureName')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>             


                         <!-- Anyja neve  vezetéknév-->
                         <div class="form-group row mb-3">
                            <label for="fieldUserSureName" class="col-4 col-form-label">Anyja neve vezetéknév</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserSureName') is-invalid @enderror" name="MothersNamenSur" value="{{ isset($userdata->vezeteknev) ? $userdata->vezeteknev : '' }}" pattern="^.{0,30}$" placeholder="Anyja neve vezetéknév">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-pen-to-square"></i></span>
                                    @error('fieldUserSureName')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>             

                         <!-- Anyja neve  keresztnév-->
                         <div class="form-group row mb-3">
                            <label for="fieldUserSureName" class="col-4 col-form-label">Anyja neve keresztnév</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserSureName') is-invalid @enderror" name="MothershNameFirst" value="{{ isset($userdata->vezeteknev) ? $userdata->vezeteknev : '' }}" pattern="^.{0,30}$" placeholder="Anyja neve keresztnév">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-pen-to-square"></i></span>
                                    @error('fieldUserSureName')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>             

                        <!-- SAnyja neve sorrend-->
                        <div class="form-group row mb-3">
                            <label for="fieldUserSureName" class="col-4 col-form-label">Anyja neve  sorrend</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserSureName') is-invalid @enderror" name="MothersNameOrd" value="{{ isset($userdata->vezeteknev) ? $userdata->vezeteknev : '' }}" pattern="^.{0,30}$" placeholder="Anyja neve sorrend">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-pen-to-square"></i></span>
                                    @error('fieldUserSureName')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>             

                          <!-- Születési dátum -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserBirthdate" class="col-4 col-form-label">Születési dátum</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="date" class="form-control" name="fieldUserBirthdate" value="{{ isset($userdata->szuletesi_ido) ? $userdata->szuletesi_ido->format('Y-m-d') : date('Y-m-d')}}" required>
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-cake-candles"></i></i></span>
                                </div>
                            </div>
                        </div>

                        <!-- Születési hely -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserBirthPlace" class="col-4 col-form-label">Születési hely</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserBirthPlace') is-invalid @enderror" name="fieldUserBirthPlace" value="{{ isset($userdata->szuletesi_hely) ? $userdata->szuletesi_hely : '' }}" pattern="^.{0,30}$" placeholder="Születési hely">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-bed-pulse"></i></span>
                                    @error('fieldUserBirthPlace')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>


                        <!-- Születési ország -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserBirthPlace" class="col-4 col-form-label">Születési ország</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserBirthPlace') is-invalid @enderror" name="fieldUserBirtCountry" value="{{ isset($userdata->szuletesi_hely) ? $userdata->szuletesi_hely : '' }}" pattern="^.{0,30}$" placeholder="Születési ország">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-bed-pulse"></i></span>
                                    @error('fieldUserBirthPlace')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>
                        
                        <!-- 1. állampolgársága -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserBirthPlace" class="col-4 col-form-label">1. állampolgársága</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserBirthPlace') is-invalid @enderror" name="Nationality" value="{{ isset($userdata->szuletesi_hely) ? $userdata->szuletesi_hely : '' }}" pattern="^.{0,30}$" placeholder="1. állampolgársága">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-bed-pulse"></i></span>
                                    @error('fieldUserBirthPlace')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>

                        <!-- 2. állampolgársága -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserBirthPlace" class="col-4 col-form-label">2. állampolgársága</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserBirthPlace') is-invalid @enderror" name="Nationality2" value="{{ isset($userdata->szuletesi_hely) ? $userdata->szuletesi_hely : '' }}" pattern="^.{0,30}$" placeholder="2. állampolgársága">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-bed-pulse"></i></span>
                                    @error('fieldUserBirthPlace')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>

                        <!-- Nem  -->
                        <div class="form-group row mb-3">
                        <label for="exampleFormControlSelect1" class="col-4 col-form-label" name="Gender">Neme</label>
                        <div class="col-md-8">
                        <div class="input-group">
                        <select class="form-control" id="Select1">
                        <option>Férfi</option>
                        <option>Nő</option>
                        </select>
                        <span class="input-group-text"><i class="fa-solid fa-venus-mars"></i></i></span>
                        </div>
                        </div>
                        </div>

                        <!-- TAJ szám -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserBirthPlace" class="col-4 col-form-label">TAJ szám</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserBirthPlace') is-invalid @enderror" name="TajNum" value="{{ isset($userdata->szuletesi_hely) ? $userdata->szuletesi_hely : '' }}" pattern="^.{0,30}$" placeholder="TAJ szám">
                                    <span class="input-group-text"><i class="fa-solid fa-id-card"></i></span>
                                    @error('fieldUserBirthPlace')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>

                         <!-- TAJ szám ellenőrzés -->
                         <div class="form-group row mb-3">
                            <label for="fieldUserBirthPlace" class="col-4 col-form-label">TAJ szám ellenőrzés</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserBirthPlace') is-invalid @enderror" name="TajNumCheck" value="{{ isset($userdata->szuletesi_hely) ? $userdata->szuletesi_hely : '' }}" pattern="^.{0,30}$" placeholder="TAJ szám ellenőrzés">
                                    <span class="input-group-text"><i class="fa-solid fa-id-card"></i></span>
                                    @error('fieldUserBirthPlace')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>

                        <!-- Állandó lakcím irányítószám -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserZipCode2" class="col-4 col-form-label">Állandó lakcím rányítószám</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserZipCode') is-invalid @enderror" name="fieldUserZipCode" value="{{ isset($userdata->iranyitoszam) ? $userdata->iranyitoszam : '' }}" pattern="^.{4,4}$" placeholder="Állandó lakcím irányítószám">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-signs-post"></i></span>
                                    @error('fieldUserZipCode')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>

                        <!-- Állandó lakcím település -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserCity2" class="col-4 col-form-label">Állandó lakcím település</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <!--<input type="text" class="form-control" name="fieldUserCity" value="{{ isset($userdata->telepules) ? $userdata->telepules : '' }}" pattern="^.{0,30}$" required>-->
                                    <select class="form-select" name="PermAdr">
                                    {{-- @foreach($settlements as $key => $settlement) 
                                            <!--option value="{{isset($settlement->telepules) ? $settlement->telepules : ''}}" {{ isset($userdata->telepules) && $userdata->telepules == $settlement->telepules ? 'selected' : '' }}> {{$settlement->telepules}}</option-->
                                        @endforeach --}}
                                    </select>
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-location-dot"></i></span>
                                </div>
                            </div>
                        </div>




                         <!-- Állandó lakcím közterület neve -->
                         <div class="form-group row mb-3">
                            <label for="fieldUserStreet" class="col-4 col-form-label">Állandó lakcím közterület neve</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserStreet') is-invalid @enderror" name="fieldUserStreet2" value="{{ isset($userdata->kozterulet_neve) ? $userdata->kozterulet_neve : '' }}" pattern="^.{0,30}$" placeholder="Állandó lakcím közterület neve">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-building"></i></span>
                                    @error('fieldUserStreet')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>

                        <!-- Állandó lakcím közterület jelleg -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserHouseNumber" class="col-4 col-form-label">Állandó lakcím közterület jellege</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserHouseNumber') is-invalid @enderror" name="fieldUserHouseNumber" value="{{ isset($userdata->hazszam) ? $userdata->hazszam : '' }}" placeholder="Állandó lakcím közterület jellege">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-house"></i></span>
                                    @error('fieldUserHouseNumber')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>

                        <!-- Állandó lakcím házszám -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserHouseNumber" class="col-4 col-form-label">Állandó lakcím házszám</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserHouseNumber') is-invalid @enderror" name="PermUserHouseNumber" value="{{ isset($userdata->hazszam) ? $userdata->hazszam : '' }}" placeholder="Állandó lakcím házszám">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-house"></i></span>
                                    @error('fieldUserHouseNumber')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>

                        <!-- Állandó lakcím pontosítás -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserFloorNumber" class="col-4 col-form-label">Állandó lakcím pontosítás</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserFloorNumber') is-invalid @enderror" name="Clarif" value="{{ isset($userdata->emelet) ? $userdata->emelet : '' }}" placeholder="Állandó lakcím pontosítás">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-list-ol"></i></span>
                                    @error('fieldUserFloorNumber')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>



                    
                        
                     <!-- Tartózkodási cím irányítószám -->
                     <div class="form-group row mb-3">
                            <label for="fieldUserZipCode2" class="col-4 col-form-label">Tartózkodási cím irányítószám</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserZipCode') is-invalid @enderror" name="ZipCode1" value="{{ isset($userdata->iranyitoszam) ? $userdata->iranyitoszam : '' }}" pattern="^.{4,4}$" placeholder="Tartózkodási cím irányítószám">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-signs-post"></i></span>
                                    @error('fieldUserZipCode')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>

                        <!-- Tartózkodási cím település -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserCity2" class="col-4 col-form-label">Tartózkodási cím település</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <!--<input type="text" class="form-control" name="fieldUserCity" value="{{ isset($userdata->telepules) ? $userdata->telepules : '' }}" pattern="^.{0,30}$" required>-->
                                    <select class="form-select" name="Adr">
                                    {{-- @foreach($settlements as $key => $settlement) 
                                            <!--option value="{{isset($settlement->telepules) ? $settlement->telepules : ''}}" {{ isset($userdata->telepules) && $userdata->telepules == $settlement->telepules ? 'selected' : '' }}> {{$settlement->telepules}}</option-->
                                        @endforeach --}}
                                    </select>
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-location-dot"></i></span>
                                </div>
                            </div>
                        </div>




                         <!-- Tartózkodási cím közterület neve -->
                         <div class="form-group row mb-3">
                            <label for="fieldUserStreet" class="col-4 col-form-label">Tartózkodási cím közterület neve</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserStreet') is-invalid @enderror" name="Str" value="{{ isset($userdata->kozterulet_neve) ? $userdata->kozterulet_neve : '' }}" pattern="^.{0,30}$" placeholder="Tartózkodási cím közterület neve">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-building"></i></span>
                                    @error('fieldUserStreet')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>

                        <!-- Tartózkodási cím közterület jellege -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserHouseNumber" class="col-4 col-form-label">Tartózkodási cím közterület jellege</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserHouseNumber') is-invalid @enderror" name="HrNumber" value="{{ isset($userdata->hazszam) ? $userdata->hazszam : '' }}" placeholder="Tartózkodási cím közterület jellege">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-house"></i></span>
                                    @error('fieldUserHouseNumber')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>

                        <!-- Tartózkodási cím házszám -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserHouseNumber" class="col-4 col-form-label">Tartózkodási cím házszám</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserHouseNumber') is-invalid @enderror" name="HouseNumber" value="{{ isset($userdata->hazszam) ? $userdata->hazszam : '' }}" placeholder="Tartózkodási cím házszám">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-house"></i></span>
                                    @error('fieldUserHouseNumber')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>

                        <!-- Tartózkodási cím pontosítás -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserFloorNumber" class="col-4 col-form-label">Tartózkodási cím pontosítás</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserFloorNumber') is-invalid @enderror" name="Clarif2" value="{{ isset($userdata->emelet) ? $userdata->emelet : '' }}" placeholder="Tartózkodási cím pontosítás">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-list-ol"></i></span>
                                    @error('fieldUserFloorNumber')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>



                        <!-- Adatkezelő Intézmény OM azonosítója -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserBirthPlace" class="col-4 col-form-label">Adatkezelő Intézmény OM azonosítója</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserBirthPlace') is-invalid @enderror" name="OmVal" value="{{ isset($userdata->szuletesi_hely) ? $userdata->szuletesi_hely : '' }}" pattern="^.{0,30}$" placeholder="Adatkezelő Intézmény OM azonosítója">
                                    <span class="input-group-text"><i class="fa-solid fa-school"></i></span>
                                    @error('fieldUserBirthPlace')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>

                        <!-- Adatkezelő Intézmény neve -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserBirthPlace" class="col-4 col-form-label">Adatkezelő Intézmény neve</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserBirthPlace') is-invalid @enderror" name="SchoolName" value="{{ isset($userdata->szuletesi_hely) ? $userdata->szuletesi_hely : '' }}" pattern="^.{0,30}$" placeholder="Adatkezelő Intézmény  neve">
                                    <span class="input-group-text"><i class="fa-solid fa-school"></i></span>
                                    @error('fieldUserBirthPlace')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>

                        <!-- Adatkezelő Intézmény címe -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserBirthPlace" class="col-4 col-form-label">Adatkezelő Intézmény címe</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserBirthPlace') is-invalid @enderror" name="SchoolAdr" value="{{ isset($userdata->szuletesi_hely) ? $userdata->szuletesi_hely : '' }}" pattern="^.{0,30}$" placeholder="Adatkezelő Intézmény  címe">
                                    <span class="input-group-text"><i class="fa-solid fa-school"></i></span>
                                    @error('fieldUserBirthPlace')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>
                        
                        <!-- Tankötelezettség vége -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserBirthdate" class="col-4 col-form-label">Tankötelezettség vége</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="date" class="form-control" name="EducOv" value="{{ isset($userdata->szuletesi_ido) ? $userdata->szuletesi_ido->format('Y-m-d') : date('Y-m-d')}}" required>
                                    <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></i></span>
                                </div>
                            </div>
                        </div>

                        <!-- Tankötelezettséget teljesítő  -->
                        <div class="form-group row mb-3">
                        <label for="exampleFormControlSelect1" class="col-4 col-form-label" name="Perf">Tankötelezettséget teljesítő</label>
                        <div class="col-md-8">
                        <div class="input-group">
                        <select class="form-control" id="Select1">
                        <option>Igen</option>
                        <option>Nem</option>
                        </select>
                        <span class="input-group-text"><i class="fa-regular fa-question"></i></i></span>
                        </div>
                        </div>
                        </div>

                        <!-- Sajátos nevelési igény  -->
                        <div class="form-group row mb-3">
                        <label for="exampleFormControlSelect1" class="col-4 col-form-label" name="SpecEdu">Sajátos nevelési igény</label>
                        <div class="col-md-8">
                        <div class="input-group">
                        <select class="form-control" id="Select1">
                        <option>Igen</option>
                        <option>Nem</option>
                        </select>
                        <span class="input-group-text"><i class="fa-regular fa-question"></i></i></span>
                        </div>
                        </div>
                        </div>

                       <!-- Beilleszkedéssel, tanulási, magatartási nehézséggel küzd  -->
                       <div class="form-group row mb-3">
                        <label for="exampleFormControlSelect1" class="col-4 col-form-label" name="ThirdQuest">Beilleszkedéssel, tanulási, magatartási nehézséggel küzd </label>
                        <div class="col-md-8">
                        <div class="input-group">
                        <select class="form-control" id="Select1">
                        <option>Igen</option>
                        <option>Nem</option>
                        </select>
                        <span class="input-group-text"><i class="fa-regular fa-question"></i></i></span>
                        </div>
                        </div>
                        </div>

                        <!-- Érvényes diákigazolvány száma -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserBirthPlace" class="col-4 col-form-label">Érvényes diákigazolvány száma</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserBirthPlace') is-invalid @enderror" name="StudCa" value="{{ isset($userdata->szuletesi_hely) ? $userdata->szuletesi_hely : '' }}" pattern="^.{0,30}$" placeholder="Érvényes diákigazolvány száma">
                                    <span class="input-group-text"><i class="fa-solid fa-id-card"></i></span>
                                    @error('fieldUserBirthPlace')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>

                        <!-- Közoktatási intézmény neve -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserBirthPlace" class="col-4 col-form-label">Közoktatási Intézmény neve</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserBirthPlace') is-invalid @enderror" name="SoName" value="{{ isset($userdata->szuletesi_hely) ? $userdata->szuletesi_hely : '' }}" pattern="^.{0,30}$" placeholder="Közoktatási Intézmény  neve">
                                    <span class="input-group-text"><i class="fa-solid fa-school"></i></span>
                                    @error('fieldUserBirthPlace')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>

                        <!-- Közoktatási Intézmény székhelye -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserBirthPlace" class="col-4 col-form-label">Közoktatási Intézmény székhelye</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserBirthPlace') is-invalid @enderror" name="SoAdr" value="{{ isset($userdata->szuletesi_hely) ? $userdata->szuletesi_hely : '' }}" pattern="^.{0,30}$" placeholder="Adatkezelő Intézmény  székhelye"">
                                    <span class="input-group-text"><i class="fa-solid fa-school"></i></span>
                                    @error('fieldUserBirthPlace')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>

                        <!-- Om azonosító -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserBirthPlace" class="col-4 col-form-label">OM azonosító</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserBirthPlace') is-invalid @enderror" name="OmNum" value="{{ isset($userdata->szuletesi_hely) ? $userdata->szuletesi_hely : '' }}" pattern="^.{0,30}$" placeholder="OM azonosító">
                                    <span class="input-group-text"><i class="fa-solid fa-id-card"></i></span>
                                    @error('fieldUserBirthPlace')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>

                        <!-- ügyviteli hely -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserHouseNumber" class="col-4 col-form-label">Ügyviteli hely</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserHouseNumber') is-invalid @enderror" name="Place2" value="{{ isset($userdata->hazszam) ? $userdata->hazszam : '' }}" placeholder="Ügyviteli hely">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-house"></i></span>
                                    @error('fieldUserHouseNumber')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>

                         <!-- Jogviszony státusza  -->
                         <div class="form-group row mb-3">
                        <label for="exampleFormControlSelect1" class="col-4 col-form-label" name="Stat">Jogviszony státusza </label>
                        <div class="col-md-8">
                        <div class="input-group">
                        <select class="form-control" id="Select1">
                        <option>Aktív</option>
                        <option>Inaktív</option>
                        </select>
                        <span class="input-group-text"><i class="fa-regular fa-question"></i></i></span>
                        </div>
                        </div>
                        </div>

                         <!-- Jogviszony kezdete -->
                         <div class="form-group row mb-3">
                            <label for="fieldUserBirthdate" class="col-4 col-form-label">Jogviszony kezdete</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="date" class="form-control" name="Start1" value="{{ isset($userdata->szuletesi_ido) ? $userdata->szuletesi_ido->format('Y-m-d') : date('Y-m-d')}}" required>
                                    <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></i></span>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Jogviszony (várható) befejezése) -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserBirthdate" class="col-4 col-form-label">Jogviszony (várható) befejezése </label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="date" class="form-control" name="Ov1" value="{{ isset($userdata->szuletesi_ido) ? $userdata->szuletesi_ido->format('Y-m-d') : date('Y-m-d')}}" required>
                                    <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></i></span>
                                </div>
                            </div>
                        </div>

                         <!-- Jogviszony jellege  -->
                         <div class="form-group row mb-3">
                        <label for="exampleFormControlSelect1" class="col-4 col-form-label" name="LegRel">Jogviszony jellege </label>
                        <div class="col-md-8">
                        <div class="input-group">
                        <select class="form-control" id="Select3">
                        <option>Tankötelezettséget teljesítő jogviszony</option>
                        <option>Tankötelezettséget nem teljesítő jogviszony</option>
                        </select>
                        <span class="input-group-text"><i class="fa-regular fa-question"></i></i></span>
                        </div>
                        </div>
                        </div>

                        <!-- Vendégtanuló  -->
                        <div class="form-group row mb-3">
                        <label for="exampleFormControlSelect1" class="col-4 col-form-label" name="VisStud">Vendégtanuló </label>
                        <div class="col-md-8">
                        <div class="input-group">
                        <select class="form-control" id="Select4">
                        <option>igen</option>
                        <option>Nem</option>
                        </select>
                        <span class="input-group-text"><i class="fa-regular fa-question"></i></i></span>
                        </div>
                        </div>
                        </div>

                        <!-- Egyéni munkarend  -->
                        <div class="form-group row mb-3">
                        <label for="exampleFormControlSelect1" class="col-4 col-form-label" name=Pers">Egyéni munkarend </label>
                        <div class="col-md-8">
                        <div class="input-group">
                        <select class="form-control" id="Select5">
                        <option>igen</option>
                        <option>Nem</option>
                        </select>
                        <span class="input-group-text"><i class="fa-regular fa-question"></i></i></span>
                        </div>
                        </div>
                        </div>
                            
                         <!-- Ideiglenes óvodai/ideiglenes vendégtanulói jogviszony  -->
                         <div class="form-group row mb-3">
                        <label for="exampleFormControlSelect1" class="col-4 col-form-label" name=Que2">Ideiglenes óvodai/ideiglenes vendégtanulói jogviszony </label>
                        <div class="col-md-8">
                        <div class="input-group">
                        <select class="form-control" id="Select5">
                        <option>igen</option>
                        <option>Nem</option>
                        </select>
                        <span class="input-group-text"><i class="fa-regular fa-question"></i></i></span>
                        </div>
                        </div>
                        </div>

                        <!-- Osztály -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserNickName" class="col-4 col-form-label">Osztály</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserNickName') is-invalid @enderror" name="Class" value="{{ isset($userdata->becenev) ? $userdata->becenev : '' }}" pattern="^.{0,30}$" placeholder="Osztály">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-pen-to-square"></i></span>
                                    @error('fieldUserNickName')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>    

                         <!-- Nyitott szolgáltatások  -->
                         <div class="form-group row mb-3">
                        <label for="exampleFormControlSelect1" class="col-4 col-form-label" name="Serv">Nyitott szolgáltatások </label>
                        <div class="col-md-8">
                        <div class="input-group">
                        <select class="form-control" id="Select5">
                        <option>Első szolgáltatás</option>
                        <option>Második szolgáltatás</option>
                        </select>
                        <span class="input-group-text"><i class="fa-regular fa-question"></i></i></span>
                        </div>
                        </div>
                        </div>

                        <!-- Lezárt szolgáltatások  -->
                        <div class="form-group row mb-3">
                        <label for="exampleFormControlSelect1" class="col-4 col-form-label" name="ServClos">Lezárt szolgáltatások </label>
                        <div class="col-md-8">
                        <div class="input-group">
                        <select class="form-control" id="Select5">
                        <option>Első szolgáltatás</option>
                        <option>Második szolgáltatás</option>
                        </select>
                        <span class="input-group-text"><i class="fa-regular fa-question"></i></i></span>
                        </div>
                        </div>
                        </div>

                        <!-- A Belügyminisztérium személyiadat- és lakcímnyilvántartásában beazonosított  -->
                        <div class="form-group row mb-3">
                        <label for="exampleFormControlSelect1" class="col-4 col-form-label" name="ImpAd">A Belügyminisztérium személyiadat- és lakcímnyilvántartásában beazonosított </label>
                        <div class="col-md-8">
                        <div class="input-group">
                        <select class="form-control" id="Select5">
                        <option>Első szolgáltatás</option>
                        <option>Második szolgáltatás</option>
                        </select>
                        <span class="input-group-text"><i class="fa-regular fa-question"></i></i></span>
                        </div>
                        </div>
                        </div>
                        
                        <!-- Utolsó személyiadat-és lakcímnyilvántartás frissítés időpontja -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserBirthdate" class="col-4 col-form-label">Utolsó személyiadat-és lakcímnyilvántartás frissítés időpontja </label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="date" class="form-control" name="LastRef" value="{{ isset($userdata->szuletesi_ido) ? $userdata->szuletesi_ido->format('Y-m-d') : date('Y-m-d')}}" required>
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