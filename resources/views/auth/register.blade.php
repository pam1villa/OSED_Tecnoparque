@extends('layouts.guest')

@section('content')

<div class="row">


    <main class="main-content mt-0 ps">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url(' {{asset('img/register1.png')}}')">
          <span class="mask bg-gradient-dark opacity-6"></span>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-5 text-center mx-auto">
                <h1 class="text-white mb-2 mt-5">¡Crea tu cuenta!</h1>
                <p class="text-lead text-white">A continuación entrarás a el mundo OSED, donde podrás programar los servicios con los que contamos y nuestros profesionales de limpieza</p>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
              <div class="card z-index-0">
                <div class="card-header text-center pt-4">
                  <button type="button" class="btn btn-outline-primary btn-lg w-100 mt-4 mb-0">Continua con Google</button>

                </div>
                <div class="row px-xl-5 px-sm-4 px-3">       
                  <div class="mt-2 position-relative text-center">
                    <p class="text-sm font-weight-bold mb-2 text-secondary text-border d-inline z-index-2 bg-white px-3">
                      o registrate con:
                    </p>
                  </div>
                </div>

                <div class="card-body">
                  <form role="form">
                    <div class="mb-3">
                      <input type="text" class="form-control" placeholder="Nombre" aria-label="name">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Telefono" aria-label="phone">
                    </div>
                    <div class="mb-3">
                      <input type="email" class="form-control" placeholder="Correo Electronico" aria-label="email">
                    </div>
                    <div class="mb-3">
                      <input type="password" class="form-control" placeholder="Contraseña" aria-label="password">
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Registrarme</button>
                    </div>                    
                    <p class="text-sm mt-3 mb-0">¿Ya tienes una cuenta creada? <a href="{{route('login')}}" class="text-dark font-weight-bolder">Ingresar</a></p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></main>


</div>




@endsection