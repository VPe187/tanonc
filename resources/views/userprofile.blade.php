@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-11 col-lg-8 col-xl-8 col-xxl-7">
            <div class="card shadow">
                <div class="card-header">
                    <i class="fa-btn fa-solid fa-id-card"></i>{{ __('Felhasználó profil') }}
                </div>
                <div class="card-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('userprofile') }}" autocomplete="off" class="needs-validation">
                        @csrf
                        
                        @if (Session::has('success_message'))
                            <div class="alert alert-success alert-dismissible fade show">
                                <strong>{{ Session::get('success_message') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <!-- UserId  -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserId" class="col-4 col-form-label">Azonosító</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="fieldUserId" value="{{ Auth::user()->id }}" readonly>
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-key"></i></span>
                                </div>
                            </div>
                        </div>

                        <!-- UserName -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserName" class="col-4 col-form-label">Név</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="fieldUserName" value="{{ Auth::user()->name }}" readonly>
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-file-signature"></i></span>
                                </div>
                            </div>
                        </div>                        

                        <!-- UserEmail -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserEmail" class="col-4 col-form-label">Email cím</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="fieldUserEmail" value="{{ Auth::user()->email }}" readonly>
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-at"></i></span>
                                </div>
                            </div>
                        </div>                                                

                        <hr>

                        <!-- UserSureName -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserSureName" class="col-4 col-form-label">Vezetéknév</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserSureName') is-invalid @enderror" name="fieldUserSureName" value="{{ isset($userdata->vezeteknev) ? $userdata->vezeteknev : '' }}" pattern="^.{0,30}$" placeholder="vezetéknév">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-pen-to-square"></i></span>
                                    @error('fieldUserSureName')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>                 
                        
                        <!-- UserFirstName -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserFirstName" class="col-4 col-form-label">Keresztnév</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserFirstName') is-invalid @enderror" name="fieldUserFirstName" value="{{ isset($userdata->keresztnev1) ? $userdata->keresztnev1 : '' }}" pattern="^.{0,30}$" placeholder="keresztnév">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-pen-to-square"></i></span>
                                    @error('fieldUserFirstName')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror                                    
                                </div>
                            </div>
                        </div> 
                        
                        <!-- UserFirstName2 -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserFirstName2" class="col-4 col-form-label">Második keresztnév</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserFirstName2') is-invalid @enderror" name="fieldUserFirstName2" value="{{ isset($userdata->keresztnev2) ? $userdata->keresztnev2 : '' }}" pattern="^.{0,30}$" placeholder="második keresztnév">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-pen-to-square"></i></span>
                                    @error('fieldUserFirstName2')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror    
                                </div>
                            </div>
                        </div>        
                        
                        <!-- UserNickName -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserNickName" class="col-4 col-form-label">Becenév</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserNickName') is-invalid @enderror" name="fieldUserNickName" value="{{ isset($userdata->becenev) ? $userdata->becenev : '' }}" pattern="^.{0,30}$" placeholder="becenév">
                                    <span class="input-group-text"><i class="fa-fw fa-brands fa-odnoklassniki"></i></span>
                                    @error('fieldUserNickName')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>    
                        
                        <!-- UserMotherName -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserMotherName" class="col-4 col-form-label">Anyja neve</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserMotherName') is-invalid @enderror" name="fieldUserMotherName" value="{{ isset($userdata->anyja_neve) ? $userdata->anyja_neve : '' }}" pattern="^.{0,30}$" placeholder="anyja neve">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-person-breastfeeding"></i></span>
                                    @error('fieldUserMotherName')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>       
                        
                        <!-- UserCountry -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserCountry" class="col-4 col-form-label">Ország</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <!-- <input type="text" class="form-control @error('fieldUserCountry') is-invalid @enderror" name="fieldUserCountry" value="{{ isset($userdata->orszag) ? $userdata->orszag : '' }}" pattern="^.{0,30}$" placeholder="ország"> -->
                                    <select class="form-select" name="fieldUserCountry">
                                        @foreach($countries as $key => $country)
                                            <option value="{{isset($country->orszag) ? $country->orszag : ''}}" {{ isset($userdata->orszag) && $userdata->orszag == $country->orszag ? 'selected' : '' }}> {{$country->orszag}}</option>
                                        @endforeach
                                    </select>
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-earth-europe"></i></span>
                                    @error('fieldUserCountry')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>                           

                        <!-- UserZipCode -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserZipCode" class="col-4 col-form-label">Irányítószám</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserZipCode') is-invalid @enderror" name="fieldUserZipCode" value="{{ isset($userdata->iranyitoszam) ? $userdata->iranyitoszam : '' }}" pattern="^.{4,4}$" placeholder="irányítószám">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-signs-post"></i></span>
                                    @error('fieldUserZipCode')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>

                        <!-- UserCity -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserCity" class="col-4 col-form-label">Település</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <!--<input type="text" class="form-control" name="fieldUserCity" value="{{ isset($userdata->telepules) ? $userdata->telepules : '' }}" pattern="^.{0,30}$" required>-->
                                    <select class="form-select" name="fieldUserCity">
                                        @foreach($settlements as $key => $settlement)
                                            <option value="{{isset($settlement->telepules) ? $settlement->telepules : ''}}" {{ isset($userdata->telepules) && $userdata->telepules == $settlement->telepules ? 'selected' : '' }}> {{$settlement->telepules}}</option>
                                        @endforeach
                                    </select>
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-location-dot"></i></span>
                                </div>
                            </div>
                        </div>

                        <!-- UserStreet -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserStreet" class="col-4 col-form-label">Közterület neve</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserStreet') is-invalid @enderror" name="fieldUserStreet" value="{{ isset($userdata->kozterulet_neve) ? $userdata->kozterulet_neve : '' }}" pattern="^.{0,30}$" placeholder="közterület neve">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-building"></i></span>
                                    @error('fieldUserStreet')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>

                        <!-- UserHouseNumber -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserHouseNumber" class="col-4 col-form-label">Házszám</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserHouseNumber') is-invalid @enderror" name="fieldUserHouseNumber" value="{{ isset($userdata->hazszam) ? $userdata->hazszam : '' }}" placeholder="házszám">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-house"></i></span>
                                    @error('fieldUserHouseNumber')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>

                        <!-- UserFloorNumber -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserFloorNumber" class="col-4 col-form-label">Emelet</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserFloorNumber') is-invalid @enderror" name="fieldUserFloorNumber" value="{{ isset($userdata->emelet) ? $userdata->emelet : '' }}" placeholder="emelet">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-list-ol"></i></span>
                                    @error('fieldUserFloorNumber')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>

                        <!-- UserDoorNumber -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserDoorNumber" class="col-4 col-form-label">Ajtó</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('fieldUserDoorNumber') is-invalid @enderror" name="fieldUserDoorNumber" value="{{ isset($userdata->ajto) ? $userdata->ajto : '' }}" placeholder="ajtó">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-door-open"></i></span>
                                    @error('fieldUserDoorNumber')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>

                        <!-- UserBirthdate -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserBirthdate" class="col-4 col-form-label">Születési idő</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="date" class="form-control" name="fieldUserBirthdate" value="{{ isset($userdata->szuletesi_ido) ? $userdata->szuletesi_ido->format('Y-m-d') : date('Y-m-d')}}" required>
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-cake-candles"></i></i></span>
                                </div>
                            </div>
                        </div>

                        <!-- UserBirthPlace -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserBirthPlace" class="col-4 col-form-label">Születési hely</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                   <!-- <input type="text" class="form-control @error('fieldUserBirthPlace') is-invalid @enderror" name="fieldUserBirthPlace" value="{{ isset($userdata->szuletesi_hely) ? $userdata->szuletesi_hely : '' }}" pattern="^.{0,30}$" placeholder="születési hely"> -->
                                   <select class="form-select" name="fieldUserBirthPlace">
                                        @foreach($birthplaces as $key => $birthplace)
                                            <option value="{{isset($birthplace->telepules) ? $birthplace->telepules : ''}}" {{ isset($userdata->szuletesi_hely) && $userdata->szuletesi_hely == $birthplace->telepules ? 'selected' : '' }}> {{$birthplace->telepules}}</option>
                                        @endforeach
                                    </select>
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-bed-pulse"></i></span>
                                    @error('fieldUserBirthPlace')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>

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

                        <div class="row text-center">
                            <div class="col">
                                <button type="submit" class="btn btn-primary mb-5 mt-4 me-4">
                                    <i class="fa-btn fa-solid fa-floppy-disk"></i>Mentés
                                </button>
                                <a href="{{url('/home')}}" class="btn btn-danger mb-5 mt-4 ms-4">
                                    <i class="fa-btn fa-solid fa-xmark"></i>Mégsem
                                </a>                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection