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
                  <h4 class="card-title">Un poquito de nosotros</h4>
                  <p class="card-category">Ven y prueba nuestra amplia variedad de productos</a>
                  </p>
                </div>
              </div>
    <br>
    @foreach($blogs as $p)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{ $p->titulo }}</h5>
       
          
          
          <hr>
          <span> Fecha de creacion${{ $p->created_at }}</span>
          <center>
            <div class="row  text-right">
                <div class="col-lg-12">
                  <a class="post-modern-link" href="{{ route('front.blog',$p->id) }}">Leer más</a>
                </div>
              </div>

            
             </center>        
        </div>
      </div> 
      @endforeach   
    <br>
    </div>
    </div>


</body>
@endsection