@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card rounded-0">
                <div class="card-header">
                    Felhasználók
                </div>
                <div class="card-body">
                    Ez a kártya belső része! Ide írjuk ki a létező felhasználókat táblázatos formában!<br />
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Név</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($fhk as $fh)
                                <tr>
                                    <td>{{$fh->name}}</td>
                                    <td>{{$fh->email}}</td>
                                <tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection