@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8 ">
    <div class="card card-profile text-center" >
      <div class="row justify-content-center">
        <div class="col-4 col-lg-4 order-lg-2">
          <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
            {{-- <a href="javascript:;"> --}}
              <img src="{{asset('img/user.png')}}" class="rounded-circle img-fluid border border-2 border-white">
            </a>
          </div>
        </div>
      </div>
      <div class="card-body pt-0">
        <div class="text-center mt-2">
          <h5>
            Pamela Restrepo<span class="font-weight-light">, 20</span>
          </h5>
          <div class="h6 font-weight-300">
            <i class="ni location_pin mr-2"></i>Medellín, Antioquia
          </div>
          <div class="h6 mt-4">
            <i class="ni business_briefcase-24 mr-2"></i>Perfil
          </div>
          <div>
            <i class="ni education_hat mr-2"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris gravida sollicitudin augue ut egestas. Mauris a auctor felis. Suspendisse non metus eget purus egestas tempor. Aliquam aliquam gravida facilisis. Fusce volutpat cursus massa non rutrum. Maecenas et aliquet est. Sed et justo risus. Sed sit amet odio varius arcu tempus placerat vitae quis tellus. Sed ut felis id ipsum auctor pretium.
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="d-flex justify-content-center">
            <div class="d-grid text-center">
              <span class="text-lg font-weight-bolder">22</span>
              <span class="text-sm opacity-8">Servicios</span>
            </div>
            <div class="d-grid text-center mx-4">
              <span class="text-lg font-weight-bolder">10</span>
              <span class="text-sm opacity-8">Especialidad</span>
            </div>
            <div class="d-grid text-center">
              <span class="text-lg font-weight-bolder">5</span>
              <span class="text-sm opacity-8">Experiencia</span>
            </div>
          </div>
          <br>
          <a href="javascript:;" class="btn bg-gradient-info btn-sm ms-auto">Editar Info</a>
          <a href="javascript:;" class="btn bg-gradient-warning btn-sm ms-auto">Borrar Perfil</a>
          <br>
        </div>
      </div>

    </div>
  </div>
</div>



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
