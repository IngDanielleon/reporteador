@extends('layouts.base')
@section('titulo','portabilidad')
@section('namepage','Entrada al sistema')
@section('contenido')
{!! Form::open(['route' => 'login.store', 'method' => 'POST' ]) !!}
<div class="col-sm-4">
</div>
<div class="col-sm-4">
    <div id="page-wrapper">
        
        <div class="form-group">
            {!! Form::label('user', 'Nombre de usuario', ['class' => '']) !!}
            <div class="input-group ">
                <span class="input-group-addon">
                    <i class="fa fa-user">
                    </i>
                </span>
                {!! Form::text('user', null, ['class' => 'form-control floating-label']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Contraseña', ['class' => '']) !!}
            <div class="input-group ">
                <span class="input-group-addon">
                    <i class="fa fa-lock">
                    </i>
                </span>
                {!! Form::password('password', ['class'=>'form-control']) !!}
            </div>
        </div>
    </div>
</div>
<div class="col-sm-4">
</div>
<div align="center" class="col-md-12">
          {!!Form::submit('Iniciar', ['class'=>'btn btn-primary']) !!}
          {!!Html::decode(link_to_route('solicitud/regresar','<button type="button" class="btn btn-warning ">Regresar</button>
        ',[],['class'=>'']))!!}
     </div>
     {!! Form::close() !!}
@stop
