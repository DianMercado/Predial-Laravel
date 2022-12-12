@extends("layouts.app")
@section('title', 'VerDescarga')
@section('content')
@csrf
<div class="container text-center" >
    <h3></h3>
    <h3></h3>
    <h3></h3>
    <h3>Si no tiene la opcion de descargar su comprobante disponible espere un lapso de 24 a 48 horas habiles o comuniquese al departamento de catastro  Tel. 935-00-88  </h3>
    @can('GenerarPdf')
    <h3>Da Clic Para Descargar</h3>
    <a href="{{route('descargarPDFDiscount')}}" class="btn btn-outline-dark" >Descargar PDF</a>
    @endcan
    
    </div>
@endsection

