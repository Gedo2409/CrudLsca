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

    


      </div>



      <div class="card">
        <div class="card-body">
            <h5 class="card-title">Empleados registrados</h5>
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Fecha de creacion</th>
                            <th>Eliminar registro</th>
                            <th>Editar registro</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($empleados as $c)
                        <tr>
                            <td>{{ $c->id }}</td>
                            <td>{{ $c->nombre }}</td>
                            <td>{{ $c->telefono }}</td>
                            <td>{{ $c->created_at }}</td>
                            <td> <form action="{{ route('colaboradores.destroy', $c->id) }}" method="POST" class="no-margin">
                              {{ csrf_field() }}
                              <input type="hidden" name="_method" value="DELETE" />
                              <button type="submit" class="btn" style="background-color:transparent"><i class="fas fa-trash-alt fa-2x text-danger"></i></button>
                          </form> </td>
                            <td>  <a href="{{ route('colaboradores.edit', $c->id) }}" data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="fas fa-pencil-alt fa-2x text-warning"></i></a> </td>
                            
                        </tr>
                       
                       
                       
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
  </div>
@endsection