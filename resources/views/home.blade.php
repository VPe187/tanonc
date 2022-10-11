@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header"><i class="fa-btn fa-solid fa-table-columns"></i>{{ __('Áttekintő') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p class="text-center"><img src="img/tanonc_logo.png" /></p>
                    <p><hr /></p>
                    <h4>Tisztelt {{ Auth::user()->name }}!</h4><br />
                    <p>Ön sikeresen bejelentkezett a Tanonc rendszerbe! További lehetőségekért kérem használja a felső menüsort!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
