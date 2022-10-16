@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Felhasználók') }}</div>

                <div class="card-body">
                    Ez a kártya belső része
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Név</th>
                                <th>Email</th>
                            </tr>
                        <thead>
                         <tbody>    
                        @foreach($fkh as $fh)
                            <tr>
                                {{$fh->name}} <br />
                                {{$fh->name}} <br />
                        @endforeach
                    </table>
                    {{ __('Sikeres bejelentkezés!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection