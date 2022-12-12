
@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Comprobantes de descuentos') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
 @foreach ($discount as $discount)
                    <table class="table">
  <thead>
  
    <tr>
      <th scope="col">#</th>
      <th scope="col">Clave catastral</th>
      <th scope="col">Correo</th>
      <th scope="col">Tipo de tramite</th>

      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$discount->id}}</th>
      <td>{{$discount->clave_catastral}}</td>
      <td>{{$discount->correo}}</td>
      <td>{{$discount->tipo_tramite}}</td>
      <td><a href="/discounts/{{$discount->id}}" class="btn btn-outline-dark">Mostrar</a></td>
      <td><a href="/discounts/delete/{{$discount->id}}" class="btn btn-outline-dark">Eliminar</a></a></td>
      
    </tr>
    <tr>
    </tr>
  </tbody>
  
</table>
@endforeach
                </div>
               
            </div>
            
        </div>
        
    </div>
    
@endsection
