@extends('layouts.base')
@section('titulo','portabilidad')
@section('contenido')
<center>
<h1>Filtros de Busqueda</h1>
</center>
<br>
<div class="col-md-12">

<div class="col-sm-3">
</div>

<div class="col-sm-3">
{!! Form::open(['route' => 'filtros.store', 'method' => 'POST', 'class'=>'form-horizontal'])!!}
  <div class="form-group">
  {!! Form::label('fecha_inicio', 'Fecha Inicio:', []) !!}

  <div class="input-group date">
    <div class="input-group-addon">
      <i class="fa fa-calendar"></i>
    </div>
    {!! Form::text('fecha_inicial', null, ['required','class'=>'datepicker form-control pull-right']) !!}
  </div>
  <!-- /.input group -->
</div>
<div class="form-group">
  {!! Form::label('fecha_inicio', 'Fecha Fin:', []) !!}

  <div class="input-group date">
    <div class="input-group-addon">
      <i class="fa fa-calendar"></i>
    </div>
    {!! Form::text('fecha_final', null, ['required','class'=>'datepicker form-control pull-right']) !!}
  </div>
  <!-- /.input group -->
</div>
<div class="form-group">
        {!! Form::label('estado', 'Estado Solicitud: ')!!}
        <br>
        {!! Form::select('estado', [''=>'seleccione una opción']+config('domains.Estadosolicitud'), null, ['class'=>'form-control pull-right'])!!}
</div><br><br>
  
</div>

<div class="col-sm-3">
<div class="form-group">
        {!! Form::label('departamento', 'Departamento: ')!!}
        <br>
        {!! Form::select('departamento',[''=>'seleccione una opción']+$departamentos, null, ['required', 'id'=>'departamento' , 'class'=>'form-control pull-right'])!!}
</div><br><br>
<div class="form-group">
        {!! Form::label('municipio', 'Municipio: ')!!}
        <br>
        {!! Form::select('municipio', [''=>'seleccione una opción'], null, ['id'=>'municipio' ,'class'=>'form-control pull-right'])!!}
</div><br><br><br>
<div class="form-group">
    <div class="col-lg-offset-4 col-lg-10">
      <button type="submit" class="btn btn-primary">Buscar</button>
    </div>
  </div>

{!! Form::close()!!}
</div>

<div class="col-sm-3">
</div>

</div>


@stop









