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
            <div class="box bg-info text-center">
                <h3 class="text-white">Consultar Platillo</h3>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-danger text-center">
                <h3 class="text-white">Eliminar Platillo</h3>
            </div>
        </div>
    </div>



      </div>

      <div class="row">
          
        <div class="card">
            <form class="form-horizontal">
                <div class="card-body">
                    <h4 class="card-title">Personal Info</h4>
                    <div class="form-group row">
                        <label for="fname"
                            class="col-sm-3 text-end control-label col-form-label">First Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="fname"
                                placeholder="First Name Here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Last
                            Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="lname"
                                placeholder="Last Name Here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname"
                            class="col-sm-3 text-end control-label col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="lname"
                                placeholder="Password Here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email1"
                            class="col-sm-3 text-end control-label col-form-label">Company</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="email1"
                                placeholder="Company Name Here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1"
                            class="col-sm-3 text-end control-label col-form-label">Contact No</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="cono1"
                                placeholder="Contact No Here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1"
                            class="col-sm-3 text-end control-label col-form-label">Message</label>
                        <div class="col-sm-9">
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>


      </div>

  </div>
@endsection