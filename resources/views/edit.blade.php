@extends('layouts.app')

@section('content')
<div class="container  align-items: center; y justify-content: center ">
<form class="form-group" method="POST" action = "{{action('PayBillsController@update', $pay_bills->id)}}" enctype="multipart/form-data">
@csrf
@method("PUT")
    <div clas="form-group">
        <label for="">Clave Catastral:</label>
        <input type="text" name="clave_catastral" value="{{$pay_bills->clave_catastral}}" class="form-control">
        </div>
<div clas="form-group">
        <label for="">Teléfono:</label>
        <input type="text" name="telefono"  value="{{$pay_bills->telefono}}" class="form-control">
</div>
<div clas="form-group">
        <label for="">Correo:</label>
        <input type="text" name="correo"  value="{{$pay_bills->correo}}" class="form-control">
</div>
</div>
<div class="col text-center">
        <button type="submit" class="btn btn-outline-dark btn-lg">Guardar</button>
        <label for=""></label>
         <label for=""></label>
    	</div>
         </form>
@endsection