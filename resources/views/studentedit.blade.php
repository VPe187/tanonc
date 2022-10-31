@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header"><i class="fa-btn fa-solid fa-table-columns"></i>{{ __('Csoportos lekérdezések') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p class="text-center"><img src="/img/tanonc_logo.png" /></p>
                    <p><hr /></p>
                    <h4>Tanuló karbantartása</h4><br />
                    <div class="form-group row mb-3">
                        <div class="col-md-4">
                            <div class="input-group">
                                <input class="form-control" type="search" value="{{ isset($query) ? $query : '' }}" name="fieldStudentName" placeholder="Keresés név alapján" type="text">
                                <span class="input-group-text"><i class="fa-fw fa-sharp fa-solid fa-magnifying-glass" type="button" value= {{request('fieldStudentName')}}></i></span>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="input-group">
                                <input class="form-control" type="search" value="{{ isset($query) ? $query : '' }}" name="fieldStudentId" placeholder="Keresés oktatási azonosító alapján" type="text">
                                <span class="input-group-text"><i class="fa-fw fa-sharp fa-solid fa-magnifying-glass" type="button" ></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Oktatási azonosító</th>
                                    <th>Tanuló neve</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($diakok as $tanulo)
                                    <tr>
                                        <td style="vertical-align: left">{{$tanulo->oktazon}}</td>
                                        <td style="vertical-align: left">{{$tanulo->viselt_nev_vezeteknev1}} {{$tanulo->viselt_nev_keresztnev2}}</td>
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