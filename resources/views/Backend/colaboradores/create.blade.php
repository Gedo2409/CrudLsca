@extends('backend.layouts.app')
@section('title')
Backend
@endsection
@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="container-fluid">
        <div class="card card-plain ">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Modulo de administración de empleados | Crea un nuevo registro </h4>
            <p class="card-category">Aqui podrás administrar información sobre tus empleados</a>
            </p>
          </div>
        </div>



      </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-4 col-xlg-3">
          <div class="card card-hover">
              <div class="box bg-success text-center">
                  <h3 class="text-white">Crear empleado</h3> </a>
              </div>
          </div>
          


      </div>
    
      <div class="col-md-6 col-lg-4 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-info text-center">
                <h3 class="text-white">Consultar empleado</h3>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-danger text-center">
                <h3 class="text-white">Eliminar empleado</h3>
            </div>
        </div>
    </div>



      </div>
      <div class="row">
          
        <div class="card">
            <form class="form-horizontal" action="{{ route('colaboradores.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                    <h4 class="card-title">Personal Info</h4>
                    <div class="form-group row">
                        <label for="fname"
                            class="col-sm-3 text-end control-label col-form-label">Nombre</label>
                        <div class="col-sm-9">
                            <input name="nombre"  class="form-control" value="{{ old('nombre') }}" 
                                placeholder="First Name Here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Telefono</label>
                        <div class="col-sm-9">
                        <input name="telefono"  class="form-control" value="{{ old('telefono') }}" 
                                placeholder="Last Name Here">
                        </div>
                    </div>

                  
                    
                   
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="payment-adress">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">REGISTRAR Empleado</button>
                            </div>
                        </div>
                    </div>
                
            


      </div>
  </div>
@endsection