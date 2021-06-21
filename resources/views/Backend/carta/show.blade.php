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
            <p class="card-category">Aqui se muestran todos los registros de la carta</a>
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
      
  </div>
@endsection