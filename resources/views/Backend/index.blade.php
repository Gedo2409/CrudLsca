@extends('backend.layouts.app')
@section('title')
Backend
@endsection
@section('content')





<div class="content">
    <div class="container-fluid">
      <div class="container-fluid">
        <div class="card card-plain">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Panel de administrador</h4>
            <p class="card-category">Aqui podrás realizar diversas tareas para la administración del sistema
             
            </p>
          </div>


         
        </div>
      </div>
    </div>
  </div>





<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">




                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>BIENVIENIDO  {{ Auth::user()->name }}</h1>
              
        </div>
    </div>
   
</div>
@endsection