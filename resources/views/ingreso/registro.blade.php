@extends('layouts.base')
@section('titulo','portabilidad')
@section('namepage','Ingresar')
@section('contenido')
<br/>
{!! Form::open(['route' => 'solicitud/nueva', 'method' => 'POST' ,'name'=>'frm','id'=>'frm','data-toggle'=>'validator' ]) !!}

<div class="col-md-3"></div>

<div class="col-md-6">
<div class="col-md-12">
     <div class="form-group">
        {!! Form::label('tipo', 'Tipo de documento', ['class'=>'parrafo-hts ']) !!}
        <div class="">
               {!! Form::select('tipo', [''=>'Seleccione una opción']+config('domains.Tipodocumento'), null, ['required','data-error'=>'Campo requerido','class'=>'form-control']) !!}
        <div class="help-block with-errors">
        </div>
           
        </div>
    </div>
 </div>

 <div class="col-md-12">
  <div class="form-group">
          {!! Form::label('id', 'Afiliado', ['class'=>'parrafo-hts']) !!}
        <div class="">
            <div class="input-group demo2">
            <span class="input-group-addon">
                <i class="fa fa-user">
                </i>
            </span>
               {!! Form::number('id', null, ['required','data-error'=>'Campo requerido','class'=>'form-control']) !!}
            <div class="help-block with-errors">
            </div>
            </div>
        </div>
    </div>
</div>

 <div class="col-md-12">
      <div class="form-group">
       {!! Form::label('fecha', 'Fecha de nacimiento', ['class'=>'parrafo-hts']) !!}
        <div class="">
            <div class="input-group ">
            <span class="input-group-addon">
                <i class="fa fa-calendar">
                </i>
            </span>
               {!! Form::text('fecha', null, ['required','data-error'=>'Campo requerido','class'=>'form-control fecha','id'=>'datemask']) !!}
            <div class="help-block with-errors">
            </div>
            </div>
        </div>
    </div>
</div>
</div>

    <br/>
    <br/>
<div align="center" class="col-md-12">
    {!!Form::submit('Buscar   ', ['class'=>'btn btn-primary']) !!}
          {!!Html::decode(link_to_route('solicitud/regresar','
    <button class="btn btn-warning " type="button">
        Regresar
    </button>
    ',[],['class'=>'']))!!}
</div>
{!! Form::close() !!}
@stop
