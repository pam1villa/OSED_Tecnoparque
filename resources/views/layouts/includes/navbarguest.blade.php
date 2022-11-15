<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
          <div class="container-fluid">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="{{route('welcome')}}">
              <img class="w-25 border-radius-md" src="{{asset('img/logoOsed.png')}}">
              {{-- OSED  --}}
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="{{route('welcome')}}">
                    <i class="fa fa-home opacity-6 text-dark me-1"></i>
                    Inicio
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="{{route('services')}}">
                    <i class="fa fa-check-circle-o opacity-6 text-dark me-1"></i>
                    Servicios
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="{{route('aboutus')}}">
                    <i class="fas fa-users opacity-6 text-dark me-1"></i>
                    Nuestro Equipo
                  </a>
                </li>
               
              </ul>
              <ul class="navbar-nav d-lg-block d-none">
               @guest
                <li class="nav-item">
                  {{-- Como hacer para que en el href me redirija a login.php --}}
                  <a href="{{route('login')}}" class="btn btn-sm mb-0 me-1 btn-outline-info">Iniciar Sesión</a>
                  <a href="{{route('register')}}" class="btn btn-sm mb-0 me-1 btn bg-gradient-info">Registrarse</a>

                </li>
               @endguest
               @auth
                  <li class="nav-item">
                    <a href="{{route('dashboard')}}" class="btn btn-sm mb-0 me-1 btn-outline-info">Ir a inicio</a>
                  </li>
               @endauth
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
