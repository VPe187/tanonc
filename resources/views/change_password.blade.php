@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-11 col-lg-8 col-xl-8 col-xxl-7">
            <div class="card shadow">
                <div class="card-header"><i class="fa-solid fa-btn fa-address-card"></i>{{ __('Jelszó változtatás') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('update_password') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="old_password" class="col-md-4 col-form-label text-md-end">{{ __('Régi jelszó') }}</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input id="old_password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="old_password">
                                    <span class="input-group-text"><i class="fa-solid fa-btn fa-key"></i></span>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                       

                        <div class="row mb-3">
                            <label for="new_password" class="col-md-4 col-form-label text-md-end">{{ __('Új jelszó') }}</label>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <input id="new_password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    <span class="input-group-text"><i class="fa-solid fa-btn fa-key"></i></span>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="confirm_password" class="col-md-4 col-form-label text-md-end">{{ __('Jelszó ellenőrzés') }}</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input id="confirm_password" type="password" class="form-control" name="confirm_password" required autocomplete="confirm_password">
                                    <span class="input-group-text"><i class="fa-solid fa-btn fa-key"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary shadow">
                                <i class="fa-solid fa-btn fa-address-card"></i>{{ __('Módosítás') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection