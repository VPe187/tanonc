@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header"><i class="fa-btn fa-solid fa-table-columns"></i>KIR törzsadatok importálása</div>
                <div class="card-body">

                         @if (Session::has('message'))
                            <div class="alert alert-success alert-dismissible fade show">
                                <strong>{{ Session::get('message') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                     <p class="text-center"><img src="img/tanonc_logo.png" /></p>
                     <br /> <br />
                     <h4><p>Kérem válassza ki a CSV fájlt, majd kattintson a feltöltés gombra!</p></h4>
                     <br /><br /><br />
                   
                
                <!--<label for="formFileSm" class="form-label">Small file input example</label> -->
                <form action="masterdataimport" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="file" name="file" class="form-control">
                        
                    </div>
                    <button class="btn btn-primary mt-4" type="submit"><i class="fa-btn fa-solid fa-up fa-cloud-arrow-up"></i>Feltöltés</button>
                </form>


                <!-- <input class="form-control form-control-sm" id="formFileSm" type="file" /> -->
               <!-- <label for="formFileLg" class="form-label">Kérem válassza ki a feltölteni kívánt fájlt</label>-->

                    <!-- <input class="form-control form-control-lg" id="formFileLg" type="file" />-->
                    <br /><br />

                    

                   <!-- <p class="btn btn-lg btn-primary shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-upload" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
                            <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z"/>
                        </svg> Feltöltés
                    </p> -->
 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection