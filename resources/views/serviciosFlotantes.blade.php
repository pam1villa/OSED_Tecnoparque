@extends('layouts.app')

@section('content')
<div class="text-center">
    <h2 style="color:#0078B8">Servicios Agendados OSED</h2>
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


