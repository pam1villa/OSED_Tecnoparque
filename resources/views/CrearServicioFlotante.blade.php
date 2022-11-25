@extends('layouts.app')
   
@section('form-edit')
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
                <h1 class="text-white mb-2 mt-5">¡Agregar Nuevo Servicio!</h1>
                <p class="text-lead text-white">En este formulario podrás agregar nuevos servicios disponibles en el catalogo de OSED</p>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
              <div class="card z-index-0">
                
                {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif --}}

                <div class="card-body">
                  <form  role="form">
                    {{-- mal llamado a la ruta --}}
                    @csrf
                 

                    <div class="mb-3">
                      <input type="text" class="form-control" placeholder="Nombre Servicio" aria-label="name" name="name">
                    </div>
                    <div class="mb-3">
                      <input type="text" class="form-control"  placeholder="Descripción" aria-label="id" name="cedula">
                    </div>
                    <div class="mb-3">
                      <input type="email" class="form-control"  placeholder="Codigo Servicio" aria-label="email" name="email">
                    </div>
                    
                    <div class="text-center">
                        <button type="submit" class="btn btn-lg btn-primary btn bg-gradient-info w-100 mt-4 mb-0">Agregar</button>
                        {{-- <a href="{{route('updateBDUser')}}" class="btn btn-sm mb-0 me-1 btn bg-gradient-info">Actualizar</a> --}}
                    </div>                    
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></main>
</div>

@endsection



{{-- <div class="row">
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
                <h1 class="text-white mb-2 mt-5">¡Editar Tú cuenta!</h1>
                <p class="text-lead text-white">A continuación entrarás a el mundo OSED, donde podrás programar los servicios con los que contamos y nuestros profesionales de limpieza</p>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
              <div class="card z-index-0">
                
                 @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif 

                <div class="card-body">
                  <form method="POST" action="{{route('editUser', $user->id)}}" role="form">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                      <input type="text" class="form-control" value="{{ $user->name }}" placeholder="Nombre Completo" aria-label="name" name="name">
                    </div>
                    <div class="mb-3">
                      <input type="text" class="form-control" value="{{ $user->name }}" placeholder="Cedula" aria-label="id" name="cedula">
                    </div>
                    <div class="mb-3">
                      <input type="email" class="form-control" value="{{ $user->name }}" placeholder="Correo Electronico" aria-label="email" name="email">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" value="{{ $user->name }}" placeholder="Telefono" aria-label="phone" name="phone">
                    </div>
                    
                    <div class="mb-3">
                      <input type="password" class="form-control" value="{{ $user->name }}" placeholder="Contraseña" aria-label="password" name="password">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-lg btn-primary btn bg-gradient-info w-100 mt-4 mb-0">Actualizar</button>
                    </div>                    
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></main>
</div> --}}


