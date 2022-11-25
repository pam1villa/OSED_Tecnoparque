@extends('layouts.app')

@section('content')
<div class="text-center">
    <h2 style="color:#0078B8">Empleados Registrados OSED</h2>
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
                <p class="text-xs font-weight-bold mb-0">123456789</p>
                {{-- <span class="text-xs text-secondary mb-0"> {{  $user->cedula }} </span> --}}
            </td>

            <td class="align-middle text-center text-sm">
                <span class="text-xs font-weight-bold mb-0"> {{  $user->email }} </span>
            </td>

            <td class="align-middle text-center">
                {{-- <span class="text-secondary text-xs font-weight-bold">{{  $user->phone }}</span> --}}
                <p class="text-xs font-weight-bold mb-0">3245007896</p>
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


{{-- <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            //<a class="btn btn-primary" href="{{ route('Users.index') }}"> Back</a> 
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
//<form action="{{ route('products.store') }}" method="POST"> 
    <form action="{{}}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form> --}}