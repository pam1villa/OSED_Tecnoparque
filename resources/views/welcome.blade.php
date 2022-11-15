@extends('layouts.guest')
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

@section('content')
  <div class="row">
    <div class="text-center">
      <h2 class="text-info">Servicios</h2>
      {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vel elit eget erat rhoncus ornare et in nisi. Aliquam egestas, nulla sit amet dapibus efficitur, felis turpis maximus purus, et sollicitudin nisl augue non turpis.  </p> --}}
    </div>

    <div class="col-md-4 mt-4">
        <div class="card bg-cover text-below" style="background-image: url(' {{asset('img/imgServices/ASPIRAR.png')}}')" >
        <div class="card-body z-index-2 py-6 pt-10">
            <h3 class="text-white">Limpieza a profundidad</h3>
            <p class="text-white">
                Si así lo consideras, incluye la limpieza de griferías, sanitarios y mamparas en profundidad. 
            </p>
            <a href="#" class="btn btn-lg btn-primary btn bg-gradient-info mt-4 mb-0">
                Agenda  ¡ Ya !
            </a>
        </div>
        <div class="mask border-radius-lg"  style="background: linear-gradient(45deg,
              rgba(2, 110, 153, 0.7),
              rgba(34, 99, 152, 0.75) 100%
            );"></div>
        </div>
    </div>

    <div class="col-md-4 mt-4">
        <div class="card bg-cover text-below" style="background-image: url(' {{asset('img/imgServices/planchado2.png')}}')" >
        <div class="card-body z-index-2 py-6 pt-10">
            <h3 class="text-white">Planchado</h3>
            <p class="text-white">
                Planchar la ropa ayuda a matar diferentes bacterias, ácaros y gérmenes que pueden esconderse entre las fibras de la tela. 
            </p>

            <button type="button" class="btn btn-lg btn-primary btn bg-gradient-info mt-4 mb-0">
                Agenda  ¡ Ya !
            </button>

        </div>
        <div class="mask border-radius-lg"  style="background: linear-gradient(45deg,
        rgba(2, 110, 153, 0.7),
        rgba(34, 99, 152, 0.75) 100%
      );"></div>
        </div>
    </div>

    <div class="col-md-4 mt-4">
      <div class="card bg-cover text-below" style="background-image:  url(' {{asset('img/imgServices/desinfectar.jpg')}}')" >
        <div class="card-body z-index-2 py-6 pt-10">
            <h3 class="text-white"> Desinfección</h3>
            <p class="text-white">
                Una desinfección correcta y realizada por expertos puede ayudar a prevenir el contagio de cualquier virus, eliminando el 99%            </p>
            <a href="#" class="btn btn-lg btn-primary btn bg-gradient-info mt-4 mb-0">
                Agenda  ¡ Ya !
            </a>       
          </div>
          <div class="mask border-radius-lg"  style="background: linear-gradient(45deg,
          rgba(2, 110, 153, 0.7),
          rgba(34, 99, 152, 0.75) 100%
        );"></div>
      </div>
    </div>

    <div class="row">
      <div class="text-center">
        <br><br> <br>
        <h2 class="text-info">Nuestro equipo</h2>
        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vel elit eget erat rhoncus ornare et in nisi. Aliquam egestas, nulla sit amet dapibus efficitur, felis turpis maximus purus, et sollicitudin nisl augue non turpis.  </p> --}}
      </div>
      <div class="col-md-4 mt-4">
        <div class="card card-profile mt-md-0 mt-5">
          <a href="javascript:;">
            <div class="p-3">
              <img class="w-100 border-radius-md" src="{{asset('img/imgAboutUs/Perfil1.png')}}">
            </div>
          </a>
          <div class="card-body blur justify-content-center text-center mx-4 mb-4 border-radius-md">
            <h4 class="mb-0">Nora Jimenez</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fringilla eros at tincidunt auctor.</p>
            <div class="row justify-content-center text-center">
            <button type="button" class="btn btn-lg btn-primary btn bg-gradient-info mt-4 mb-0">Agenda ¡ Ya !</button>
    
            </div>
          </div>
        </div>
      </div>
    
      <div class="col-md-4 mt-4">
        <div class="card card-profile mt-md-0 mt-5">
          <a href="javascript:;">
            <div class="p-3">
              <img class="w-100 border-radius-md" src="{{asset('img/imgAboutUs/Perfil2.png')}}">
            </div>
          </a>
          <div class="card-body blur justify-content-center text-center mx-4 mb-4 border-radius-md">
            <h4 class="mb-0">Camilo Gil</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fringilla eros at tincidunt auctor.</p>
            <div class="row justify-content-center text-center">
            <button type="button" class="btn btn-lg btn-primary btn bg-gradient-info mt-4 mb-0">Agenda ¡ Ya !</button>
    
            </div>
          </div>
        </div>
      </div>
    
    
      <div class="col-md-4 mt-4">
        <div class="card card-profile mt-md-0 mt-5">
          <a href="javascript:;">
            <div class="p-3">
              <img class="w-100 border-radius-md" src="{{asset('img/imgAboutUs/Perfil3.png')}}">
            </div>
          </a>
          <div class="card-body blur justify-content-center text-center mx-4 mb-4 border-radius-md">
            <h4 class="mb-0">Tatiana Henao</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fringilla eros at tincidunt auctor.</p>
            <div class="row justify-content-center text-center">
            <button type="button" class="btn btn-lg btn-primary btn bg-gradient-info mt-4 mb-0">Agenda ¡ Ya !</button>
    
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection


@section('footer')

  <footer class="bg-gradient-info text-center text-lg-start text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row my-4">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

          <div class="rounded-circle bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto" style="width: 150px; height: 150px;">
            <img src="{{asset('img/logoOsedSidebar.png')}}" height="100" alt=""
                  loading="lazy" />
          </div>

          <p class="text-center">Ofrecemos servicios de limpieza para empresas y hogares</p>

          <ul class="list-unstyled d-flex flex-row justify-content-center">
            <li>
              <a class="text-white px-2" href="#!">
                <i class="fab fa-facebook-square"></i>
              </a>
            </li>
            <li>
              <a class="text-white px-2" href="#!">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li>
              <a class="text-white ps-2" href="#!">
                <i class="fab fa-youtube"></i>
              </a>
            </li>
          </ul>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase text-white mb-4">Servicios</h5>

          <ul class="list-unstyled">
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-check-circle"></i>  Limpieza para hogares</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-check-circle"></i>  Limpieza para empresa</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-check-circle"></i>  Servicio de Desinfección</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-check-circle"></i>  Cocina</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase text-white mb-4">Ayuda</h5>

          <ul class="list-unstyled">
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-info-circle"></i>  Iniciar Sesión</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-info-circle"></i>  Registrarse</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-info-circle"></i>  Preguntas frecuentes</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase text-white mb-4">Contacto</h5>

          <ul class="list-unstyled">
            <li>
              <p><i class="fas fa-map-marker-alt pe-2"></i>Colombia, Carrera 76, Medellin</p>
            </li>
            <li>
              <p><i class="fas fa-phone pe-2"></i>+ 01 234 567 89</p>
            </li>
            <li>
              <p><i class="fas fa-envelope pe-2 mb-0"></i>contactosed@example.com</p>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      © <script>
        document.write(new Date().getFullYear())
      </script>,
      hecho con <i class="fa fa-heart"></i> por
      <a href="#" class="text-white" target="_blank">Tecnoparque SENA</a>
    </div>
    <!-- Copyright -->
  </footer>

@endsection
    

  




 



    