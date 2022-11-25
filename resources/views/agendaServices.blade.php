@extends('layouts.guest')

@section('content')

<div class="row">


    <main class="main-content mt-0 ps">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url(' {{asset('img/RegistoOsed.png')}}')">
          <div class="mask"
          style="background: linear-gradient(45deg,
              rgba(2, 110, 153, 0.7),
              rgba(34, 99, 152, 0.75) 100%
            );"
        >
        </div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-5 text-center mx-auto">
                <h1 class="text-white mb-2 mt-5">¡Agenda tu servicio!</h1>
                <p class="text-lead text-white">A continuación entrarás a el mundo OSED, donde programarás los servicios con los que contamos y nuestros profesionales de limpieza</p>
              </div>
            </div>
          </div>
        </div>

        <div class="container-fluid py-4">
            <div class="row">
             
                <div class="card">
                  <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                      <p class="mb-0">Programa tu servicio</p>
                        <button type="button" class=" btn bg-gradient-info btn-sm ms-auto">Continuar</button>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Nombre</label>
                          <input class="form-control" type="text" value="Cristina Restrepo Gonzales">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Correo Electronico</label>
                          <input class="form-control" type="email" value="cisti@gmail.com">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">First name</label>
                          <input class="form-control" type="text" value="Jesse">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Last name</label>
                          <input class="form-control" type="text" value="Lucky">
                        </div>
                      </div>
                    </div>
                    <hr class="horizontal dark">
                    <p class="text-uppercase text-sm">Contact Information</p>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Address</label>
                          <input class="form-control" type="text" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">City</label>
                          <input class="form-control" type="text" value="New York">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Country</label>
                          <input class="form-control" type="text" value="United States">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Postal code</label>
                          <input class="form-control" type="text" value="437300">
                        </div>
                      </div>
                    </div>
                    <hr class="horizontal dark">
                    <p class="text-uppercase text-sm">About me</p>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">About me</label>
                          <input class="form-control" type="text" value="A beautiful Dashboard for Bootstrap 5. It is Free and Open Source.">
                        </div>
                      </div>
                    </div>
                  </div>
               
              </div>
            </div>
            <footer class="footer pt-3  ">
              <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                  <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                      © <script>
                        document.write(new Date().getFullYear())
                      </script>,
                      hecho con <i class="fa fa-heart"></i> por
                      <a href="#" class="font-weight-bold" target="_blank">Tecnoparque SENA</a>

                    </div>
                  </div>
                </div>
              </div>
            </footer>
          </div>





</div>










@endsection