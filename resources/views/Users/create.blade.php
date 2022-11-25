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
                
                <div class="card-body">
                  <form method="POST" action="{{route('registeruser')}}" role="form">
                    @csrf


                    {{-- <form method="POST" action="/profile">
                   
                      ...
                  </form> --}}


                    <div class="mb-3">
                      <input type="text" class="form-control" placeholder="Nombre Completo" aria-label="name" name="name">
                    </div>
                    <div class="mb-3">
                      <input type="text" class="form-control" placeholder="Cedula" aria-label="id" name="cedula">
                    </div>
                    <div class="mb-3">
                      <input type="email" class="form-control" placeholder="Correo Electronico" aria-label="email" name="email">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Telefono" aria-label="phone" name="phone">
                    </div>
                    
                    <div class="mb-3">
                      <input type="password" class="form-control" placeholder="Contraseña" aria-label="password" name="password">
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe">
                      <label class="form-check-label" for="rememberMe">Acepto los terminos y condiciones</label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-lg btn-primary btn bg-gradient-info w-100 mt-4 mb-0">Registrarme</button>
                    </div>                    
                    <p class="text-sm mt-3 mb-0">¿Ya tienes una cuenta creada? <a href="{{route('login')}}" class="text-info text-gradient font-weight-bold">Ingresar</a></p>
                    <button type="button" class="btn btn-outline-info btn-lg btn-lg w-100 mt-4 mb-0">Continua con Google</button>
                  </form>
                </div>
              
                
              </div>
            </div>
          </div>
        </div>
      <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></main>


</div>


@endsection