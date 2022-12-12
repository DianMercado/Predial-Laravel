
@extends('layouts.app')
@section('content')
@if(session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Usuarios') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
  @foreach ($users as $users)
                    <table class="table">
  <thead>
  
    <tr>
      <th scope="col">#</th>

      <th scope="col">Teléfono</th>
      <th scope="col">Correo</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$users->id}}</th>
      <td>{{$users->name}}</td>
      <td>{{$users->email}}</td>
  
      <td><a href="/user/{{$users->id}}/edit" class="btn btn-outline-dark">Mostrar</a></td>
      
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
