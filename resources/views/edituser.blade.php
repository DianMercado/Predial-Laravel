@extends('layouts.app')

@section('content')
@if(session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif


<div class="container  align-items: center; y justify-content: center ">
<form class="form-group" method="POST" action = "{{action('UserController@update', $users->id)}}" enctype="multipart/form-data">
@csrf
@method("PUT")
    <div clas="form-group">
        <label for="">Nombre:</label>
        <input type="text" name="name" value="{{$users->name}}" class="form-control">
        </div>
<div clas="form-group">
        <label for="">Email:</label>
        <input type="text" name="email"  value="{{$users->email}}" class="form-control">
</div>

<div clas="form-group">
    <h2 class="h5"> </h2>
    <h2 class="h5">Rol</h2>
{!! Form::model($users,['route'=>['user.update', $users], 'method'=>'PUT'])!!}
        @foreach($roles as $role)
        
        <div>
        <label>
            {!! Form::checkbox('roles[]', $role->id, null, ['class'=>'mr-1'])!!}
            {{$role->name}}
        </label>
        </div>
        @endforeach
        {!! Form::submit('Guardar', ['class'=>'btn btn-outline-dark btn-lg'])!!}
{!! Form::close()!!}
    </div>
</div>
         </form>
@endsection