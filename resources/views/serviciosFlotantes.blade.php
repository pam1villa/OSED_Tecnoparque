@extends('layouts.app')

@section('content')
<div class="card shadow-lg  card-profile-bottom">
    <div class="card-body p-3">
      <div class="row gx-4">
        <div class="col-auto">
          
        </div>
        <div class="col-auto my-auto">
          <div class="h-100">
            <h5 class="mb-1">
              Servicios Agendados
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
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Titular Del Servicio</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Telefono</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Correo Electronico</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Duracion (HRS)</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Dirección</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Servicio</th>

            <th class="text-secondary opacity-7"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <div class="d-flex px-2 py-1">
                
                <div class="d-flex flex-column justify-content-center">
                  <h6 class="mb-0 text-xs">John Michael</h6>
                  {{-- <p class="text-xs text-secondary mb-0">john@creative-tim.com</p> --}}
                </div>
              </div>
            </td>
            <td>
              <p class="text-xs text-secondary mb-0">3242007356</p>
            </td>
            <td class="align-middle text-center text-sm">
                <p class="text-xs text-secondary mb-0">pvilla@gmail.com</p>
            </td>
            <td class="align-middle text-center">
              <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
            </td>
            <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">4</span>
              </td>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">Cll85ee#90-56</span>
              </td>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">Limpieza Profunda</span>
              </td>
              <td class="align-middle">
                <a  class="text-secondary font-weight-bold text-xs" >
                    <i class="fa fa-pencil-square-o"></i>
                </a>
            </td>
            <td class="align-middle">
                <a  class="text-secondary font-weight-bold text-xs">
                    <i class="fa fa-trash-o"></i>
                </a>
            </td>
          </tr>
  
          <tr>
            <td>
              <div class="d-flex px-2 py-1">
                
                <div class="d-flex flex-column justify-content-center">
                  <h6 class="mb-0 text-xs">John Michael</h6>
                  {{-- <p class="text-xs text-secondary mb-0">john@creative-tim.com</p> --}}
                </div>
              </div>
            </td>
            <td>
              <p class="text-xs text-secondary mb-0">3242007356</p>
            </td>
            <td class="align-middle text-center text-sm">
                <p class="text-xs text-secondary mb-0">pvilla@gmail.com</p>
            </td>
            <td class="align-middle text-center">
              <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
            </td>
            <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">4</span>
              </td>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">Cll85ee#90-56</span>
              </td>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">Limpieza Profunda</span>
              </td>
              <td class="align-middle">
                <a  class="text-secondary font-weight-bold text-xs" >
                    <i class="fa fa-pencil-square-o"></i>
                </a>
            </td>
            <td class="align-middle">
                <a  class="text-secondary font-weight-bold text-xs">
                    <i class="fa fa-trash-o"></i>
                </a>
            </td>
          </tr>

          <tr>
            <td>
              <div class="d-flex px-2 py-1">
                
                <div class="d-flex flex-column justify-content-center">
                  <h6 class="mb-0 text-xs">John Michael</h6>
                  {{-- <p class="text-xs text-secondary mb-0">john@creative-tim.com</p> --}}
                </div>
              </div>
            </td>
            <td>
              <p class="text-xs text-secondary mb-0">3242007356</p>
            </td>
            <td class="align-middle text-center text-sm">
                <p class="text-xs text-secondary mb-0">pvilla@gmail.com</p>
            </td>
            <td class="align-middle text-center">
              <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
            </td>
            <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">4</span>
              </td>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">Cll85ee#90-56</span>
              </td>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">Limpieza Profunda</span>
              </td>
              <td class="align-middle">
                <a  class="text-secondary font-weight-bold text-xs" >
                    <i class="fa fa-pencil-square-o"></i>
                </a>
            </td>
            <td class="align-middle">
                <a  class="text-secondary font-weight-bold text-xs">
                    <i class="fa fa-trash-o"></i>
                </a>
            </td>
          </tr>

          <tr>
            <td>
              <div class="d-flex px-2 py-1">
                
                <div class="d-flex flex-column justify-content-center">
                  <h6 class="mb-0 text-xs">John Michael</h6>
                  {{-- <p class="text-xs text-secondary mb-0">john@creative-tim.com</p> --}}
                </div>
              </div>
            </td>
            <td>
              <p class="text-xs text-secondary mb-0">3242007356</p>
            </td>
            <td class="align-middle text-center text-sm">
                <p class="text-xs text-secondary mb-0">pvilla@gmail.com</p>
            </td>
            <td class="align-middle text-center">
              <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
            </td>
            <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">4</span>
              </td>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">Cll85ee#90-56</span>
              </td>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">Limpieza Profunda</span>
              </td>
              <td class="align-middle">
                <a  class="text-secondary font-weight-bold text-xs" >
                    <i class="fa fa-pencil-square-o"></i>
                </a>
            </td>
            <td class="align-middle">
                <a  class="text-secondary font-weight-bold text-xs">
                    <i class="fa fa-trash-o"></i>
                </a>
            </td>
          </tr>

          <tr>
            <td>
              <div class="d-flex px-2 py-1">
                
                <div class="d-flex flex-column justify-content-center">
                  <h6 class="mb-0 text-xs">John Michael</h6>
                  {{-- <p class="text-xs text-secondary mb-0">john@creative-tim.com</p> --}}
                </div>
              </div>
            </td>
            <td>
              <p class="text-xs text-secondary mb-0">3242007356</p>
            </td>
            <td class="align-middle text-center text-sm">
                <p class="text-xs text-secondary mb-0">pvilla@gmail.com</p>
            </td>
            <td class="align-middle text-center">
              <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
            </td>
            <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">4</span>
              </td>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">Cll85ee#90-56</span>
              </td>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">Limpieza Profunda</span>
              </td>
              <td class="align-middle">
                <a  class="text-secondary font-weight-bold text-xs" >
                    <i class="fa fa-pencil-square-o"></i>
                </a>
            </td>
            <td class="align-middle">
                <a  class="text-secondary font-weight-bold text-xs">
                    <i class="fa fa-trash-o"></i>
                </a>
            </td>
          </tr>

          <tr>
            <td>
              <div class="d-flex px-2 py-1">
                
                <div class="d-flex flex-column justify-content-center">
                  <h6 class="mb-0 text-xs">John Michael</h6>
                  {{-- <p class="text-xs text-secondary mb-0">john@creative-tim.com</p> --}}
                </div>
              </div>
            </td>
            <td>
              <p class="text-xs text-secondary mb-0">3242007356</p>
            </td>
            <td class="align-middle text-center text-sm">
                <p class="text-xs text-secondary mb-0">pvilla@gmail.com</p>
            </td>
            <td class="align-middle text-center">
              <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
            </td>
            <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">4</span>
              </td>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">Cll85ee#90-56</span>
              </td>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">Limpieza Profunda</span>
              </td>
              <td class="align-middle">
                <a  class="text-secondary font-weight-bold text-xs" >
                    <i class="fa fa-pencil-square-o"></i>
                </a>
            </td>
            <td class="align-middle">
                <a  class="text-secondary font-weight-bold text-xs">
                    <i class="fa fa-trash-o"></i>
                </a>
            </td>
          </tr>

          <tr>
            <td>
              <div class="d-flex px-2 py-1">
                
                <div class="d-flex flex-column justify-content-center">
                  <h6 class="mb-0 text-xs">John Michael</h6>
                  {{-- <p class="text-xs text-secondary mb-0">john@creative-tim.com</p> --}}
                </div>
              </div>
            </td>
            <td>
              <p class="text-xs text-secondary mb-0">3242007356</p>
            </td>
            <td class="align-middle text-center text-sm">
                <p class="text-xs text-secondary mb-0">pvilla@gmail.com</p>
            </td>
            <td class="align-middle text-center">
              <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
            </td>
            <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">4</span>
              </td>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">Cll85ee#90-56</span>
              </td>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">Limpieza Profunda</span>
              </td>
              <td class="align-middle">
                <a  class="text-secondary font-weight-bold text-xs" >
                    <i class="fa fa-pencil-square-o"></i>
                </a>
            </td>
            <td class="align-middle">
                <a  class="text-secondary font-weight-bold text-xs">
                    <i class="fa fa-trash-o"></i>
                </a>
            </td>
          </tr>

          <tr>
            <td>
              <div class="d-flex px-2 py-1">
                
                <div class="d-flex flex-column justify-content-center">
                  <h6 class="mb-0 text-xs">John Michael</h6>
                  {{-- <p class="text-xs text-secondary mb-0">john@creative-tim.com</p> --}}
                </div>
              </div>
            </td>
            <td>
              <p class="text-xs text-secondary mb-0">3242007356</p>
            </td>
            <td class="align-middle text-center text-sm">
                <p class="text-xs text-secondary mb-0">pvilla@gmail.com</p>
            </td>
            <td class="align-middle text-center">
              <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
            </td>
            <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">4</span>
              </td>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">Cll85ee#90-56</span>
              </td>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">Limpieza Profunda</span>
              </td>
              <td class="align-middle">
                <a  class="text-secondary font-weight-bold text-xs" >
                    <i class="fa fa-pencil-square-o"></i>
                </a>
            </td>
            <td class="align-middle">
                <a  class="text-secondary font-weight-bold text-xs">
                    <i class="fa fa-trash-o"></i>
                </a>
            </td>
          </tr>

         
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


