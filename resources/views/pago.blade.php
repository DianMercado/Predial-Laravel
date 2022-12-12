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
     <th scope="col">Banco destino</th>
      <th scope="col">Cuenta</th>
      <th scope="col">Clave interbancaria</th>
      <th scope="col">Monto</th>

      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
     <td>BBVA Bancomer</td>
      <td>1024 0689 26</td>
      <td>1293 2689 2647 2589 16</td>
      <td>$496.90</td>
      </tr>
</tr>
    <tr>
    </tr>
  </tbody>
</table>

                </div>
                <a href="/paybills/create" class="btn btn-outline-dark">Subir comprobante</a></td>
                     </div>

        </div>
        
    </div>
   
@endsection