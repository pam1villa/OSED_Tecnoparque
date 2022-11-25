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
                      <p class="mb-0"> ¿Es correcto a quien es el titular del servicio? </p>
                        <button type="button" class=" btn bg-gradient-info btn-sm ms-auto">Continuar</button>
                    </div>
                  </div>
                  <div class="card-body">
                    <form method="POST" action="{{route('agendaServices')}}" role="form">
                      @csrf
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Nombre</label>
                          <input class="form-control" type="text" placeholder="Pendiente conectar esto con el nombre del usuario logueado"  aria-label="name" name="name">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Telefono</label>
                          <input class="form-control" type="tel" value="40-(770)-888-444" id="example-tel-input" name="name">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Correo Electronico</label>
                          <input class="form-control" type="email" placeholder="correo_@gmail.com">
                        </div>
                      </div>
                    </div>
                    <hr class="horizontal dark">
                    <p class="mb-0">¡Ingresa/Completa los siguientes datos para agendar tu servicio OSED!</p>
                    <br>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleFormControlSelect1">Selecciona el servicio:</label>
                            <select class="form-control" id="exampleFormControlSelect1" value="..." name="services" >
                                <option>Limpieza a profundidad</option>
                                <option>Desinfección</option>
                                <option>Lavado de ropa</option>
                                <option>Desinfección</option>
                            </select>
                          {{-- <label for="example-text-input" class="form-control-label">Selecciona el servicio:</label>
                          <input class="form-control" type="text" placeholder="servicio" aria-label="services" name="services"> --}}
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Duración del servicio (en horas)</label>
                          <input class="form-control" type="time" value="10:30:00" id="example-time-input" name="services">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Dirección donde se prestará el servicio:</label>
                          <input class="form-control" type="text" value="cra 54 #34-56" name="services">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Fecha del servicio:</label>
                          <input class="form-control" type="date" value="2018-11-23" id="example-date-input" name="services">
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
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