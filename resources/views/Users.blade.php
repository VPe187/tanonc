@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-10">
            <div class="card shadow">
                <div class="card-header">
                    <i class="fa-btn fa-solid fa-users"></i>{{ __('Felhasználók') }}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Név</th>
                                    <th>Email</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fhk as $fh)
                                    <tr>
                                        <td style="vertical-align: middle">{{$fh->name}}</td>
                                        <td style="vertical-align: middle">{{$fh->email}}</td>
                                        <td style="vertical-align: middle"><button class="btn btn-sm btn-primary"><i class="fa-fw fa-solid fa-pen-to-square"></i></button>
                                        <td style="vertical-align: middle"><button class="btn btn-sm btn-danger"><i class="fa-fw fa-solid fa-trash-can"></i></button>
                                            
                                    <tr>
                                @endforeach
                            </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection