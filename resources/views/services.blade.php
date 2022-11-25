@extends('layouts.guest')
@section('content')

<div class="row">

<div class="col-md-4 mt-4">
    <div class="card bg-cover text-below" style="background-image: url(' {{asset('img/imgServices/ASPIRAR.png')}}')" >
    <div class="card-body z-index-2 py-6 pt-10">
        <h3 class="text-white">Limpieza a profundidad</h3>
        <p class="text-white">
            Si así lo consideras, incluye la limpieza de griferías, sanitarios y mamparas en profundidad. 
        </p>
        <a href="#" class="btn btn-lg btn-primary btn bg-gradient-info mt-4 mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"></path>
            </svg>
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
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"></path>
            </svg>
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
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                    <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"></path>
                </svg>
                Agenda  ¡ Ya !
            </a>       
            </div>
            <div class="mask border-radius-lg"  style="background: linear-gradient(45deg,
            rgba(2, 110, 153, 0.7),
            rgba(34, 99, 152, 0.75) 100%);">
            </div>
        </div>
</div>

<div class="col-md-4 mt-4">
    <div class="card bg-cover text-below" style="background-image:  url(' {{asset('img/imgServices/limpieza1.jpg')}}')" >
        <div class="card-body z-index-2 py-6 pt-10">
            <h3 class="text-white">Lavado de ropa</h3>
            <p class="text-white">
                La mejor forma de prevenir este tipo de enfermedades en bebés, niños y adultos, además de tener un buen aseo personal es lavar la ropa con un jabón que elimine la mugre, sudor y manchas que generan bacterias.
            </p>
            <button type="button" class="btn btn-lg btn-primary btn bg-gradient-info mt-4 mb-0">Agenda ¡ Ya !</button>
        </div>
        <div class="mask border-radius-lg"  style="background: linear-gradient(45deg,
        rgba(2, 110, 153, 0.7),
        rgba(34, 99, 152, 0.75) 100%);">
        </div>
    </div>
</div>

<div class="col-md-4 mt-4">
    <div class="card bg-cover text-below" style="background-image: url(' {{asset('img/imgServices/limpieza1.jpg')}}')" >
        <div class="card-body z-index-2 py-6 pt-10">
            <h3 class="text-white">Cuidado de niños</h3>
            <p class="text-white">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fringilla eros at tincidunt auctor. Vestibulum quis purus non dui dignissim sodales. Aliquam </p>
            <button type="button" class="btn btn-lg btn-primary btn bg-gradient-info mt-4 mb-0">Agenda ¡ Ya !</button>
        </div>
        <div class="mask border-radius-lg"  style="background: linear-gradient(45deg,
        rgba(2, 110, 153, 0.7),
        rgba(34, 99, 152, 0.75) 100%);">
        </div>
    </div>
</div>

<div class="col-md-4 mt-4">
    <div class="card bg-cover text-below" style="background-image: url(' {{asset('img/imgServices/limpieza1.jpg')}}')" >
        <div class="card-body z-index-2 py-6 pt-10">
            <h3 class="text-white">Cocina básica</h3>
            <p class="text-white">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fringilla eros at tincidunt auctor. Vestibulum quis purus non dui dignissim sodales.             </p>
            <button type="button" class="btn btn-lg btn-primary btn bg-gradient-info mt-4 mb-0">Agenda ¡ Ya !</button>
        </div>
        <div class="mask border-radius-lg"  style="background: linear-gradient(45deg,
        rgba(2, 110, 153, 0.7),
        rgba(34, 99, 152, 0.75) 100%);">
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
