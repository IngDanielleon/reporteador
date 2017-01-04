@extends('layouts.base')
@section('titulo','Estado de solicitud')
@section('namepage','Ver solicitud radicada')
@section('contenido')
{!! Form::open(['route' => 'filtros/mostrar', 'method' => 'POST','name'=>'frm','id'=>'frm','data-toggle'=>'validator' ]) !!}
 <div class="col-md-3">
 </div>
 <div class="col-md-6">
      <div class="form-group">
       {!! Form::label('user', 'Número de radicado:', ['class' => 'col-md-3']) !!}
        <div class="">
            <div class="input-group ">
            <span class="input-group-addon">
                <i class="fa fa-id-card">
                </i>
            </span>
               {!! Form::text('id', null, ['required','data-error'=>'Campo requerido','class'=>'form-control']) !!}
            <div class="help-block with-errors">
            </div>
            </div>
        </div>
    </div>
</div>

<div align="center" class="col-md-12">
<br/>
          {!!Form::submit('Buscar&nbsp;&nbsp;&nbsp;', ['class'=>'btn btn-primary']) !!}
          {!!Html::decode(link_to_route('solicitud/regresar','<button type="button" class="btn btn-warning ">Regresar</button>
        ',[],['class'=>'']))!!}
     </div>
{!! Form::close() !!}
@stop
