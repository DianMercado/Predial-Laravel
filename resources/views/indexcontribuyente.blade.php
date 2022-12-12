@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Contribuyentes') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
 @foreach ($contribuyentes as $contribuyentes)
    <table class="table">
  <thead>
  
    <tr>
      <th scope="col">Clave catastral</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido Materno</th>
      <th scope="col">Apellido Paterno</th>

      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{$contribuyentes->clave_catastral}}</td>
      <td>{{$contribuyentes->nombre}}</td>
      <td>{{$contribuyentes->apellido_materno}}</td>
      <td>{{$contribuyentes->apellido_paterno}}</td>
      <td><a href="/contribuyentes/{{$contribuyentes->id}}/edit" class="btn btn-outline-dark">Mostrar</a></td>
    </tr>
  </tbody>
  
</table>
@endforeach
                </div>
            </div>
        </div>
    </div> 
@endsection