@extends('layouts.base')
@section('titulo','portabilidad')
@section('namepage','Ingresar')
@section('contenido')
<br/>
{!! Form::open(['route' => 'solicitudes.store', 'method' => 'POST' ,'name'=>'frm','id'=>'frm','data-toggle'=>'validator' ]) !!}
<div class="col-md-5">
    <div class="form-group">
        {!! Form::label('', 'Seleccione tipo de usuario que desea realizar el ingreso de traslado:', ['class'=>'parrafo-hts']) !!}
        <div class="">
                <br/>
                @foreach(config('domains.Tipousuario') as $data)
                <input class="flat-red" required name="tipo" type="radio"/>
                {!! Form::label('',$data, ['class'=>'texto-hts']) !!}
                <br/>
                @endforeach
                <div class="help-block with-errors">
                </div>
        </div>
    </div>
</div>

<div class="col-md-7">
     <div class="form-group">
        {!! Form::label('', 'Tipo de documento', ['class'=>'parrafo-hts ']) !!}
        <div class="">
               {!! Form::select('', [''=>'Seleccione una opción']+config('domains.Tipousuario'), null, ['required','data-error'=>'Campo requerido','class'=>'form-control']) !!}
        <div class="help-block with-errors">
        </div>
           
        </div>
    </div>
 </div>

 <div class="col-md-7">
  <div class="form-group">
          {!! Form::label('', 'Afiliado', ['class'=>'parrafo-hts']) !!}
        <div class="">
            <div class="input-group demo2">
            <span class="input-group-addon">
                <i class="fa fa-user">
                </i>
            </span>
               {!! Form::text('', null, ['required','data-error'=>'Campo requerido','class'=>'form-control']) !!}
            <div class="help-block with-errors">
            </div>
            </div>
        </div>
    </div>
</div>

 <div class="col-md-7">
      <div class="form-group">
       {!! Form::label('', 'Fecha de nacimiento', ['class'=>'parrafo-hts']) !!}
        <div class="">
            <div class="input-group ">
            <span class="input-group-addon">
                <i class="fa fa-calendar">
                </i>
            </span>
               {!! Form::text('', null, ['required','data-error'=>'Campo requerido','class'=>'form-control fecha','id'=>'datemask']) !!}
            <div class="help-block with-errors">
            </div>
            </div>
        </div>
    </div>
</div>
</div>

    <br/>
    <br/>
</div>
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
