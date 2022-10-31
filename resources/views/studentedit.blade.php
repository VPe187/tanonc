@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header"><i class="fa-btn fa-solid fa-table-columns"></i>{{ __('Tanulók karbantartása') }}
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        
                    <p class="text-center"><img src="/img/tanonc_logo.png" /></p>
                    <p>
                        <hr />
                    </p>
                    <h4>Tanuló karbantartása
                    </h4>
                    
                    <hr />
                    <div class="table-responsive>">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td class="col-md-8">
                                        @foreach($diakok as $tanulo)
                                            <h5 style="text-align: left"><u>{{$tanulo->oktazon}}</u></h5>
                                            <h3 style="text-align: left">{{$tanulo->viselt_nev_vezeteknev1}} {{$tanulo->viselt_nev_keresztnev2}}</h6>
                                        
                                        @endforeach
                                    </td>
                                    <td class="col-md-4">
                                        <p style="text-align: right">
                                            <button type="submit" class="btn btn-sm btn-primary mb-5 mt-4 me-4">
                                                <i class="fa-btn fa-solid fa-floppy-disk"></i>Módosítás
                                            </button>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr />                  
                    <div class="card-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('userprofile') }}" autocomplete="off" class="needs-validation">
                            @csrf
                                
                            @if (Session::has('success_message'))
                                <div class="alert alert-success alert-dismissible fade show">
                                    <strong>{{ Session::get('success_message') }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
        
                            
                            <div class="table-responsive">
                                
                                
                                <table class="table table-borderless table-sm align-middle table-light">
                                    
                                    <tbody>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Tanuló neve</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" value="{{$tanulo->viselt_nev_vezeteknev1}} {{$tanulo->viselt_nev_keresztnev2}}">
                                            </td>
                                            <td class="col-md-3" style="text-align: right"><b>Oktatási azonosító</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control"  value="{{$tanulo->oktazon}}">
                                            </td>
                                        <tr>
                                        <tr>
                                            <td><hr></td>
                                            <td><hr></td>
                                            <td><hr></td>
                                            <td><hr></td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Név előtag</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" value="{{$tanulo->viselt_nev_elotag}} ">
                                            </td>
                                            <td class="col-md-3" style="text-align: right"><b>Név sorrendje</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" value="{{$tanulo->viselt_nev_nevsorrend}} ">
                                            </td>
                                        <tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Vezetéknév</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" value="{{$tanulo->viselt_nev_vezeteknev1}} ">
                                            </td>
                                            <td class="col-md-3" style="text-align: right"><b>Keresztnév</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control"  value="{{$tanulo->viselt_nev_keresztnev2}}">
                                            </td>
                                        <tr>
                                        <tr>
                                            <td><hr></td>
                                            <td><hr></td>
                                            <td><hr></td>
                                            <td><hr></td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Születési név előtag</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" value="{{$tanulo->szuletesi_nev_elotag}} ">
                                            </td>
                                            <td class="col-md-3" style="text-align: right"><b>Születési név sorrendje</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control"  value="{{$tanulo->szuletesi_nev_nevsorrend}}">
                                            </td>
                                        <tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Születési vezetéknév</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" value="{{$tanulo->szuletesi_nev_vezeteknev}} ">
                                            </td>
                                            <td class="col-md-3" style="text-align: right"><b>Születési keresztnév</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control"  value="{{$tanulo->szuletesi_nev_keresztnev}}">
                                            </td>
                                        <tr>
                                        <tr>
                                            <td><hr></td>
                                            <td><hr></td>
                                            <td><hr></td>
                                            <td><hr></td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Anyja neve előtag</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" value="{{$tanulo->anyja_neve_elotag}} ">
                                            </td>                                                
                                            <td class="col-md-3" style="text-align: right"><b>Anyja neve névsorrend</b></td>
                                                <td class="col-md-3">
                                                <input type="text" class="form-control"  value="{{$tanulo->anyja_neve_nevsorrend}}">
                                            </td>
                                        <tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Születési vezetéknév</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" value="{{$tanulo->anyja_neve_vezeteknev}} ">
                                            </td>
                                            <td class="col-md-3" style="text-align: right"><b>Születési keresztnév</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control"  value="{{$tanulo->anyja_neve_keresztnev}}">
                                            </td>
                                        <tr>
                                        <tr>
                                            <td><hr></td>
                                            <td><hr></td>
                                            <td><hr></td>
                                            <td><hr></td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Anyja neve előtag</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" value="{{$tanulo->anyja_neve_elotag}} ">
                                            </td>                                                
                                            <td class="col-md-3" style="text-align: right"><b>Anyja neve névsorrend</b></td>
                                                <td class="col-md-3">
                                                <input type="text" class="form-control"  value="{{$tanulo->anyja_neve_nevsorrend}}">
                                            </td>
                                        <tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Anyja születési vezetékneve</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" value="{{$tanulo->anyja_neve_vezeteknev}} ">
                                            </td>
                                            <td class="col-md-3" style="text-align: right"><b>Anyja születési keresztneve</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control"  value="{{$tanulo->anyja_neve_keresztnev}}">
                                            </td>
                                        <tr>
                                        <tr>
                                            <td><hr></td>
                                            <td><hr></td>
                                            <td><hr></td>
                                            <td><hr></td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Születési dátum</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" value="{{$tanulo->szuletesi_datum}} ">
                                            </td>                                                
                                                <td class="col-md-3" style="text-align: right"><b>Születési hely</b></td>
                                                <td class="col-md-3">
                                                <input type="text" class="form-control"  value="{{$tanulo->szuletesi_hely}}">
                                            </td>
                                        <tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Születési ország</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" value="{{$tanulo->szuletesi_orszag}} ">
                                            </td>
                                            <td class="col-md-3" style="text-align: right"><b>Második állampolgárság</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control"  value="{{$tanulo->allampolgarasag_2}}">
                                            </td>
                                        <tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Állampolgárság</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" value="{{$tanulo->allampolgarasag_1}} ">
                                            </td>
                                            <td></td>
                                            <td></td>
                                        <tr>
                                        <tr>
                                            <td><hr></td>
                                            <td><hr></td>
                                            <td><hr></td>
                                            <td><hr></td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Neme</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" value="{{$tanulo->nem}} ">
                                            </td>                                                
                                                <td></td>
                                                <td></td>
                                        <tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Társadalombiztosítási azonosító jel</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" value="{{$tanulo->tajszam}} ">
                                            </td>
                                            <td class="col-md-3" style="text-align: right"><b>TAJ ellenőrzése</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control"  value="{{$tanulo->taj_ellenorzes}}">
                                            </td>
                                        <tr>
                                    </tbody>
                                    
                                </table>
                                <hr>
                                <p style="text-align: right">
                                    <button type="submit" class="btn btn-sm btn-primary mb-5 mt-4 me-4">
                                        <i class="fa-btn fa-solid fa-floppy-disk"></i>Módosítás
                                    </button>
                                </p>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!--
<tr>
    <td style="vertical-align: left">{{$tanulo->oktazon}}</td>
    <td style="vertical-align: left">{{$tanulo->viselt_nev_vezeteknev1}} {{$tanulo->viselt_nev_keresztnev2}}</td>
    <td style="vertical-align: middle"><a href= "{{  url('studentedit/'.$tanulo->oktazon)}}"><button class="btn btn-sm btn-primary"><i class="fa-fw fa-solid fa-pen-to-square"></i></button></a>
    
       
<tr>
-->