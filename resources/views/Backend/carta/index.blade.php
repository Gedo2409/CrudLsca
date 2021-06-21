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
            <h4 class="card-title">Administracion de carta</h4>
            <p class="card-category">Aqui podrás administrar información sobre alimentos y bebidas</a>
            </p>
          </div>
        </div>



      </div>
    </div>
    <div class="row">

        <div class="col-md-6 col-lg-4 col-xlg-3">
          <div class="card card-hover">
            <a href="{{ route('carta.create') }}">
              <div class="box bg-success text-center">
                  <h3 class="text-white">Crear Platillo</h3>
              </div>
            </a>
          </div>
          


      </div>
    
      <div class="col-md-6 col-lg-4 col-xlg-3">
        <div class="card card-hover">
          <a href="{{ route('carta.index') }}">
            <div class="box bg-info text-center">
                <h3 class="text-white">Consultar Platillo</h3>
            </div>
          </a>
        </div>
    </div>

  



      </div>

      <div class="card">
        <div class="card-body">
            <h5 class="card-title">Platillos registrados</h5>
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nombre</th>
                            <th>categoria</th>
                            <th>Precio</th>
                            <th>Descripción</th>
                            <th>Editar registro</th>
                            <th>Eliminar</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($alimentos as $c)
                        <tr>
                            <td>{{ $c->id }}</td>
                            <td>{{ $c->nombre }}</td>
                            <td>{{ $c->categoria }}</td>
                            <td>{{ $c->precio }}</td>
                            <td>{{ $c->descripcion }}</td>
                            <td> <form action="{{ route('carta.destroy', $c->id) }}" method="POST" class="no-margin">
                              {{ csrf_field() }}
                              <input type="hidden" name="_method" value="DELETE" />
                              <button type="submit" class="btn" style="background-color:transparent"><i class="fas fa-trash-alt fa-2x text-danger"></i></button>
                          </form> </td>
                            <td>  <a href="{{ route('carta.edit', $c->id) }}" data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="fas fa-pencil-alt fa-2x text-warning"></i></a> </td>
                            
                        </tr>
                       
                       
                       
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>





  </div>
@endsection