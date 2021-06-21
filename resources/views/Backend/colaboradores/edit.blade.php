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
            <h4 class="card-title">Modulo de administración de empleados</h4>
            <p class="card-category">Aqui podrás administrar información sobre tus empleados</a>
            </p>
          </div>
        </div>



      </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-4 col-xlg-3">
          <div class="card card-hover">
            <a href="{{ route('colaboradores.create') }}">
              <div class="box bg-success text-center">
                  <h3 class="text-white">Crear empleado</h3>
              </div>
            </a>
          </div>
          


      </div>
    
      <div class="col-md-6 col-lg-4 col-xlg-3">
        <div class="card card-hover">
          <a href="{{ route('colaboradores.index') }}">
            <div class="box bg-info text-center">
                <h3 class="text-white">Consultar empleado</h3>
            </div>
          </a>
        </div>
    </div>

    




      <div class="container-fluid">
        <div class="row">
            <div>
                <h2>
                    Editar <b>{{$empleados->nombre}}</b>  
                </h2>
            </div>
        </div>
        <div class="row">
            <div>
                <form action="{{ route('colaboradores.update',$empleados->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT" />
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="usr">Nombre</label>
                                <input type="text" class="form-control" name="nombre" value="{{ $empleados->nombre }}" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="usr">telefono</label>
                                <input type="text" class="form-control" name="telefono" value="{{ $empleados->telefono }}" required>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-info px-4"><b>Guardar Cambios</b></button>
                        </div>
                    </div>
                
                </form>
            </div>
        </div>
      </div>



     

      
  </div>
@endsection