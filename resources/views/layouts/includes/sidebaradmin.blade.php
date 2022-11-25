<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-5" href="{{route('welcome')}}" target="_blank">
        <img src="{{asset('img/logoOsedSidebar.png')}}" class="logo" alt="main_logo"  >
        {{-- <span class="ms-1 font-weight-bold">OSED</span> --}}
      </a>
    </div>
    <hr class="horizontal dark mt-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link " href="{{route('CrearServicioFlotante')}}">
                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fa fa-check-circle-o text-success text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Nuevo Servicio</span>
            </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{route('serviciosFlotantes')}}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-success text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Servicios Agendados</span>
          </a>
      </li>
      <hr class="horizontal dark mt-3">
        <li class="nav-item">
          <a class="nav-link " href="{{route('indexUser')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Usuarios Registrados</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{route('indexUser')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-users text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Empleados</span>
          </a>
        </li>
        <hr class="horizontal dark mt-3">
        <li class="nav-item">
          <a class="nav-link " href="{{route('profile')}}"> 
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-badge text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Mi Perfil </span>
          </a>
        </li>
      </ul>
      <div class="card card-plain shadow-none" id="sidenavCard">
        <div class="card-body text-center p-3 w-100 pt-0 mt-10">
          <div class="docs-info">
            <br>

            <h6 class="mb-0">¿Necesitas ayuda?</h6>
            <p class="text-xs font-weight-bold mb-0">Apartado de preguntas frecuentes</p>
            <br>
          </div>
          <button type="button" class="btn btn-outline-info btn-sm w-90 mb-5">Ver Documentación</button>

        </div>
      </div>
    </div>

    {{-- <div class="sidenav-footer">
      <div class="card card-plain shadow-none" id="sidenavCard">
        <div class="card-body text-center p-3 w-100 pt-0">
          <div class="docs-info">
            <h6 class="mb-0">¿Necesitas ayuda?</h6>
            <p class="text-xs font-weight-bold mb-0">Apartado de preguntas frecuentes</p>
          </div>
        </div>
      </div>
      <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard" target="_blank" class="btn btn-dark btn-sm w-100 mb-3">Documentation</a>
    </div> --}}
  </aside>





