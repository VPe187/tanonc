@extends('layouts.app')

@section('content')

<style type="text/css">



.hm-gradient {
    background-image: linear-gradient(to top, #f3e7e9 0%, #e3eeff 99%, #e3eeff 100%);
}
.darken-grey-text {
    color: #2E2E2E;
}
.input-group.md-form.form-sm.form-2 input {
    border: 1px solid #bdbdbd;
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
}
.input-group.md-form.form-sm.form-2 input.purple-border {
    border: 1px solid #9e9e9e;
}
.input-group.md-form.form-sm.form-2 input[type=text]:focus:not([readonly]).purple-border {
    border: 1px solid #ba68c8;
    box-shadow: none;
}
.form-2 .input-group-addon {
    border: 1px solid #ba68c8;
}
.danger-text {
    color: #ff3547; 
}  


</style>

<body class="hm-gradient">
    
    <main>
        
      
        <div class="container mt-4">

                  
            <div class="card mb-12">
                <div class="card-body">
                <div class="card-header">
                    <i class="fa-btn fa-solid fa-users"></i><b>Résztvevők</b>
                </div>

                    <!--Table-->
                    <div class="table-responsive">
                    <table class="table table-hover" class="table" >
                        <!--Table head-->
                        <thead class="mdb-color darken-3">
                            <tr class="text-black">
                                <th>#</th>
                                <th>NEVEK</th>
                                <th>Tervezés</th>
                                <th>Specifikáció</th>
                                <th>Fejlesztői környezet</th>
                                <th>Frontend</th>
                                <th>Backend</th>
                                <th>Weboldal publikálása</th>
                            </tr>
                        </thead>
                        <!--Table head-->
                        <!--Table body-->
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Varga Péter</td>
                                <td>Igen</td>
                                <td>Igen</td>
                                <td>Igen</td>
                                <td>Igen</td>
                                <td>Igen</td>
                                <td>--</td>

                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Erős József</td>
                                <td>Igen</td>
                                <td>Igen</td>
                                <td>--</td>
                                <td>Igen</td>
                                <td>Igen</td>
                                <td>--</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Lisóczki Mihály</td>
                                <td>Igen</td>
                                <td>Igen</td>
                                <td>--</td>
                                <td>Igen</td>
                                <td>Igen</td>
                                <td>--</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Fekete Miklós</td>
                                <td>Igen</td>
                                <td>--</td>
                                <td>--</td>
                                <td>Igen</td>
                                <td>Igen</td>
                                <td>--</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Apponyi Zsolt</td>
                                <td>--</td>
                                <td>--</td>
                                <td>Igen</td>
                                <td>Igen</td>
                                <td>Igen</td>
                                <td>Igen</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Fazekas Máté</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>Igen</td>
                                <td>Igen</td>
                                <td>--</td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Sándor János</td>
                                <td>--</td>
                                <td>Igen</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Ábrahám Imre</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>Igen</td>
                                <td>--</td>
                                <td>--</td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>Kalakai Zsolt</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>Igen</td>
                                <td>--</td>
                                <td>--</td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>Szilágyi Dániel</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>Igen</td>
                                <td>--</td>
                                <td>--</td>
                            </tr> 
                            <tr>
                                <th scope="row">11</th>
                                <td>Tóth Tímea</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>Igen</td>
                                <td>--</td>
                                <td>--</td>
                            </tr>
                            <tr>
                                <th scope="row">12</th>
                                <td>Hudák Attila</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>Igen</td>
                                <td>--</td>
                                <td>--</td>
                            </tr>
                            <tr>
                                <th scope="row">13</th>
                                <td>Bereczki István</td>
                                <td>Igen</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                            </tr>
                            <tr>
                                <th scope="row">14</th>
                                <td>Borsós-Kovács Norbert</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                            </tr> 
                            <tr>
                                <th scope="row">15</th>
                                <td>Balázs Máté</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                            </tr>
                            <tr>
                                <th scope="row">16</th>
                                <td>Uri Tamás</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                            </tr>
                            <tr>
                                <th scope="row">17</th>
                                <td>Kovács László</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                            </tr>


                        </tbody>
                        <!--Table body-->
                    </table>
</div>
                    <!--Table-->
                </div>
            </div>
          
            <br><br><p class="text-center"><img src="img/TeamPic.png" class="img-fluid" mt-5></p> <br><br>
               
  @endsection