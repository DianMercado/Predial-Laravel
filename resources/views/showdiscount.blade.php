@extends("layouts.app")
@section('title', 'discount')
@section('content')
@csrf
<div class="container text-" >
    <a href="/discounts" class="btn btn-outline-secundary ">Regresar</a>
    </div>
<div class="container  align-items: center; y justify-content: center ">
<img style="height: 300px; width: 300px; background-color: #EFEFEF; margin: 20px;" 
class="card-img mx-auto d-block"
src="/images/{{$discount->archivo_comprobante}}" alt="">
<h5 class="text-center">{{$discount->clave_catastral}}</h5>
<h5 class="text-center">{{$discount->correo}}</h5>
<h5 class="text-center">{{$discount->tipo_tramite}}</h5>

<div class="text-center">
    <a href="/discounts/{{$discount->id}}/edit" class="btn btn-outline-dark btn-lg">Editar</a>
    <a href="/discounts/delete/{{$discount->id}}" class="btn btn-outline-dark btn-lg">Eliminar</a>
    
  </div>
  </div>
@endsection