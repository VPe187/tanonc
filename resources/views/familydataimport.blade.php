@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header"><i class="fa-btn fa-solid fa-table-columns"></i>Családi adatok importálása</div>
                     <div class="card-body">

                        @if (Session::has('message'))
                            <div class="alert alert-success alert-dismissible fade show">
                                <strong>{{ Session::get('message') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                     <p class="text-center"><img src="img/tanonc_logo.png" class="img-fluid" alt="Responsive image"/></p>
                        </br> </br>
                     <h4><p>Kérem válassza ki a CSV fájlt, majd kattintson a feltöltés gombra!</p></h4>
                        </br></br></br>

                    <form action="familydataimport" method="POST" enctype="multipart/form-data">
                         @csrf
                        <div class="input-group mb-3">
                            <input type="file" name="file" class="form-control">
                            <button class="btn btn-danger" type="reset"><i class="fa-btn fa-solid fa-up fa-trash"></i>Törlés</button>
                        </div>
                        <button class="btn btn-primary mt-4" type="submit"><i class="fa-btn fa-solid fa-up fa-cloud-arrow-up"></i>Feltöltés</button>
                    
                     </form>

                     <!-- <input class="form-control form-control-lg" id="formFileLg" type="file" /> -->
                    </div>              
                </div>
            </div>
        </div>
    </div>
</div>
@endsection