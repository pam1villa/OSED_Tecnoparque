@extends('layouts.app')

@section('content')
{{-- <h1 style="color:#0078B8" text-align: center>Vista De Usuario Con Sesión Iniciada OSED</h1> --}}
@yield('content')

@section('carrusel')
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="page-header min-vh-75 m-3 border-radius-xl" style="background-image: url(' {{asset('img/iniciosesion2.png')}}')">
          <div class="mask"
          style="background: linear-gradient(45deg,
              rgba(2, 110, 153, 0.7),
              rgba(34, 99, 152, 0.75) 100%
            );"
        >
        </div>

          <div class="container">
            <div class="row">
              <div class="col-lg-6 my-auto">
                <h4 class="text-white mb-0 fadeIn1 fadeInBottom">OSED</h4>
                <h1 class="text-white fadeIn2 fadeInBottom">Profesionales en limpieza</h1>
                <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">Wealth creation is an evolutionarily recent positive-sum game. Status is an old zero-sum game. Those attacking wealth creation are often just seeking status.</p>
                <a href="{{route('agendaServices')}}" class="btn btn-lg btn-info btn bg-gradient-info  mt-4 mb-0">Agenda ¡ Ya !</a>
              </div>
            </div>
          </div>
        </div>
      </div>
       <div class="carousel-item">
        <div class="page-header min-vh-75 m-3 border-radius-xl" style="background-image: url(' {{asset('img/iniciosesion2.png')}}')">
          <div class="mask"
          style="background: linear-gradient(45deg,
              rgba(2, 110, 153, 0.7),
              rgba(34, 99, 152, 0.75) 100%
            );"
        >
        </div>

          <div class="container">
            <div class="row">
              <div class="col-lg-6 my-auto">
                <h4 class="text-white mb-0 fadeIn1 fadeInBottom">OSED</h4>
                <h1 class="text-white fadeIn2 fadeInBottom">Desinfección</h1>
                <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">Wealth creation is an evolutionarily recent positive-sum game. Status is an old zero-sum game. Those attacking wealth creation are often just seeking status.</p>
                <button type="button" class="btn btn-lg btn-primary btn bg-gradient-info mt-4 mb-0">Agenda ¡ Ya !</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="page-header min-vh-75 m-3 border-radius-xl" style="background-image: url(' {{asset('img/iniciosesion2.png')}}')">
          <div class="mask"
          style="background: linear-gradient(45deg,
              rgba(2, 110, 153, 0.7),
              rgba(34, 99, 152, 0.75) 100%
            );"
        >
        </div>

          <div class="container">
            <div class="row">
              <div class="col-lg-6 my-auto">
                <h4 class="text-white mb-0 fadeIn1 fadeInBottom">OSED</h4>
                <h1 class="text-white fadeIn2 fadeInBottom">Servicios confiables</h1>
                <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">Wealth creation is an evolutionarily recent positive-sum game. Status is an old zero-sum game. Those attacking wealth creation are often just seeking status.</p>
                <button type="button" class="btn btn-lg btn-primary btn bg-gradient-info mt-4 mb-0">Agenda ¡ Ya !</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="min-vh-75 position-absolute w-100 top-0">
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon position-absolute bottom-50" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon position-absolute bottom-50" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>

    
  </div>

@endsection



@endsection

@section('footer')
<div class="container-fluid py-4">
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
@endsection
































{{--------------------------Pendiente agregar footer------------------------------------
 @section('footer')
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

@endsection --}}