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
            <p class="card-category">Crea aqui un nusevo platillo para tu carta</a>
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

      <div class="row">
          
        <div class="card">
            <form class="form-horizontal" action="{{ route('carta.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                    <h4 class="card-title">Información del platillo</h4>
                    <div class="form-group row">
                        <label for="fname"
                            class="col-sm-3 text-end control-label col-form-label">nombre del producto</label>
                        <div class="col-sm-9">
                            <input name="nombre" type="text" class="form-control"  value="{{ old('nombre') }}" 
                                placeholder="nombre">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="cono1"
                            class="col-sm-3 text-end control-label col-form-label">Tipo de alimento</label>
                        <div class="col-sm-9">
                            <input name="categoria"  placeholder="Alimento o Bebida (escriba la primera letra en mayuscula)" type="text" class="form-control"  value="{{ old('categoria') }}">
                        </div>
                    </div>

                    <!--
                    <div class="form-group row">
                        <label class="col-sm-3 text-end control-label col-form-label">Tipo de producto</label>
                        <div class="col-md-9">
                            <select  class="select2 form-select shadow-none"
                                style="width: 100%; height:36px;">
                                
                                <optgroup label="Seleccione una opcion">
                                    <option name="categoria" type="text" class="form-control"  value="{{ old('categoria') }}" >Alimentos</option>
                                    <option name="categoria" type="text" class="form-control"  value="{{ old('categoria') }}" >Bebidas</option>
                                </optgroup>
                             
                            </select>
                        </div>
                    </div>
                -->
                    
                    <div class="form-group row">
                        <label for="cono1"
                            class="col-sm-3 text-end control-label col-form-label">Precio</label>
                        <div class="col-sm-9">
                            <input name="precio" type="text" class="form-control"  value="{{ old('precio') }}" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1"
                            class="col-sm-3 text-end control-label col-form-label">Descripción</label>
                        <div class="col-sm-9">
                            <textarea name="descripcion" type="text" class="form-control"  value="{{ old('descripcion') }}" ></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="payment-adress">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">REGISTRAR Empleado</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>


      </div>

  </div>
@endsection