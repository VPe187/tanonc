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
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/userprofile/edit') }}">
                        @csrf

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
                                    <input type="text" class="form-control" name="fieldUserSureName" value="" readonly>
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-pen-to-square"></i></span>
                                </div>
                            </div>
                        </div>                 
                        
                        <!-- UserFirstName -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserFirstName" class="col-4 col-form-label text-md-end">Keresztnév</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="fieldUserFirstName" value="" readonly>
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-pen-to-square"></i></span>
                                </div>
                            </div>
                        </div> 
                        
                        <!-- UserFirstName2 -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserFirstName2" class="col-4 col-form-label text-md-end">Keresztnév 2.</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="fieldUserFirstName2" value="" readonly>
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-pen-to-square"></i></span>
                                </div>
                            </div>
                        </div>        
                        
                        <!-- UserNickName -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserNickName" class="col-4 col-form-label text-md-end">Becenév</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="fieldUserNickName" value="" readonly>
                                    <span class="input-group-text"><i class="fa-fw fa-brands fa-odnoklassniki"></i></span>
                                </div>
                            </div>
                        </div>    
                        
                        <!-- UserMotherName -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserMotherName" class="col-4 col-form-label text-md-end">Anyja neve</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="fieldUserMotherName" value="" readonly>
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-person-breastfeeding"></i></span>
                                </div>
                            </div>
                        </div>       
                        
                        <!-- UserCountry -->
                        <div class="form-group row mb-3">
                            <label for="fieldUserCountry" class="col-4 col-form-label text-md-end">Ország</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="fieldUserCountry" value="" readonly>
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-earth-europe"></i></span>
                                </div>
                            </div>
                        </div>                           

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection