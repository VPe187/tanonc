@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-11 col-lg-8 col-xl-8 col-xxl-7">
            <div class="card shadow">
                <div class="card-header">
                    <i class="fa-btn fa-solid fa-id-card"></i>{{ __('Jelszó változtatás') }}
                </div>
                <div class="card-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('update_password') }}" autocomplete="off" class="needs-validation">
                        @csrf
                        
                        @if (Session::has('success_message'))
                            <div class="alert alert-success alert-dismissible fade show">
                                <strong>{{ Session::get('success_message') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <!-- Old_Pass  -->
                        <div class="form-group row mb-3">
                            <label for="oldPasswordInput" class="col-4 col-form-label">Régi jelszó</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput" 
                                    placeholder="Régi jelszó">
                                    @error('old_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-key"></i></span>
                                </div>
                            </div>
                        </div>

                        <!-- New_Pass -->
                        <div class="form-group row mb-3">
                            <label for="newPasswordInput" class="col-4 col-form-label">Új jelszó</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput" 
                                    placeholder="Új jelszó">
                                    @error('new_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-key"></i></span>
                                </div>
                            </div>
                        </div>                    

                        <!-- Conf_Pass -->
                        <div class="form-group row mb-3">
                            <label for="confirmNewPasswordInput" class="col-4 col-form-label">Új jelszó ellenőrzése</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input name="new_password_confirmation" type="password" class="form-control @error('new_password_confirmation') is-invalid @enderror" id="confirmNewPasswordInput" 
                                    placeholder="Új jelszó ellenőrzése">
                                    @error('old_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                    <span class="input-group-text"><i class="fa-fw fa-solid fa-key"></i></span>
                                </div>
                            </div>
                        </div>    

                        <div class="card-footer">
                            <button class="btn btn-success">Módosítás</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
