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
            <a href="{{ route('carta.create') }}">
              <div class="box bg-success text-center">
                  <h3 class="text-white">Crear entrada</h3>
              </div>
            </a>
          </div>
          


      </div>
    
   

  



      </div>
  </div>
@endsection