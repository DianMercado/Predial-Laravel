
@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Comprobantes de pago') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
  @foreach ($pay_bills as $pay_bills)
                    <table class="table">
  <thead>
  
    <tr>
      <th scope="col">#</th>
      <th scope="col">Clave catastral</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Correo</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$pay_bills->id}}</th>
      <td>{{$pay_bills->clave_catastral}}</td>
      <td>{{$pay_bills->telefono}}</td>
      <td>{{$pay_bills->correo}}</td>
      <td><a href="/paybills/{{$pay_bills->id}}" class="btn btn-outline-dark">Mostrar</a></td>
      <td><a href="/delete/{{$pay_bills->id}}" class="btn btn-outline-dark">Eliminar</a></a></td>
      
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
