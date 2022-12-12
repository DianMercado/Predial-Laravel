@extends("layouts.app")
@section('title', 'contribuyente')
@section('content')
@csrf
<div class="container text-" >
    <a href="/contribuyentes" class="btn btn-outline-secundary ">Regresar</a>
    </div>
<div class="container  align-items: center; y justify-content: center ">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Contribuyente') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido paterno</th>
      <th scope="col">Apellido materno</th>
      <th scope="col">Clave catastral</th>
      <th scope="col">Predio</th>

      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{$contribuyentes->nombre}}</td>
      <td>{{$contribuyentes->apellido_paterno}}</td>
      <td>{{$contribuyentes->apellido_materno}}</td>
      <td>{{$contribuyentes->clave_catastral}}</td>
      <td>Urbano</td>
      </tr>
</tr>
    <tr>
    </tr>
  </tbody>
</table>

                </div>
                <div class="card-body">
   <table class="table">
  <thead>
    <tr>
      <th scope="col">Cuenta</th>
      <th scope="col">Ubicación</th>
      <th scope="col">Zona</th>
      <th scope="col">Terreno (m2)</th>
      <th scope="col">Superficie</th>

      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>00057J</td>
      <td>Camino a tocayos</td>
      <td>4</td>
      <td>292.90</td>
      <td>0.0</td>

      </tr>
</tr>
    <tr>
    </tr>
  </tbody>
</table>
</div><div class="container">
  <h5 class="text-right">Entero: $584.59</h5>
  <h5 class="text-right">Bonificación: $87.69</h5>
  <h5 class="text-right">Total: $496.90</h5>
</div>
              <a href="/contribuyente/pago" class="btn btn-outline-dark">Pagar</a></td>
            </div>

        </div>
        
    </div>
   
@endsection