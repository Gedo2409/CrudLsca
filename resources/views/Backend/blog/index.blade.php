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

      <div class="container-fluid">
   
        <div class="row">
          @foreach ($blogs as $c)
          <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$c->titulo}}</h5>
                    <p>Lee el contenido de este post</p>
                </div>
                <center>

                  <a href="{{ route('blog.show', $c->id) }}"> <button type="button" class="btn btn-primary waves-effect waves-light">Más información</button></a>
                   </center> 
            </div>
            
        </div>
        @endforeach

        </div>
      </div>
   

  



      </div>
  </div>
@endsection