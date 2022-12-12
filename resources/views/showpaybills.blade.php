@extends("layouts.app")
@section('title', 'paybills')
@section('content')
@csrf
<div class="container text-" >
    <a href="/paybills" class="btn btn-outline-secundary ">Regresar</a>
    </div>
<div class="container  align-items: center; y justify-content: center ">
<img style="height: 300px; width: 300px; background-color: #EFEFEF; margin: 20px;" 
class="card-img mx-auto d-block"
src="/images/{{$pay_bills->comprobante_pago_cliente}}" alt="">
<h5 class="text-center">{{$pay_bills->clave_catastral}}</h5>
<h5 class="text-center">{{$pay_bills->telefono}}</h5>
<h5 class="text-center">{{$pay_bills->correo}}</h5>



<div class="text-center">
    <a href="/paybills/{{$pay_bills->id}}/edit" class="btn btn-outline-dark btn-lg">Editar</a>
    <a href="/delete/{{$pay_bills->id}}" class="btn btn-outline-dark btn-lg">Eliminar</a>
    
  </div>
  </div>
@endsection