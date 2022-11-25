@extends('layouts.app')

@section('content')
<script src="{{ asset('scroll.js') }}"></script>
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
                    <!--Exportálás Excelbe-->
                    <a href="{{url('/export-file')}}" class="btn btn-primary float-end mb-6 mt-6 ms-6">
                                    <i class="fa-btn fa-solid fa-file-excel" style="color:lightgreen;"></i>Exportálás </a>
                    <!--<h5><a class="float-end" href="{{ url('/export-file') }}"><i class="fa-btn fa-sharp fa-solid fa-file-excel"></i>{{ __('Exportálás Excelbe') }}</a></h5>                
                    <div class="form-group row mb-3">-->
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
                    <hr/>               
                    <!--<p></p>-->                      
                    <div class="table-responsive">
                        <table class="table table-hover"> 
                            
                            <thead class="thead">
                            <tr class="text-nowrap" style="border-left: 3px solid lightblue">     
                                    <th >Id</th>
                                    <th class="sticky-table-column" style="background: #5599ff;" >Oktatási azonosító</th>
                                    <th >Viselt név előtag</th>
                                    <th >Viselt vezetéknév</th>
                                    <th >Viselt keresztnév</th>
                                    <th >Viselt név névsorrend</th>
                                    <th >Születési név előtag</th>
                                    <th >Szuletési vezetéknév</th>
                                    <th >Születési keresztnév</th>
                                    <th >Születési név névsorrend</th>
                                    <th >Anyja neve előtag</th>
                                    <th >Anyja neve vezeteknév</th>
                                    <th >Anyja neve keresztnév</th>
                                    <th >Anyja neve névsorrend</th>
                                    <th >Születési dátum</th>
                                    <th >Születési hely</th>
                                    <th >Születési ország</th>
                                    <th >Állampolgárság 1</th>
                                    <th >Állampolgárság 2</th>
                                    <th >Neme</th>
                                    <th >TAJ szám</th>
                                    <th >TAJ ellenőrzés</th>
                                    <th >Állandó lakcím irányitószám</th>
                                    <th >Állandó lakcím település</th>
                                    <th >Állandó lakcím közteruletnév</th>
                                    <th >Állandó lakcím közterulet jelleg</th>
                                    <th >Állandó lakcím házszám</th>
                                    <th >Állandó lakcím pontositás</th>
                                    <th >Tartozkodási cím irányítoszám</th>
                                    <th >Tartozkodási cím település</th>
                                    <th >Tartozkodási cím közterület neve</th>
                                    <th >Tartozkodási cím közterület jelleg</th>
                                    <th >Tartozkodási cím házszám</th>
                                    <th >Tartozkodási cím pontosítás</th>
                                    <th >Adat kezelő intézmény OM azonosítója</th>
                                    <th >Adat kezelő intézmény neve</th>
                                    <th >Adat kezelő intézmény címe</th>
                                    <th >Tankötelezettség vége</th>
                                    <th >Tankötelezettségét teljesítő</th>
                                    <th >Sajátos nevelési igényű</th>
                                    <th >Beilleszkedéssel, tanulási, magatartási nehézséggel küzd</th>
                                    <th >Érvényes diák igazolvány száma</th>
                                    <th >Közoktatási intézmény neve</th>
                                    <th >Közoktatási intézmény székhelye</th>
                                    <th >OM azonosító</th>
                                    <th >Ügyviteli hely</th>
                                    <th >Jogviszony státusza</th>
                                    <th >Jogviszony kezdete</th>
                                    <th >Jogviszony várható befejezése</th>
                                    <th >Jogviszony jellege</th>
                                    <th >Vendegtanuló</th>
                                    <th >Egyéni munkarend</th>
                                    <th >Ideiglenes óvodai, ideiglenes vendégtanulói jogviszony</th>
                                    <th >Osztály</th>
                                    <th >Nyitott szolgáltatások</th>
                                    <th >Lezárt szolgáltatások</th>
                                    <th >A BM személyiadat nyilvántartásában beazonosított</th>
                                    <th >Utolsó személyiadat és lakcímnyilvántartás frissítés időpontja</th>
                                    <!--<th >Created at</th>
                                    <th >Updated at</th> -->
                                    <th >Gondviselő neve</th>
                                    <th >Gondviselő telefonszáma</th>
                                    <th >Gondviselő email címe</th>
                                    <th >Törvényes képviselő neve</th>
                                    <th >Háziorvos neve</th>
                                    <th >Háziorvos telefonszáma</th>
                                    <th >COVID-19 oltással rendelkezik</th>
                                    <th >Gyermekvédelmi kedvezmény</th>
                                    <th >Gyermekvédelmi kedvezmény kezdete</th>
                                    <th >Gyermekvédelmi kedvezmény vége</th>
                                    <th >Hátrányos helyzetű</th>
                                    <th >Hátrányos helyzetű státusz kezdete</th>
                                    <th >Hátrányos helyzetű státusz vége</th>
                                    <th >Halmozottan hátrányos helyzetű</th>
                                    <th >Halmozottan hátrányos helyzetű státusz kezdete</th>
                                    <th >Halmozottan hátrányos helyzetű státusz vége</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($diakok as $tanulo)
                                    <tr class="text-nowrap" style="border-left: 3px solid lightblue">
                                            <td style="background-color: lightgrey" >{{$tanulo->id}}</td>
                                            <td class="sticky-table-column" style="background-color: lightgrey" >{{$tanulo->oktazon}}</td>
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