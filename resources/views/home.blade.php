@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row justify-content-center">
                    <a href="/" class="btn btn-outline-dark btn-lg">Página principal</a>
                    <h2 ></h2>
                    <h2 ></h2>
                    </div>
                    
                    
                </div>
                <div class="row justify-content-center">
                
                <h2 ></h2>
                <h2 ></h2>
                </div>
                <div class="row justify-content-center">
                
                    <form action="/logout" method= "post">
                        @csrf
                        <a href="#" onclick="this.closest('form').submit()">Cerrar sesión</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
