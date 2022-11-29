@extends('layouts.app')


@section('content')
{{-- <div class="text-center">
    <h2 style="color:#0078B8">Empleados Registrados OSED</h2>
</div>
<br> --}}
<div class="card shadow-lg  card-profile-bottom">
    <div class="card-body p-3">
      <div class="row gx-4">
        <div class="col-auto">
          
        </div>
        <div class="col-auto my-auto">
          <div class="h-100">
            <h5 class="mb-1">
              Usuarios Registrados
            </h5>
            <p class="mb-0 font-weight-bold text-sm">
              OSED
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
<br>
<div class="card">
    <div class="table-responsive">
      <table class="table align-items-center mb-0">
        <thead>
          <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Cedula</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Telefono</th>
            <th class="text-secondary opacity-7"></th>
            <th class="text-secondary opacity-7"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)  
          <tr>
            <td>
                <div class="d-flex px-2 py-1">
                <div class="d-flex flex-column justify-content-center">
                    <span class="mb-0 text-xs"> {{  $user->name }} </span> 
                </div>
                </div>
            </td>
          
            <td>
                <p class="text-xs font-weight-bold mb-0">CC</p>
                <span class="text-xs text-secondary mb-0"> {{  $user->cedula }} </span> 
            </td>

            <td class="align-middle text-center text-sm">
                <span class="text-xs font-weight-bold mb-0"> {{  $user->email }} </span>
            </td>

            <td class="align-middle text-center">
                 <span class="text-secondary text-xs font-weight-bold">{{  $user->phone }}</span> 
            </td>

            <td class="align-middle">
                <a  href="{{route('editUser', $user->id)}}" class="text-secondary font-weight-bold text-xs" >
                    <i class="fa fa-pencil-square-o"></i>
                </a>
            </td>
            <td class="align-middle">
                <a href="{{route('deleteUser', $user->id)}}" class="text-secondary font-weight-bold text-xs">
                    <i class="fa fa-trash-o"></i>
                </a>
            </td>

          </tr>
          @endforeach
        </tbody>
      </table>
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
