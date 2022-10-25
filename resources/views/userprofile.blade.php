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
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('userprofileedit') }}">
                        @csrf
                        
                        @if (Session::has('message'))
                            <div class="alert alert-success alert-dismissable alert-hide">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{ Session::get('message') }}
                            </div>
                        @endif

                        <!-- UserId  -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserId" class="col-4 col-form-label text-md-end">Azonosító</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="fieldUserId" value="{{ Auth::user()->id }}" readonly>
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-key"></i></span>
                                </div>
                            </div>
                        </div>

                        <!-- UserName -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserName" class="col-4 col-form-label text-md-end">Név</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="fieldUserName" value="{{ Auth::user()->name }}" readonly>
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-file-signature"></i></span>
                                </div>
                            </div>
                        </div>                        

                        <!-- UserEmail -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserEmail" class="col-4 col-form-label text-md-end">Email cím</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="fieldUserEmail" value="{{ Auth::user()->email }}" readonly>
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-at"></i></span>
                                </div>
                            </div>
                        </div>                                                

                        <!-- UserSureName -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserSureName" class="col-4 col-form-label text-md-end">Vezetéknév</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="fieldUserSureName" value="" pattern="^.{0,30}$">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-pen-to-square"></i></span>
                                </div>
                            </div>
                        </div>                 
                        
                        <!-- UserFirstName -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserFirstName" class="col-4 col-form-label text-md-end">Keresztnév</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="fieldUserFirstName" value="" pattern="^.{0,30}$">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-pen-to-square"></i></span>
                                </div>
                            </div>
                        </div> 
                        
                        <!-- UserFirstName2 -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserFirstName2" class="col-4 col-form-label text-md-end">Keresztnév 2.</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="fieldUserFirstName2" value="" pattern="^.{0,30}$">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-pen-to-square"></i></span>
                                </div>
                            </div>
                        </div>        
                        
                        <!-- UserNickName -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserNickName" class="col-4 col-form-label text-md-end">Becenév</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="fieldUserNickName" value="" pattern="^.{0,30}$">
                                    <span class="input-group-text"><i class="fa-fw fa-brands fa-odnoklassniki"></i></span>
                                </div>
                            </div>
                        </div>    
                        
                        <!-- UserMotherName -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserMotherName" class="col-4 col-form-label text-md-end">Anyja neve</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="fieldUserMotherName" value="" pattern="^.{0,30}$">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-person-breastfeeding"></i></span>
                                </div>
                            </div>
                        </div>       
                        
                        <!-- UserCountry -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserCountry" class="col-4 col-form-label text-md-end">Ország</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="fieldUserCountry" value="" pattern="^.{0,30}$">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-earth-europe"></i></span>
                                </div>
                            </div>
                        </div>                           

                        <!-- UserZipCode -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserZipCode" class="col-4 col-form-label text-md-end">Irányítószám</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="fieldUserZipCode" value="">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-earth-europe"></i></span>
                                </div>
                            </div>
                        </div>

                        <!-- UserCity -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserCity" class="col-4 col-form-label text-md-end">Település</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="fieldUserCity" value="" pattern="^.{0,30}$">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-earth-europe"></i></span>
                                </div>
                            </div>
                        </div>

                        <!-- UserStreet -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserStreet" class="col-4 col-form-label text-md-end">Közterület neve</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="fieldUserStreet" value="" pattern="^.{0,30}$">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-earth-europe"></i></span>
                                </div>
                            </div>
                        </div>

                        <!-- UserHouseNumber -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserHouseNumber" class="col-4 col-form-label text-md-end">Házszám</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="fieldUserHouseNumber" value="">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-earth-europe"></i></span>
                                </div>
                            </div>
                        </div>

                        <!-- UserFloorNumber -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserFloorNumber" class="col-4 col-form-label text-md-end">Emelet</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="fieldUserFloorNumber" value="">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-earth-europe"></i></span>
                                </div>
                            </div>
                        </div>

                        <!-- UserDoorNumber -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserDoorNumber" class="col-4 col-form-label text-md-end">Ajtó</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="fieldUserDoorNumber" value="">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-earth-europe"></i></span>
                                </div>
                            </div>
                        </div>

                        <!-- UserBirthdate -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserBirthdate" class="col-4 col-form-label text-md-end">Születési idő</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="date" class="form-control" name="fieldUserBirthdate" value="">
                                    <span class="input-group-text"><i class="fa-fw fa-regular fa-calendar-days"></i></i></span>
                                </div>
                            </div>
                        </div>

                        <!-- UserBirthPlace -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserBirthPlace" class="col-4 col-form-label text-md-end">Születési hely</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="fieldUserBirthPlace" value="" pattern="^.{0,30}$">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-earth-europe"></i></span>
                                </div>
                            </div>
                        </div>

                        <!-- UserPhoneNumber -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserPhoneNumber" class="col-4 col-form-label text-md-end">Telefonszám</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="fieldUserPhoneNumber" value="" pattern="^.{0,14}$">
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-earth-europe"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-floppy-o"></i>Mentés
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection