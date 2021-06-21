@extends('backend.layouts.app')
@section('title')
Backend | {{$blogs->titulo}}
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="card-title">{{$blogs->titulo}}</h1>
                                <span><i>Fecha de publicacion {{$blogs->created_at}}</i></span>
                               <p><font face="verdana" size="5">{{$blogs->contenido}}</font> </p>
                              
                               <form action="{{ route('blog.destroy', $blogs->id) }}" method="POST" class="no-margin">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE" />
                                <button type="submit" class="btn" style="background-color:transparent"><i class="fas fa-trash-alt fa-2x text-danger"></i></button>
                                

                               <a href="{{ route('blog.edit', $blogs->id) }}" data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="fas fa-pencil-alt fa-2x text-warning"></i></a>
                              
                            </div>
                           
                        </div>
                    </div>
                </div>
                 </div>
   





      </div>
  </div>
@endsection