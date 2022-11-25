@extends('layouts.app')

@section('content')
<h1 style="color:#0078B8" text-align: center>Vista De Usuario Con Sesión Iniciada OSED</h1>
@yield('content')
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