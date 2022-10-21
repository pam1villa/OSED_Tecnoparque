@extends('layouts.guest')

@section('content')

<div class="row">
    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
      <div class="card card-plain">
        <div class="card-header pb-0 text-start">
          <h1 class="font-weight-bolder">Iniciar Sesión</h1>
          
          <h5>Ingresa a el mundo de la limpieza </h5>
          <button type="button" class="btn btn-outline-primary btn-lg w-100 mt-4 mb-0">Continua con Google</button>

          </div>

        <div class="card-body">
              
          <form role="form">
            <div class="mb-3">
              <input type="email" class="form-control form-control-lg" placeholder="Correo Electronico" aria-label="Email">
            </div>
            <div class="mb-3">
              <input type="email" class="form-control form-control-lg" placeholder="Contraseña" aria-label="Password">
            </div>
            {{-- <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" id="rememberMe">
              <label class="form-check-label" for="rememberMe">Remember me</label>
            </div> --}}
            <div class="text-center">
              <button type="button" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Ingresar</button>
            </div>
          </form>
        </div>
        <div class="card-footer text-center pt-0 px-lg-2 px-1">
          <p class="mb-4 text-sm mx-auto">
            ¿Aún no tiene una cuenta en OSED?
            <a href="{{route('register')}}" class="text-primary text-gradient font-weight-bold">Registrarme</a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
      <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url(' {{asset('img/iniciosesion2.png')}}')";
  background-size: cover;">
        <span class="mask bg-gradient-primary opacity-6"></span>
        <h4 class="mt-5 text-white font-weight-bolder position-relative">Profesionales en nuestra pasión</h4>
        <p class="text-white position-relative">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fringilla eros at tincidunt auctor. Vestibulum quis purus non dui dignissim sodales. Aliquam sit amet mi mi. Nunc sed urna at nunc sagittis porta. </p>
      </div>
    </div>
  </div>


    
@endsection