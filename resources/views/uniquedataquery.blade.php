@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header"><i class="fa-btn fa-solid fa-table-columns"></i>{{ __('Tanuló adatai') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p class="text-center"><img src="img/tanonc_logo.png" height="100px" class="img-fluid" width="400px"></p>
                    <p><hr /></p>
                    <h4>Keresés</h4><br />
                    <div class="form-group row mb-3">
                        <!-- Keresés oktatási azonosító alapján -->
                        <div class="col-md-6">
                            
                            <form action="/studentquery" method="post">
                                @csrf
                                <div class="input-group">
                                    <input class="form-control" type="search" name="oktazon" placeholder="Keresés oktatási azonosító alapján">&nbsp;
                                    
                                    <span class="input-group-text"><button type="submit" class="btn btn-sm noborder"><i class="fa-fw fa-sharp fa-solid fa-magnifying-glass"></i></button></span>
                                    
                                </div>
                                <!-- <span style="text-align: right"><a href="{{ url('/uniquedataquery') }}"><button type="button" class="btn btn-primary">Mindent mutat</button></a></span> -->
                            </form>
                            
                        </div>

                        <!--Keresés név alapján
                        <div class="col-md-4">
                            <form action="/studentquery" method="post">
                            @csrf
                            <div class="input-group">
                                <input class="form-control" type="search" name="tanulonev" placeholder="Keresés név alapján">&nbsp;
                                <span class="input-group-text"><button type="submit" class="btn btn-sm noborder"><i class="fa-fw fa-sharp fa-solid fa-magnifying-glass"></i></button></span>
                            </div>
                        </form>
                        </div>
                         -->
                    </div>
                    
                    <p><hr /></p>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Oktatási azonosító</th>
                                    <th>Tanuló neve</th>
                                    <th>Osztály</th>
                                    <th>Karbantartás</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($diakok as $tanulo)
                                    <tr>
                                        <td style="vertical-align: left">{{$tanulo->oktazon}}</td>
                                        <td style="vertical-align: left">{{$tanulo->viselt_nev_vezeteknev1}} {{$tanulo->viselt_nev_keresztnev2}}</td>
                                        <td style="vertical-align: left">{{$tanulo->osztaly}}</td>
                                        <td style="vertical-align: middle"><a href= "{{  url('studentedit/'.$tanulo->oktazon)}}"><button class="btn btn-sm btn-primary"><i class="fa-fw fa-solid fa-pen-to-square"></i></button></a>
                                        
                                           
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