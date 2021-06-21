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
            <h4 class="card-title">Entradas del blog</h4>
            <p class="card-category">Aqui podrás administrar información sobre alimentos y bebidas</a>
            </p>
          </div>
        </div>



      </div>
    </div>
    <div class="row">

        <div class="col-md-6 col-lg-4 col-xlg-3">
          <div class="card card-hover">
            <a href="{{ route('blog.create') }}">
              <div class="box bg-success text-center">
                  <h3 class="text-white">Crear entrada</h3>
              </div>
            </a>
          </div>
          


      </div>
        
      
  



      </div>
      <div class="card">
        <form class="form-horizontal" action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card-body">
                <h4 class="card-title">Entrada para el blog</h4>
                <div class="form-group row">
                    <label for="fname"
                        class="col-sm-3 text-end control-label col-form-label">Titulo</label>
                    <div class="col-sm-9">
                        <input type="text" name="titulo" class="form-control" value="{{ old('titulo') }}" 
                            placeholder="First Name Here">
                    </div>
                </div>
              
                <div class="form-group row">
                    <label for="cono1"
                        class="col-sm-3 text-end control-label col-form-label">Contenido</label>
                    <div class="col-sm-9">
                        <textarea  class="form-control" name="contenido" value="{{ old('contenido') }}" rows="5"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="payment-adress">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">REGISTRAR entrada</button>
                    </div>
                </div>
            </div>
        </form>
    </div>






  </div>
@endsection


















