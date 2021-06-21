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

      
      <div class="container-fluid">
        <div class="row">
            <div>
                <h2>
                    Editar <b>{{$alimentos->nombre}}</b>  
                </h2>
            </div>
        </div>
        <div class="row">
            <div>
                <form action="{{ route('carta.update',$alimentos->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT" />
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="usr">Nombre</label>
                                <input type="text" class="form-control" name="nombre" value="{{ $alimentos->nombre }}" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="usr">descripcion</label>
                                <input type="text" class="form-control" name="descripcion" value="{{ $alimentos->descripcion }}" required>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                          <div class="form-group">
                              <label for="usr">precio</label>
                              <input type="text" class="form-control" name="precio" value="{{ $alimentos->precio }}" required>
                          </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                            <label for="usr">Alimento </label><br>
                            <span>Con mayusculas: Bebida o Alimento</span>
                            <input type="text" placeholder="Con la primera letra en mayuscula pon: Alimento o Bebida" class="form-control" name="categoria" value="{{ $alimentos->categoria }}" required>
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