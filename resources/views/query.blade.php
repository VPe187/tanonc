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
                                    <th>id</th>
                                    <th>oktazon</th>
                                    <th>viselt_nev_elotag</th>
                                    <th>viselt_nev_vezeteknev1</th>
                                    <th>viselt_nev_keresztnev2</th>
                                    <th>viselt_nev_nevsorrend</th>
                                    <th>szuletesi_nev_elotag</th>
                                    <th>szuletesi_nev_vezeteknev</th>
                                    <th>szuletesi_nev_keresztnev</th>
                                    <th>szuletesi_nev_nevsorrend</th>
                                    <th>anyja_neve_elotag</th>
                                    <th>anyja_neve_vezeteknev</th>
                                    <th>anyja_neve_keresztnev</th>
                                    <th>anyja_neve_nevsorrend</th>
                                    <th>szuletesi_datum</th>
                                    <th>szuletesi_hely</th>
                                    <th>szuletesi_orszag</th>
                                    <th>allampolgarsag_1</th>
                                    <th>allampolgarsag_2</th>
                                    <th>nem</th>
                                    <th>tajszam</th>
                                    <th>taj_ellenorzes</th>
                                    <th>allando_lakcim_iranyitoszam</th>
                                    <th>allando_lakcim_telepules</th>
                                    <th>allando_lakcim_kozteruletnev</th>
                                    <th>allando_lakcim_kozterulet_jelleg</th>
                                    <th>allando_lakcim_hazszam</th>
                                    <th>allando_lakcim_pontositas</th>
                                    <th>tartozkodasi_cim_iranyitoszam</th>
                                    <th>tartozkodasi_cim_telepules</th>
                                    <th>tartozkodasi_cim_kozteruletnev</th>
                                    <th>tartozkodasi_cim_kozterulet_jelleg</th>
                                    <th>tartozkodasi_cim_hazszam</th>
                                    <th>tartozkodasi_cim_pontositas</th>
                                    <th>adat_kezelo_intezmeny_om_azonositoja</th>
                                    <th>adat_kezelo_intezmeny_neve</th>
                                    <th>adat_kezelo_intezmeny_cime</th>
                                    <th>tankotelezettseg_vege</th>
                                    <th>tankotelezettseget_teljesito</th>
                                    <th>sajatos_nevelesi_igenyu</th>
                                    <th>beilleszkedessel_tanulasi_magatartasi_nehezseggel_kuzd</th>
                                    <th>ervenyes_diak_igazolvany_szama</th>
                                    <th>kozoktatasi_intezmeny_neve</th>
                                    <th>kozoktatasi_intezmeny_szekhelye</th>
                                    <th>om_azonosito</th>
                                    <th>ugyviteli_hely</th>
                                    <th>jogviszony_statusza</th>
                                    <th>jogviszony_kezdete</th>
                                    <th>jogviszony_varhato_befejezese</th>
                                    <th>jogviszony_jellege</th>
                                    <th>vendegtanulo</th>
                                    <th>egyeni_munkarend</th>
                                    <th>ideiglenes_ovodai_ideiglenes_vendegtanuloi_jogviszony</th>
                                    <th>osztaly</th>
                                    <th style="width: 30%">nyitott_szolgaltatasok</th>
                                    <th>lezart_szolgaltatasok</th>
                                    <th>a_bm_szemelyiadat_nyilvantartasaban_beazonositott</th>
                                    <th>utolso_szemelyiadat_es_lakcimnyilvantartas_frissites_idopontja</th>
                                    <th>created_at</th>
                                    <th>updated_at</th>
                                    <th>gondviseloneve</th>
                                    <th>gondviselotelefonszama</th>
                                    <th>gondviseloemail</th>
                                    <th>torvenyeskepviselo</th>
                                    <th>haziorvosneve</th>
                                    <th>haziorvostelefon</th>
                                    <th>covidoltas</th>
                                    <th>gyermekvedelmikedvezmeny</th>
                                    <th>gyermekvedelmikedvezmeny_kezdete</th>
                                    <th>gyermekvedelmikedvezmeny_vege</th>
                                    <th>hatranyoshelyzetu</th>
                                    <th>hhvege</th>
                                    <th>halmozottanhatranyoshelyzetu</th>
                                    <th>hhh_kezdete</th>
                                    <th>hhh_vege</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($diakok as $tanulo)
                                    <tr>
                                            <td style="vertical-align: left">{{$tanulo->id}}</td>
                                            <td style="vertical-align: left">{{$tanulo->oktazon}}</td>
                                            <td style="vertical-align: left">{{$tanulo->viselt_nev_elotag}}</td>
                                            <td style="vertical-align: left">{{$tanulo->viselt_nev_vezeteknev1}}</td>
                                            <td style="vertical-align: left">{{$tanulo->viselt_nev_keresztnev2}}</td>
                                            <td style="vertical-align: left">{{$tanulo->viselt_nev_nevsorrend}}</td>
                                            <td style="vertical-align: left">{{$tanulo->szuletesi_nev_elotag}}</td>
                                            <td style="vertical-align: left">{{$tanulo->szuletesi_nev_vezeteknev}}</td>
                                            <td style="vertical-align: left">{{$tanulo->szuletesi_nev_keresztnev}}</td>
                                            <td style="vertical-align: left">{{$tanulo->szuletesi_nev_nevsorrend}}</td>
                                            <td style="vertical-align: left">{{$tanulo->anyja_neve_elotag}}</td>
                                            <td style="vertical-align: left">{{$tanulo->anyja_neve_vezeteknev}}</td>
                                            <td style="vertical-align: left">{{$tanulo->anyja_neve_keresztnev}}</td>
                                            <td style="vertical-align: left">{{$tanulo->anyja_neve_nevsorrend}}</td>
                                            <td style="vertical-align: left">{{$tanulo->szuletesi_datum}}</td>
                                            <td style="vertical-align: left">{{$tanulo->szuletesi_hely}}</td>
                                            <td style="vertical-align: left">{{$tanulo->szuletesi_orszag}}</td>
                                            <td style="vertical-align: left">{{$tanulo->allampolgarsag_1}}</td>
                                            <td style="vertical-align: left">{{$tanulo->allampolgarsag_2}}</td>
                                            <td style="vertical-align: left">{{$tanulo->nem}}</td>
                                            <td style="vertical-align: left">{{$tanulo->tajszam}}</td>
                                            <td style="vertical-align: left">{{$tanulo->taj_ellenorzes}}</td>
                                            <td style="vertical-align: left">{{$tanulo->allando_lakcim_iranyitoszam}}</td>
                                            <td style="vertical-align: left">{{$tanulo->allando_lakcim_telepules}}</td>
                                            <td style="vertical-align: left">{{$tanulo->allando_lakcim_kozteruletnev}}</td>
                                            <td style="vertical-align: left">{{$tanulo->allando_lakcim_kozterulet_jelleg}}</td>
                                            <td style="vertical-align: left">{{$tanulo->allando_lakcim_hazszam}}</td>
                                            <td style="vertical-align: left">{{$tanulo->allando_lakcim_pontositas}}</td>
                                            <td style="vertical-align: left">{{$tanulo->tartozkodasi_cim_iranyitoszam}}</td>
                                            <td style="vertical-align: left">{{$tanulo->tartozkodasi_cim_telepules}}</td>
                                            <td style="vertical-align: left">{{$tanulo->tartozkodasi_cim_kozteruletnev}}</td>
                                            <td style="vertical-align: left">{{$tanulo->tartozkodasi_cim_kozterulet_jelleg}}</td>
                                            <td style="vertical-align: left">{{$tanulo->tartozkodasi_cim_hazszam}}</td>
                                            <td style="vertical-align: left">{{$tanulo->tartozkodasi_cim_pontositas}}</td>
                                            <td style="vertical-align: left">{{$tanulo->adat_kezelo_intezmeny_om_azonositoja}}</td>
                                            <td style="vertical-align: left">{{$tanulo->adat_kezelo_intezmeny_neve}}</td>
                                            <td style="vertical-align: left">{{$tanulo->adat_kezelo_intezmeny_cime}}</td>
                                            <td style="vertical-align: left">{{$tanulo->tankotelezettseg_vege}}</td>
                                            <td style="vertical-align: left">{{$tanulo->tankotelezettseget_teljesito}}</td>
                                            <td style="vertical-align: left">{{$tanulo->sajatos_nevelesi_igenyu}}</td>
                                            <td style="vertical-align: left">{{$tanulo->beilleszkedessel_tanulasi_magatartasi_nehezseggel_kuzd}}</td>
                                            <td style="vertical-align: left">{{$tanulo->ervenyes_diak_igazolvany_szama}}</td>
                                            <td style="vertical-align: left">{{$tanulo->kozoktatasi_intezmeny_neve}}</td>
                                            <td style="vertical-align: left">{{$tanulo->kozoktatasi_intezmeny_szekhelye}}</td>
                                            <td style="vertical-align: left">{{$tanulo->om_azonosito}}</td>
                                            <td style="vertical-align: left">{{$tanulo->ugyviteli_hely}}</td>
                                            <td style="vertical-align: left">{{$tanulo->jogviszony_statusza}}</td>
                                            <td style="vertical-align: left">{{$tanulo->jogviszony_kezdete}}</td>
                                            <td style="vertical-align: left">{{$tanulo->jogviszony_varhato_befejezese}}</td>
                                            <td style="vertical-align: left">{{$tanulo->jogviszony_jellege}}</td>
                                            <td style="vertical-align: left">{{$tanulo->vendegtanulo}}</td>
                                            <td style="vertical-align: left">{{$tanulo->egyeni_munkarend}}</td>
                                            <td style="vertical-align: left">{{$tanulo->ideiglenes_ovodai_ideiglenes_vendegtanuloi_jogviszony}}</td>
                                            <td style="vertical-align: left">{{$tanulo->osztaly}}</td>
                                            <td style="vertical-align: left" class="width: 500px">{{$tanulo->nyitott_szolgaltatasok}}</td>
                                            <td style="vertical-align: left">{{$tanulo->lezart_szolgaltatasok}}</td>
                                            <td style="vertical-align: left">{{$tanulo->a_bm_szemelyiadat_nyilvantartasaban_beazonositott}}</td>
                                            <td style="vertical-align: left">{{$tanulo->utolso_szemelyiadat_es_lakcimnyilvantartas_frissites_idopontja}}</td>
                                            <td style="vertical-align: left">{{$tanulo->created_at}}</td>
                                            <td style="vertical-align: left">{{$tanulo->updated_at}}</td>

                                            <td style="vertical-align: left">{{$tanulo->gondviseloneve}}</td>
                                            <td style="vertical-align: left">{{$tanulo->gondviselotelefonszama}}</td>
                                            <td style="vertical-align: left">{{$tanulo->gondviseloemail}}</td>
                                            <td style="vertical-align: left">{{$tanulo->torvenyeskepviselo}}</td>
                                            <td style="vertical-align: left">{{$tanulo->haziorvosneve}}</td>
                                            <td style="vertical-align: left">{{$tanulo->haziorvostelefon}}</td>
                                            <td style="vertical-align: left">{{$tanulo->covidoltas}}</td>

                                            <td style="vertical-align: left">{{$tanulo->gyermekvedelmikedvezmeny}}</td>
                                            <td style="vertical-align: left">{{$tanulo->gyermekvedelmikedvezmeny_kezdete}}</td>
                                            <td style="vertical-align: left">{{$tanulo->gyermekvedelmikedvezmeny_vege}}</td>
                                            <td style="vertical-align: left">{{$tanulo->hatranyoshelyzetu}}</td>
                                            <td style="vertical-align: left">{{$tanulo->hhkezdete}}</td>
                                            <td style="vertical-align: left">{{$tanulo->hhvege}}</td>
                                            <td style="vertical-align: left">{{$tanulo->halmozottanhatranyoshelyzetu}}</td>
                                            <td style="vertical-align: left">{{$tanulo->hhh_kezdete}}</td>
                                            <td style="vertical-align: left">{{$tanulo->hhh_vege}}</td>
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