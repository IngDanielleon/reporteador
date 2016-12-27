@extends('layouts.base')
@section('titulo','portabilidad')
@section('contenido')
<center>
<h1>Entrada al Sistema</h1>
</center>
<br>
<div class="col-sm-4">
</div>
<div class="col-sm-4">
<div id="page-wrapper">
{!! Form::open(['route' => 'login.store', 'method' => 'POST' ]) !!}
<div class="form-group">
{!! Form::label('user', 'Nombre de usuario', ['class' => 'awesome']) !!}
{!! Form::text('user', null, ['class' => 'form-control floating-label', 'placeholder' => 'Usuario']) !!}
</div>

<div class="form-group">
{!! Form::label('password', 'Contraseña', ['class' => 'awesome']) !!}
{!! Form::password('password', ['class'=>'form-control', 'placeholder' => 'Contraseña']) !!}
</div>
{!! Form::submit('Aceptar', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
</div>
</div>
<div class="col-sm-4">
</div>
@stop


    
   