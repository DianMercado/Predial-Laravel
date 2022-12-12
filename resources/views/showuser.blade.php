@extends("layouts.app")
@section('title', 'paybills')
@section('content')
@csrf
<div class="container text-" >
    <a href="/user" class="btn btn-outline-secundary ">Regresar</a>
    </div>

<h5 class="text-center">{{$users->name}}</h5>
<h5 class="text-center">{{$users->email}}</h5>



<div class="text-center">
    <a href="/user/{{$users->id}}/edit" class="btn btn-outline-dark btn-lg">Editar</a>
    <a href="/delete/{{$users->id}}" class="btn btn-outline-dark btn-lg">Eliminar</a>
    
  </div>
  </div>
@endsection