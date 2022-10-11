@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header"><i class="fa-btn fa-solid fa-table-columns"></i>Családi adatok importálása</div>
                <div class="card-body">
                     <p class="text-center"><img src="img/tanonc_logo.png" /></p>
                     <br /> <br />
                     <h4><p>Kérem válassza ki a feltölteni kívánt csv fájlt, majd kattintson a feltöltés gombra!</p></h4>
                     <br /><br /><br />
                    <!-- <p class="btn btn-lg btn-primary shadow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder-plus" viewBox="0 0 16 16">
  <path d="m.5 3 .04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14H9v-1H2.826a1 1 0 0 1-.995-.91l-.637-7A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09L14.54 8h1.005l.256-2.819A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2zm5.672-1a1 1 0 0 1 .707.293L7.586 3H2.19c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672z"/>
  <path d="M13.5 10a.5.5 0 0 1 .5.5V12h1.5a.5.5 0 1 1 0 1H14v1.5a.5.5 0 1 1-1 0V13h-1.5a.5.5 0 0 1 0-1H13v-1.5a.5.5 0 0 1 .5-.5z"/>
</svg> Tallózás</p> 

                <label for="formFileSm" class="form-label">Small file input example</label>
                <input class="form-control form-control-sm" id="formFileSm" type="file" /> 
                <label for="formFileLg" class="form-label">Kérem válassza ki a feltölteni kívánt fájlt</label>-->

                    <input class="form-control form-control-lg" id="formFileLg" type="file" />
                    <br /><br />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection