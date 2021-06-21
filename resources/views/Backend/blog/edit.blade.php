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
      
    
    
    




      <div class="container-fluid">
        <div class="row">
            <div>
                <h2>
                    Editar <b>{{$blogs->nombre}}</b>  
                </h2>
            </div>
        </div>
        <div class="row">
            <div>
                <form action="{{ route('blog.update',$blogs->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT" />
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="usr">Titulo</label>
                                <input type="text" class="form-control" name="titulo" value="{{ $blogs->titulo }}" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="usr">Contenido</label>
                                <input type="text" class="form-control" name="contenido" value="{{ $blogs->contenido }}" required>
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