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
                                <tr class="text-nowrap" style="border-left: 3px solid lightblue">
                                    <th style="background: lightgrey">Id</th>
                                    <th style="background: lightgrey">Oktatási azonosító</th>
                                    <th style="background: lightgrey">Viselt név előtag</th>
                                    <th style="background: lightgrey">Viselt vezetéknév</th>
                                    <th style="background: lightgrey">Viselt keresztnév</th>
                                    <th style="background: lightgrey">Viselt név névsorrend</th>
                                    <th style="background: lightgrey">Születési név előtag</th>
                                    <th style="background: lightgrey">Szuletési vezetéknév</th>
                                    <th style="background: lightgrey">Születési keresztnév</th>
                                    <th style="background: lightgrey">Születési név névsorrend</th>
                                    <th style="background: lightgrey">Anyja neve előtag</th>
                                    <th style="background: lightgrey">Anyja neve vezeteknév</th>
                                    <th style="background: lightgrey">Anyja neve keresztnév</th>
                                    <th style="background: lightgrey">Anyja neve névsorrend</th>
                                    <th style="background: lightgrey">Születési dátum</th>
                                    <th style="background: lightgrey">Születési hely</th>
                                    <th style="background: lightgrey">Születési ország</th>
                                    <th style="background: lightgrey">Állampolgárság 1</th>
                                    <th style="background: lightgrey">Állampolgárság 2</th>
                                    <th style="background: lightgrey">Neme</th>
                                    <th style="background: lightgrey">TAJ szám</th>
                                    <th style="background: lightgrey">TAJ ellenőrzés</th>
                                    <th style="background: lightgrey">Állandó lakcím irányitószám</th>
                                    <th style="background: lightgrey">Állandó lakcím település</th>
                                    <th style="background: lightgrey">Állandó lakcím közteruletnév</th>
                                    <th style="background: lightgrey">Állandó lakcím közterulet jelleg</th>
                                    <th style="background: lightgrey">Állandó lakcím házszám</th>
                                    <th style="background: lightgrey">Állandó lakcím pontositás</th>
                                    <th style="background: lightgrey">Tartozkodási cím irányítoszám</th>
                                    <th style="background: lightgrey">Tartozkodási cím település</th>
                                    <th style="background: lightgrey">Tartozkodási cím közterület neve</th>
                                    <th style="background: lightgrey">Tartozkodási cím közterület jelleg</th>
                                    <th style="background: lightgrey">Tartozkodási cím házszám</th>
                                    <th style="background: lightgrey">Tartozkodási cím pontosítás</th>
                                    <th style="background: lightgrey">Adat kezelő intézmény OM azonosítója</th>
                                    <th style="background: lightgrey">Adat kezelő intézmény neve</th>
                                    <th style="background: lightgrey">Adat kezelő intézmény címe</th>
                                    <th style="background: lightgrey">Tankötelezettség vége</th>
                                    <th style="background: lightgrey">Tankötelezettségét teljesítő</th>
                                    <th style="background: lightgrey">Sajátos nevelési igényű</th>
                                    <th style="background: lightgrey">Beilleszkedéssel, tanulási, magatartási nehézséggel küzd</th>
                                    <th style="background: lightgrey">Érvényes diák igazolvány száma</th>
                                    <th style="background: lightgrey">Közoktatási intézmény neve</th>
                                    <th style="background: lightgrey">Közoktatási intézmény székhelye</th>
                                    <th style="background: lightgrey">OM azonosító</th>
                                    <th style="background: lightgrey">Ügyviteli hely</th>
                                    <th style="background: lightgrey">Jogviszony státusza</th>
                                    <th style="background: lightgrey">Jogviszony kezdete</th>
                                    <th style="background: lightgrey">Jogviszony várható befejezése</th>
                                    <th style="background: lightgrey">Jogviszony jellege</th>
                                    <th style="background: lightgrey">Vendegtanuló</th>
                                    <th style="background: lightgrey">Egyéni munkarend</th>
                                    <th style="background: lightgrey">Ideiglenes óvodai, ideiglenes vendégtanulói jogviszony</th>
                                    <th style="background: lightgrey">Osztály</th>
                                    <th style="background: lightgrey">Nyitott szolgáltatások</th>
                                    <th style="background: lightgrey">Lezárt szolgáltatások</th>
                                    <th style="background: lightgrey">A BM személyiadat nyilvántartásában beazonosított</th>
                                    <th style="background: lightgrey">Utolsó személyiadat és lakcímnyilvántartás frissítés időpontja</th>
                                    <!--<th style="background: lightgrey">Created at</th>
                                    <th style="background: lightgrey">Updated at</th> -->
                                    <th style="background: lightgrey">Gondviselő neve</th>
                                    <th style="background: lightgrey">Gondviselő telefonszáma</th>
                                    <th style="background: lightgrey">Gondviselő email címe</th>
                                    <th style="background: lightgrey">Törvényes képviselő neve</th>
                                    <th style="background: lightgrey">Háziorvos neve</th>
                                    <th style="background: lightgrey">Háziorvos telefonszáma</th>
                                    <th style="background: lightgrey">COVID-19 oltással rendelkezik</th>
                                    <th style="background: lightgrey">Gyermekvédelmi kedvezmény</th>
                                    <th style="background: lightgrey">Gyermekvédelmi kedvezmény kezdete</th>
                                    <th style="background: lightgrey">Gyermekvédelmi kedvezmény vége</th>
                                    <th style="background: lightgrey">Hátrányos helyzetű</th>
                                    <th style="background: lightgrey">Hátrányos helyzetű státusz kezdete</th>
                                    <th style="background: lightgrey">Hátrányos helyzetű státusz vége</th>
                                    <th style="background: lightgrey">Halmozottan hátrányos helyzetű</th>
                                    <th style="background: lightgrey">Halmozottan hátrányos helyzetű státusz kezdete</th>
                                    <th style="background: lightgrey">Halmozottan hátrányos helyzetű státusz vége</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($diakok as $tanulo)
                                    <tr class="text-nowrap" style="border-left: 3px solid lightblue">
                                            <td>{{$tanulo->id}}</td>
                                            <td style="background: lightgrey">{{$tanulo->oktazon}}</td>
                                            <td>{{$tanulo->viselt_nev_elotag}}</td>
                                            <td>{{$tanulo->viselt_nev_vezeteknev1}}</td>
                                            <td>{{$tanulo->viselt_nev_keresztnev2}}</td>
                                            <td>{{$tanulo->viselt_nev_nevsorrend}}</td>
                                            <td>{{$tanulo->szuletesi_nev_elotag}}</td>
                                            <td>{{$tanulo->szuletesi_nev_vezeteknev}}</td>
                                            <td>{{$tanulo->szuletesi_nev_keresztnev}}</td>
                                            <td>{{$tanulo->szuletesi_nev_nevsorrend}}</td>
                                            <td>{{$tanulo->anyja_neve_elotag}}</td>
                                            <td>{{$tanulo->anyja_neve_vezeteknev}}</td>
                                            <td>{{$tanulo->anyja_neve_keresztnev}}</td>
                                            <td>{{$tanulo->anyja_neve_nevsorrend}}</td>
                                            <td>{{date('Y-m-d', strtotime($tanulo->szuletesi_datum))}}</td>
                                            <td>{{$tanulo->szuletesi_hely}}</td>
                                            <td>{{$tanulo->szuletesi_orszag}}</td>
                                            <td>{{$tanulo->allampolgarsag_1}}</td>
                                            <td>{{$tanulo->allampolgarsag_2}}</td>
                                            <td>{{$tanulo->nem}}</td>
                                            <td>{{$tanulo->tajszam}}</td>
                                            <td>{{$tanulo->taj_ellenorzes}}</td>
                                            <td>{{$tanulo->allando_lakcim_iranyitoszam}}</td>
                                            <td>{{$tanulo->allando_lakcim_telepules}}</td>
                                            <td>{{$tanulo->allando_lakcim_kozteruletnev}}</td>
                                            <td>{{$tanulo->allando_lakcim_kozterulet_jelleg}}</td>
                                            <td>{{$tanulo->allando_lakcim_hazszam}}</td>
                                            <td>{{$tanulo->allando_lakcim_pontositas}}</td>
                                            <td>{{$tanulo->tartozkodasi_cim_iranyitoszam}}</td>
                                            <td>{{$tanulo->tartozkodasi_cim_telepules}}</td>
                                            <td>{{$tanulo->tartozkodasi_cim_kozteruletnev}}</td>
                                            <td>{{$tanulo->tartozkodasi_cim_kozterulet_jelleg}}</td>
                                            <td>{{$tanulo->tartozkodasi_cim_hazszam}}</td>
                                            <td>{{$tanulo->tartozkodasi_cim_pontositas}}</td>
                                            <td>{{$tanulo->adat_kezelo_intezmeny_om_azonositoja}}</td>
                                            <td>{{$tanulo->adat_kezelo_intezmeny_neve}}</td>
                                            <td>{{$tanulo->adat_kezelo_intezmeny_cime}}</td>
                                            <td>{{date('Y-m-d', strtotime($tanulo->tankotelezettseg_vege))}}</td>
                                            <td>{{$tanulo->tankotelezettseget_teljesito}}</td>
                                            <td>{{$tanulo->sajatos_nevelesi_igenyu}}</td>
                                            <td>{{$tanulo->beilleszkedessel_tanulasi_magatartasi_nehezseggel_kuzd}}</td>
                                            <td>{{$tanulo->ervenyes_diak_igazolvany_szama}}</td>
                                            <td>{{$tanulo->kozoktatasi_intezmeny_neve}}</td>
                                            <td>{{$tanulo->kozoktatasi_intezmeny_szekhelye}}</td>
                                            <td>{{$tanulo->om_azonosito}}</td>
                                            <td>{{$tanulo->ugyviteli_hely}}</td>
                                            <td>{{$tanulo->jogviszony_statusza}}</td>
                                            <td>{{date('Y-m-d', strtotime($tanulo->jogviszony_kezdete))}}</td>
                                            <td>{{date('Y-m-d', strtotime($tanulo->jogviszony_varhato_befejezese))}}</td>
                                            <td>{{$tanulo->jogviszony_jellege}}</td>
                                            <td>{{$tanulo->vendegtanulo}}</td>
                                            <td>{{$tanulo->egyeni_munkarend}}</td>
                                            <td>{{$tanulo->ideiglenes_ovodai_ideiglenes_vendegtanuloi_jogviszony}}</td>
                                            <td>{{$tanulo->osztaly}}</td>
                                            <td>{{$tanulo->nyitott_szolgaltatasok}}</td>
                                            <td>{{$tanulo->lezart_szolgaltatasok}}</td>
                                            <td>{{$tanulo->a_bm_szemelyiadat_nyilvantartasaban_beazonositott}}</td>
                                            <td>{{$tanulo->utolso_szemelyiadat_es_lakcimnyilvantartas_frissites_idopontja}}</td>
                                            
                                            <td>{{$tanulo->familydata->gondviseloneve}}</td>
                                            <td>{{$tanulo->familydata->gondviselotelefonszama}}</td>
                                            <td>{{$tanulo->familydata->gondviseloemail}}</td>
                                            <td>{{$tanulo->familydata->torvenyeskepviselo}}</td>
                                            <td>{{$tanulo->familydata->haziorvosneve}}</td>
                                            <td>{{$tanulo->familydata->haziorvostelefon}}</td>
                                            <td>{{$tanulo->familydata->covidoltas}}</td>

                                            <td>{{$tanulo->social_status->gyermekvedelmikedvezmeny}}</td>
                                            <td>{{date('Y-m-d', strtotime($tanulo->social_status->gyermekvedelmikedvezmeny_kezdete))}}</td>
                                            <td>{{date('Y-m-d', strtotime($tanulo->social_status->gyermekvedelmikedvezmeny_vege))}}</td>
                                            <td>{{$tanulo->social_status->hatranyoshelyzetu}}</td>
                                            <td>{{date('Y-m-d', strtotime($tanulo->social_status->hhkezdete))}}</td>
                                            <td>{{date('Y-m-d', strtotime($tanulo->social_status->hhvege))}}</td>
                                            <td>{{$tanulo->social_status->halmozottanhatranyoshelyzetu}}</td>
                                            <td>{{date('Y-m-d', strtotime($tanulo->social_status->hhh_kezdete))}}</td>
                                            <td>{{date('Y-m-d', strtotime($tanulo->social_status->hhh_vege))}}</td>
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