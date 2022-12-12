@extends("layouts.app")
@section('title', 'Descarga Create')
@section('content')
<div class="container " >
<form class="form-group" method="GET" action="/indexdescarga" enctype="multipart/form-data">
    @csrf
    <h1 class="col text-left"></h1>
    <h2 class="col text-center">Comprobante digital</h2>
    <h5 class="col text-left"></h5>
    <h5 class="col text-left">Ingresa los siguientes datos</h5>
<div clas="form-group">
        <label for="">Nombre:</label>
        <input type="text" name="nombre" class="form-control"  >
</div>
<div clas="form-group">
        <label for="">Apellido Paterno:</label>
        <input type="text" name="apellido_paterno" class="form-control" >
</div>
<div clas="form-group">
        <label for="">Apellido Materno:</label>
        <input type="text" name="apellido_materno" class="form-control" >
</div>
<div clas="form-group">
        <label for="">Clave Catastral:</label>
        <input type="text" name="clave_catastral" class="form-control" >
</div>

</div>
<div class="col text-center">
        
        <a href="/verdescarga" class="btn btn-outline-dark">Buscar</a>
    	</div>
            </form>
@endsection

