@extends('layouts.base')
@section('titulo','Solicitud de portabilidad')
@section('namepage','Formulario unico de solicitud de portabilidad')
@section('contenido')
<br/>
{!! Form::open(['route' => 'solicitudes.store', 'method' => 'POST' ,'name'=>'frm','id'=>'frm','data-toggle'=>'validator' ]) !!}
<table class="table table-striped table-bordered ">
    <thead>
        <tr>
            <th colspan="4" class="th-hts">
                1. Identificación del afiliado
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{!! Form::label('', 'Tipo Identificacion:', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::label('', '&nbsp;', ['class'=>'']) !!}
            </td>
            <td>{!! Form::label('', 'Numero Identificacion:', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::label('', '&nbsp;', ['class'=>'']) !!}
            </td>
        </tr>
        <tr>
            <td>{!! Form::label('', 'Nombres y Apellidos:', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::label('', '&nbsp;', ['class'=>'']) !!}
            </td>
            <td>{!! Form::label('', 'Fecha de Nacimiento:', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::label('', '&nbsp;', ['class'=>'']) !!}
            </td>
        </tr>
        <tr>
            <td>{!! Form::label('', 'Número de Carnet:', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::label('', '&nbsp;', ['class'=>'']) !!}
            </td>
            <td>{!! Form::label('', 'IPS Primaria Asignada', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::label('', '&nbsp;', ['class'=>'']) !!}
            </td>
        </tr>
        <tr>
            <td>{!! Form::label('', 'Departamento Domicilio Afiliación', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::label('', '&nbsp;', ['class'=>'']) !!}
            </td>
            <td>{!! Form::label('', 'Municipio Domicilio Afiliación', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::label('', '&nbsp;', ['class'=>'']) !!}
            </td>
        </tr>
    </tbody>
</table>
<table class="table table-striped table-bordered ">
    <thead>
        <tr>
            <th colspan="2" class="th-hts">
                2. Soliciud de portabilidad
                <small>
                    (Cambio Temporal de Municipio)
                </small>
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td> {!! Form::label('', 'Departamento donde requiere ser atendido:', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::select('name', [''=>'Seleccione una opción'], null, ['class'=>'form-control']) !!}
            </td>
        </tr>
        <tr>
            <td> {!! Form::label('', 'Municipio donde quiere ser atendido:', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::select('name', [''=>'Seleccione una opción'], null, ['class'=>'form-control']) !!}
            </td>
        </tr>
        <tr>
            <td> {!! Form::label('', 'Tiempo de traslado temporal:', ['class'=>'label-hts']) !!}
            </td>
            <td>  @foreach(config('domains.Tiempotraslado') as $data)
             <input class="flat-red" name="tipo" type="radio"/>   {!! Form::label('',$data, ['class'=>'texto-hts']) !!}<br/>
             @endforeach
            </td>
        </tr>
        <tr>
            <td> {!! Form::label('', 'Motivo:', ['class'=>'label-hts']) !!}
            </td>
            <td> @foreach(config('domains.Motivotraslado') as $data)
             <input class="flat-red" name="tipo" type="radio"/>   {!! Form::label('',$data, ['class'=>'texto-hts']) !!}<br/>
             @endforeach
            </td>
        </tr>
         <tr>
            <td> {!! Form::label('', 'Fecha en que programó el cambio temporal de municipio:', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::text('password', null, ['class'=>'form-control fecha','id'=>'datemask']) !!}
            </td>
        </tr>
         <tr>
            <td> {!! Form::label('', 'Observaciones:', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::textarea('password', null, ['class'=>'form-control']) !!}
            </td>
        </tr>
    </tbody>
</table>
<table class="table table-striped table-bordered ">
    <thead>
        <tr>
            <th colspan="4" class="th-hts">
                3. Información de contacto
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                {!! Form::label('', 'Correo Electrónico:', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::text('password', null, ['class'=>'form-control']) !!}
            </td>
            <td>
                {!! Form::label('', 'Teléfono Fijo de la residencia temporal: ', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::text('password', null, ['class'=>'form-control']) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('', 'Celular:', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::text('password', null, ['class'=>'form-control']) !!}
            </td>
            <td>
                {!! Form::label('', 'Dirección temporal de residencia', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::text('password', null, ['class'=>'form-control']) !!}
            </td>
        </tr>
    </tbody>
</table>

<div class="col-md-12">
<p class="texto-warning-hts">
Apreciado afiliado, en máximo 10 días hábiles COMPARTA EPSS dará respuesta a su solicitud. Le agradecemos estar pendiente de los medios que usted suministro para contactarlo.
</p>
<p class="center">
Fecha de recepción de la Solicitud: 2016-12-28 Radicado No. 475700000000043
</p>
</div>

<div align="center" class="col-md-12">
          {!!Form::submit('Solicitar', ['class'=>'btn btn-primary']) !!}
          {!!Html::decode(link_to_route('solicitud/ingresar','<button type="button" class="btn btn-warning ">Cancelar</button>
        ',[],['class'=>'']))!!}
         <br/>
     <br/>
     </div>
{!! Form::close() !!}
@stop
