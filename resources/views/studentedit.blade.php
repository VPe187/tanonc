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
                    <h4>Tanuló adatainak karbantartása
                    </h4>
                    
                    <hr />
                    <div class="table-responsive>">
                        <table class="table table-borderless table-warning">
                            <tbody>
                                <tr>
                                    <td class="col-md-8" style="text-align: left">
                                        @foreach($diakok as $tanulo)
                                            <h5><u>{{$tanulo->oktazon}}</u></h5>
                                            <h3>{{$tanulo->viselt_nev_vezeteknev1}} {{$tanulo->viselt_nev_keresztnev2}}</h3>
                                            <h4>{{$tanulo->osztaly}}</h4>
                                        
                                        @endforeach
                                    </td>
                                    <td class="col-md-2" style="text-align: left">
                                            <p><b>Létrehozva:  </b><br>{{$tanulo->created_at}}</p>
                                            <p><b>Módosítva:   </b><br>{{$tanulo->updated_at}}</p>
                                        
                                        
                                    </td>
                                    <td class="col-md-2" style="text-align: right">
                                        
                                            <button type="submit" class="btn btn-sm btn-primary mb-5 mt-4 me-4">
                                                <i class="fa-btn fa-solid fa-floppy-disk"></i>Módosítás
                                            </button>
                                        
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
                                        <tr></tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Tanuló neve</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" value="{{$tanulo->viselt_nev_vezeteknev1}} {{$tanulo->viselt_nev_keresztnev2}}">
                                            </td>
                                            <td class="col-md-3" style="text-align: right"><b>Oktatási azonosító</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control"  value="{{$tanulo->oktazon}}">
                                            </td>
                                        </tr>
                                        <tr class="table-info">
                                            <td style="text-align: left"><b>Név adatok</b></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Név előtag</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_viselt_nev_elotag" value="{{$tanulo->viselt_nev_elotag}} ">
                                            </td>
                                            <td class="col-md-3" style="text-align: right"><b>Név sorrendje</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_viselt_nev_nevsorrend" value="{{$tanulo->viselt_nev_nevsorrend}} ">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Vezetéknév</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_viselt_nev_vezeteknev1" value="{{$tanulo->viselt_nev_vezeteknev1}} ">
                                            </td>
                                            <td class="col-md-3" style="text-align: right"><b>Keresztnév</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_viselt_nev_keresztnev2" value="{{$tanulo->viselt_nev_keresztnev2}}">
                                            </td>
                                        </tr>
                                        <tr class="table-info">
                                            <td style="text-align: left"><b>Születésre vonatkozó adatok<br>{{$tanulo->viselt_nev_vezeteknev1}} {{$tanulo->viselt_nev_keresztnev2}} {{$tanulo->osztaly}}</b></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Születési név előtag</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_szuletesi_nev_elotag" value="{{$tanulo->szuletesi_nev_elotag}} ">
                                            </td>
                                            <td class="col-md-3" style="text-align: right"><b>Születési név sorrendje</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_szuletesi_nev_nevsorrend"  value="{{$tanulo->szuletesi_nev_nevsorrend}}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Születési vezetéknév</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_szuletesi_nev_vezeteknev" value="{{$tanulo->szuletesi_nev_vezeteknev}} ">
                                            </td>
                                            <td class="col-md-3" style="text-align: right"><b>Születési keresztnév</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_szuletesi_nev_keresztnev" value="{{$tanulo->szuletesi_nev_keresztnev}}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Születési dátum</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_szuletesi_datum" value="{{$tanulo->szuletesi_datum}} ">
                                            </td>                                                
                                                <td class="col-md-3" style="text-align: right"><b>Születési hely</b></td>
                                                <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_szuletesi_hely" value="{{$tanulo->szuletesi_hely}}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Születési ország</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_szuletesi_orszag" value="{{$tanulo->szuletesi_orszag}} ">
                                            </td>
                                            <td class="col-md-3" style="text-align: right"><b>Második állampolgárság</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_allampolgarasag_2" value="{{$tanulo->allampolgarasag_2}}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Állampolgárság</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_allampolgarasag_1" value="{{$tanulo->allampolgarasag_1}} ">
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr class="table-info">
                                            <td style="text-align: left"><b>Szülő adatai<br>{{$tanulo->viselt_nev_vezeteknev1}} {{$tanulo->viselt_nev_keresztnev2}} {{$tanulo->osztaly}}</b></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Anyja neve előtag</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_anyja_neve_elotag" value="{{$tanulo->anyja_neve_elotag}} ">
                                            </td>                                                
                                            <td class="col-md-3" style="text-align: right"><b>Anyja neve névsorrend</b></td>
                                                <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_anyja_neve_nevsorrend" value="{{$tanulo->anyja_neve_nevsorrend}}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Anyja vezetékneve</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_anyja_neve_vezeteknev" value="{{$tanulo->anyja_neve_vezeteknev}} ">
                                            </td>
                                            <td class="col-md-3" style="text-align: right"><b>Anyja keresztneve</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_anyja_neve_keresztnev" value="{{$tanulo->anyja_neve_keresztnev}}">
                                            </td>
                                        </tr>
                                                                                
                                        <tr class="table-info">
                                            <td style="text-align: left"><b>Társadalom-biztosítási adatok<br>{{$tanulo->viselt_nev_vezeteknev1}} {{$tanulo->viselt_nev_keresztnev2}} {{$tanulo->osztaly}}</b></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Neme</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control"  name="field_nem" value="{{$tanulo->nem}} ">
                                            </td>                                                
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Társadalombiztosítási azonosító jel</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_tajszam" value="{{$tanulo->tajszam}} ">
                                            </td>
                                            <td class="col-md-3" style="text-align: right"><b>TAJ ellenőrzése</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_taj_ellenorzes" value="{{$tanulo->taj_ellenorzes}}">
                                            </td>
                                        </tr>
                                        <tr class="table-info">
                                            <td style="text-align: left"><b>Állandó lakcím adatok<br>{{$tanulo->viselt_nev_vezeteknev1}} {{$tanulo->viselt_nev_keresztnev2}} {{$tanulo->osztaly}}</b></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Állandó lakcím irányítószáma</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_allando_lakcim_iranyitoszam" value="{{$tanulo->allando_lakcim_iranyitoszam}} ">
                                            </td>                                                
                                            <td class="col-md-3" style="text-align: right"><b>Település</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_allando_lakcim_telepules" value="{{$tanulo->allando_lakcim_telepules}} ">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Közterület</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_allando_lakcim_kozteruletnev" value="{{$tanulo->allando_lakcim_kozteruletnev}} ">
                                            </td>
                                            <td class="col-md-3" style="text-align: right"><b>Közterület jellege</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_allando_lakcim_kozterulet_jelleg" value="{{$tanulo->allando_lakcim_kozterulet_jelleg}}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Házszám</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_allando_lakcim_hazszam" value="{{$tanulo->allando_lakcim_hazszam}} ">
                                            </td>
                                            <td class="col-md-3" style="text-align: right"><b>Állandó lakcím pontosítás</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_allando_lakcim_pontositas" value="{{$tanulo->allando_lakcim_pontositas}}">
                                            </td>
                                        </tr>
                                        <tr class="table-info">
                                            <td style="text-align: left"><b>Tartózkodási hely adatok<br>{{$tanulo->viselt_nev_vezeteknev1}} {{$tanulo->viselt_nev_keresztnev2}} {{$tanulo->osztaly}}</b></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Tartózkodási hely irányítószáma</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_tartozkodasi_cim_iranyitoszam" value="{{$tanulo->tartozkodasi_cim_iranyitoszam}} ">
                                            </td>                                                
                                            <td class="col-md-3" style="text-align: right"><b>Település</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_tartozkodasi_cim_telepules" value="{{$tanulo->tartozkodasi_cim_telepules}} ">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Közterület</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_tartozkodasi_cim_kozteruletnev" value="{{$tanulo->tartozkodasi_cim_kozteruletnev}} ">
                                            </td>
                                            <td class="col-md-3" style="text-align: right"><b>Közterület jellege</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_tartozkodasi_cim_kozterulet_jelleg" value="{{$tanulo->tartozkodasi_cim_kozterulet_jelleg}}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Házszám</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_tartozkodasi_vcim_hazszam" value="{{$tanulo->tartozkodasi_vcim_hazszam}} ">
                                            </td>
                                            <td class="col-md-3" style="text-align: right"><b>Tartózkodási hely pontosítás</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_tartozkodasi_cim_pontositas" value="{{$tanulo->tartozkodasi_cim_pontositas}}">
                                            </td>
                                        </tr>
                                        <tr class="table-info">
                                            <td style="text-align: left"><b>Tankötelezettséghez kapcsolódó adatok<br>{{$tanulo->viselt_nev_vezeteknev1}} {{$tanulo->viselt_nev_keresztnev2}} {{$tanulo->osztaly}}</b></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Adatkezelő intézmény azonosítója</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_adat_kezelo_intezmeny_om_azonositoja" value="{{$tanulo->adat_kezelo_intezmeny_om_azonositoja}} ">
                                            </td>                                                
                                            <td class="col-md-3" style="text-align: right"><b>Adatkezelő intézmény neve</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_adat_kezelo_intezmeny_neve" value="{{$tanulo->adat_kezelo_intezmeny_neve}} ">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Adatkezelő intézmény címe</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_adat_kezelo_intezmeny_cime" value="{{$tanulo->adat_kezelo_intezmeny_cime}} ">
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Közoktatási intézmény azonosítója</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_om_azonosito" value="{{$tanulo->om_azonosito}} ">
                                            </td>                                                
                                            <td class="col-md-3" style="text-align: right"><b>Közoktatási intézmény neve</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_kozoktatasi_intezmeny_neve" value="{{$tanulo->kozoktatasi_intezmeny_neve}} ">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Közoktatási intézmény székhelye</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_kozoktatasi_intezmeny_szekhelye" value="{{$tanulo->kozoktatasi_intezmeny_szekhelye}} ">
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Ügyviteli hely</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_ugyviteli_hely" value="{{$tanulo->ugyviteli_hely}} ">
                                            </td>                                                
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr class="table-info">
                                            <td style="text-align: left"><b>Jogviszonnyal és egyéb státusszal kapcsolatos adatok<br>{{$tanulo->viselt_nev_vezeteknev1}} {{$tanulo->viselt_nev_keresztnev2}} {{$tanulo->osztaly}}</b></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Tankötelezettség vége</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_tankotelezettseg_vege" value="{{$tanulo->tankotelezettseg_vege}} ">
                                            </td>                                                
                                            <td class="col-md-3" style="text-align: right"><b>Diákigazolvány száma</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_ervenyes_diak_igazolvany_szama" value="{{$tanulo->ervenyes_diak_igazolvany_szama}} ">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Sajátos nevelési igényű</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_sajatos_nevelesi_igenyu" value="{{$tanulo->sajatos_nevelesi_igenyu}} ">
                                            </td>                                                
                                            <td class="col-md-3" style="text-align: right"><b>Beilleszkedéssel, tanulási és magatartási nehézséggel küzd</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_beilleszkedessel_tanulasi_magatartasi_nehezseggel_kuzd" value="{{$tanulo->beilleszkedessel_tanulasi_magatartasi_nehezseggel_kuzd}} ">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Tankötelezettséget teljesítő</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_tankotelezettseget_teljesito" value="{{$tanulo->tankotelezettseget_teljesito}} ">
                                            </td>                                                
                                            <td class="col-md-3" style="text-align: right"><b>Jogviszony státusza</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_jogviszony_statusza" value="{{$tanulo->jogviszony_statusza}} ">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Jogviszony kezdete</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_jogviszony_kezdete" value="{{$tanulo->jogviszony_kezdete}} ">
                                            </td>                                                
                                            <td class="col-md-3" style="text-align: right"><b>Jogviszony várható befejezése</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_jogviszony_varhato_befejezese" value="{{$tanulo->jogviszony_varhato_befejezese}} ">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Jogviszony jellege</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_jogviszony_jellege" value="{{$tanulo->jogviszony_jellege}} ">
                                            </td>                                                
                                            <td class="col-md-3" style="text-align: right"><b>Vendégtanuló</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_vendegtanulo" value="{{$tanulo->vendegtanulo}} ">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Egyéni munkarend</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_egyeni_munkarend" value="{{$tanulo->egyeni_munkarend}} ">
                                            </td>                                                
                                            <td class="col-md-3" style="text-align: right"><b>Ideiglenes óvodai, vendégtanulói jogviszony</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_ideiglenes_ovodai_ideiglenes_vendegtanuloi_jogviszony" value="{{$tanulo->ideiglenes_ovodai_ideiglenes_vendegtanuloi_jogviszony}} ">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Osztály</b></td>
                                            <td></td>                                                
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Nyitott szolgáltatások</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_nyitott_szolgaltatasok" value="{{$tanulo->nyitott_szolgaltatasok}} ">
                                            </td>                                                
                                            <td class="col-md-3" style="text-align: right"><b>Lezárt szolgáltatások</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_lezart_szolgaltatasok" value="{{$tanulo->lezart_szolgaltatasok}} ">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: right"><b>Belügyminisztériumi nyilvántartásban beazonosított</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_a_bm_szemelyiadat_nyilvantartasaban_beazonositott" value="{{$tanulo->a_bm_szemelyiadat_nyilvantartasaban_beazonositott}} ">
                                            </td>                                                
                                            <td class="col-md-3" style="text-align: right"><b>Utolsó személyi és lakcímadat frissítés ideje</b></td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_utolso_szemelyiadat_es_lakcimnyilvantartas_frissites_idopontja" value="{{$tanulo->utolso_szemelyiadat_es_lakcimnyilvantartas_frissites_idopontja}} ">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <hr>
                            <div class="table-responsive">
                                <table class="table table-borderless table-sm align-middle">
                                    <tbody>
                                        <tr class="table-warning">
                                            <td style="text-align: left"><b>Családi-gondviselői kiegészítő adatok<br>{{$tanulo->viselt_nev_vezeteknev1}} {{$tanulo->viselt_nev_keresztnev2}} {{$tanulo->osztaly}}</b></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3" style="text-align: left"><b>Gondviselő neve</b></td>
                                            <td class="col-md-3" style="text-align: left"><b>Gondviselő telefonszáma</b></td>
                                            <td class="col-md-3" style="text-align: left"><b>Gondviselő email címe</b></td>
                                            <td class="col-md-3" style="text-align: left"><b>Törvényes képviselő neve</b></td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_gondviseloneve" value="{{$tanulo->familydata->gondviseloneve}} ">
                                            </td> 
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_gondviselotelefonszama" value="{{$tanulo->familydata->gondviselotelefonszama}} ">
                                            </td>                                                
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_gondviseloemail" value="{{$tanulo->familydata->gondviseloemail}} ">
                                            </td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="field_torvenyeskepviselo" value="{{$tanulo->familydata->torvenyeskepviselo}} ">
                                            </td> 
                                        </tr>
                                    </tbody>
                                    
                                </table>
                            </div>
                            <hr>
                            <div class="table-responsive">
                                <table class="table table-borderless table-sm align-middle">
                                    <tbody>
                                        <tr class="table-warning">
                                            <td style="text-align: left"><b>Egészségügyi kiegészítő adatok<br>{{$tanulo->viselt_nev_vezeteknev1}} {{$tanulo->viselt_nev_keresztnev2}} {{$tanulo->osztaly}}</b></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-4" style="text-align: left"><b>Háziorvos neve</b></td>
                                            <td class="col-md-4" style="text-align: left"><b>Háziorvos telefonszáma</b></td>
                                            <td class="col-md-4" style="text-align: left"><b>COVID-19 védőoltás</b></td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-4">
                                                <input type="text" class="form-control" name="field_gondviseloneve" value="{{$tanulo->familydata->haziorvosneve}} ">
                                            </td> 
                                            <td class="col-md-4">
                                                <input type="text" class="form-control" name="field_gondviselotelefonszama" value="{{$tanulo->familydata->haziorvostelefon}} ">                                                </td>                                                
                                            <td class="col-md-4">
                                                <input type="text" class="form-control" name="field_gondviseloemail" value="{{$tanulo->familydata->covidoltas}} ">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <hr>
                            <div class="table-responsive">
                                <table class="table table-borderless table-sm align-middle">
                                    <tbody>
                                        <tr class="table-warning">
                                            <td style="text-align: left"><b>Szociális státuszra vonatkozó kiegészítő adatok<br>{{$tanulo->viselt_nev_vezeteknev1}} {{$tanulo->viselt_nev_keresztnev2}} {{$tanulo->osztaly}}</b></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-4" style="text-align: left"><b>Gyermekvédelmi-kedvezményre jogosult</b></td>
                                            <td class="col-md-4" style="text-align: left"><b>Jogosultság kezdete</b></td>
                                            <td class="col-md-4" style="text-align: left"><b>Jogosultság vége</b></td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-4">
                                                <input type="text" class="form-control" name="field_gyermekvedelmikedvezmeny" value="{{$tanulo->social_status->gyermekvedelmikedvezmeny}} ">
                                            </td> 
                                            <td class="col-md-4">
                                                <input type="text" class="form-control" name="field_gyermekvedelmikedvezmeny_kezdete" value="{{$tanulo->social_status->gyermekvedelmikedvezmeny_kezdete}} ">                                                </td>                                                
                                            <td class="col-md-4">
                                                <input type="text" class="form-control" name="field_gyermekvedelmikedvezmeny_vege" value="{{$tanulo->social_status->gyermekvedelmikedvezmeny_vege}} ">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-4" style="text-align: left"><b>Hátrányos helyzetű</b></td>
                                            <td class="col-md-4" style="text-align: left"><b>Hátrányos helyzet kezdete</b></td>
                                            <td class="col-md-4" style="text-align: left"><b>Hátrányos helyzet vége</b></td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-4">
                                                <input type="text" class="form-control" name="field_gyermekvedelmikedvezmeny" value="{{$tanulo->social_status->hatranyoshelyzetu}} ">
                                            </td> 
                                            <td class="col-md-4">
                                                <input type="text" class="form-control" name="field_gyermekvedelmikedvezmeny_kezdete" value="{{$tanulo->social_status->hhkezdete}} ">                                                </td>                                                
                                            <td class="col-md-4">
                                                <input type="text" class="form-control" name="field_gyermekvedelmikedvezmeny_vege" value="{{$tanulo->social_status->hhvege}} ">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-4" style="text-align: left"><b>Halmozottan hátrányos helyzetű</b></td>
                                            <td class="col-md-4" style="text-align: left"><b>Halmozottan hátrányos helyzet kezdete</b></td>
                                            <td class="col-md-4" style="text-align: left"><b>Halmozottan hátrányos helyzet vége</b></td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-4">
                                                <input type="text" class="form-control" name="field_gyermekvedelmikedvezmeny" value="{{$tanulo->social_status->halmozottanhatranyoshelyzetu}} ">
                                            </td> 
                                            <td class="col-md-4">
                                                <input type="text" class="form-control" name="field_gyermekvedelmikedvezmeny_kezdete" value="{{$tanulo->social_status->hhh_kezdete}} ">                                                </td>                                                
                                            <td class="col-md-4">
                                                <input type="text" class="form-control" name="field_gyermekvedelmikedvezmeny_vege" value="{{$tanulo->social_status->hhh_vege}} ">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <hr>
                            <p style="text-align: right">
                                <button type="submit" class="btn btn-sm btn-primary mb-5 mt-4 me-4">
                                    <i class="fa-btn fa-solid fa-floppy-disk"></i>Módosítás
                                </button>
                            </p>
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