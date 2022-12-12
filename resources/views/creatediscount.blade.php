@extends("layouts.app")
@section('title', 'Discount Create')
@section('content')

<div class="container " >
<form class="form-group" method="POST" action="/discounts" enctype="multipart/form-data">
    @csrf
    <h1 class="col text-left"></h1>
    <h2 class="col text-center">Solicitar descuento</h2>
    <h5 class="col text-left"></h5>
    <h5 class="col text-left">Ingresa los siguientes datos</h5>
    <div clas="form-group">
        <label for="">Clave Catastral:</label>
        <input type="text" name="clave_catastral" class="form-control" >
</div>
<div clas="form-group">
        <label for="">Correo:</label>
        <input type="text" name="correo" class="form-control">
</div>
<div clas="form-group">
        <label for="">Tipo De Trámite:</label>
<select class="form-control" input type="text" name="tipo_tramite">
        <option value="0"> Selecciona </option>
        <option value="Persona de la Tercera Edad">Persona de la Tercera Edad </option>
        <option value="Mujer Embarazada">Mujer Embarazada </option>
        <option value="Persona con Discapacidad">Persona con Discapacidad </option>
</select>

</div>
<div clas="form-group">
        <label for="">Archivo Comprobante (Para Descuento):</label>
        <input type="file" name="archivo_comprobante" class="form-control">
</div>
</div>
<div class="col text-center">
        <button type="submit" class="btn btn-outline-dark btn-lg">Enviar</button>
        <label for=""></label>
         <label for=""></label>
    	</div>
         </form>
         <div  class="col text-top">
      <label for=""></label>
         <label for=""></label>
         <label for=""></label>
         <label for=""></label>
         <label for=""></label>
         <label for=""></label>
        @can('DiscountsIndex')
                <a href="/discounts" class="btn btn-outline-dark btn-block">Ver Registros</a>
        @endcan
</form>

@endsection

