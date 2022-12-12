@extends('layouts.app')
@section('content')
<div class="container  align-items: center; y justify-content: center ">
<form class="form-group" method="POST" action = "{{action('DiscountController@update', $discount->id)}}" enctype="multipart/form-data">
@csrf
@method("PUT")
    <div clas="form-group">
        <label for="">Clave Catastral:</label>
        <input type="text" name="clave_catastral" value="{{$discount->clave_catastral}}" class="form-control">
        </div>
    <div clas="form-group">
        <label for="">Correo:</label>
        <input type="text" name="correo"  value="{{$discount->correo}}" class="form-control">
</div>
<div clas="form-group">
        <label for="">Tipo De Trámite:</label>
<select class="form-control" input type="text" name="tipo_tramite" value="{{$discount->tipo_tramite}}">
        <option value="Persona de la Tercera Edad">Persona de la Tercera Edad </option>
        <option value="Mujer Embarazada">Mujer Embarazada </option>
        <option value="Persona con Discapacidad">Persona con Discapacidad </option>
</select>
</div>
<div clas="form-group">
        <label for="">Archivo Comprobante (Para Descuento):</label>
        <input type="file" name="archivo_comprobante" value="{{$discount->archivo_comprobante}}" class="form-control">
</div>

        <button type = "submit" class="btn btn-primary "  >Editar</button>
</form>
</div>
@endsection