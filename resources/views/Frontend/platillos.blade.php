@extends('layouts.app2')
@section('page_title')
Home
@endsection

@section('content')
<body>
    <div class="content">
        <div class="container-fluid">

            <div class="card card-plain ">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Nuestros platillos</h4>
                  <p class="card-category">Ven y prueba nuestra amplia variedad de productos</a>
                  </p>
                </div>
              </div>
    <br>
    @foreach($alimentos as $p)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{ $p->nombre }}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{ $p->id }}</h6>
          <p class="card-text">{{ $p->descripcion }}</p>
          <span>{{ $p->categoria }}</span><br>
          <hr>
          <span>${{ $p->precio }}</span>
     
        </div>
      </div> 
      @endforeach   
    <br>
    </div>
    </div>


</body>
@endsection