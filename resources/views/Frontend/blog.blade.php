@extends('layouts.app2')
@section('page_title')
Home
@endsection

@section('content')
<body>
    <div class="content">
        <div class="container-fluid">

            
<div class="container-fluid">
           
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">{{$blogs->titulo}}</h1>
                    <span><i>Fecha de publicacion {{$blogs->created_at}}</i></span>
                   <p><font face="verdana" size="5">{{$blogs->contenido}}</font> </p>
                  
                  
                </div>
               
            </div>
        </div>
    </div>
     </div>
    </div>
    </div>


</body>
@endsection
























