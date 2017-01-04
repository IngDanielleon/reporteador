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
<<<<<<< HEAD
            <td>{!! Form::label('', '&nbsp;', ['class'=>'']) !!}
=======
            <td>
                {!! Form::label('', config('domains.Tipodocumento')[$afiliado[0]->tipo_identificacion], ['class'=>'']) !!}
>>>>>>> 9e4aec7449517d89023ec5a47f305324838e35be
            </td>
            <td>{!! Form::label('', 'Numero Identificacion:', ['class'=>'label-hts']) !!}
            </td>
<<<<<<< HEAD
            <td>{!! Form::label('', '&nbsp;', ['class'=>'']) !!}
=======
            <td>
                {!! Form::label('', $afiliado[0]->numero_identificacion, ['class'=>'']) !!}
>>>>>>> 9e4aec7449517d89023ec5a47f305324838e35be
            </td>
        </tr>
        <tr>
            <td>{!! Form::label('', 'Nombres y Apellidos:', ['class'=>'label-hts']) !!}
            </td>
<<<<<<< HEAD
            <td>{!! Form::label('', '&nbsp;', ['class'=>'']) !!}
=======
            <td>
                {!! Form::label('', $afiliado[0]->primer_nombre." ".$afiliado[0]->segundo_nombre." ".$afiliado[0]->primer_apellido." ".$afiliado[0]->segundo_apellido, ['class'=>'']) !!}
>>>>>>> 9e4aec7449517d89023ec5a47f305324838e35be
            </td>
            <td>{!! Form::label('', 'Fecha de Nacimiento:', ['class'=>'label-hts']) !!}
            </td>
<<<<<<< HEAD
            <td>{!! Form::label('', '&nbsp;', ['class'=>'']) !!}
=======
            <td>
                {!! Form::label('', $afiliado[0]->fecha_nacimiento, ['class'=>'']) !!}
>>>>>>> 9e4aec7449517d89023ec5a47f305324838e35be
            </td>
        </tr>
        <tr>
            <td>{!! Form::label('', 'Número de Carnet:', ['class'=>'label-hts']) !!}
            </td>
<<<<<<< HEAD
            <td>{!! Form::label('', '&nbsp;', ['class'=>'']) !!}
=======
            <td>
                {!! Form::label('', $afiliado[0]->numero_carnet, ['class'=>'']) !!}
>>>>>>> 9e4aec7449517d89023ec5a47f305324838e35be
            </td>
            <td>{!! Form::label('', 'IPS Primaria Asignada', ['class'=>'label-hts']) !!}
            </td>
<<<<<<< HEAD
            <td>{!! Form::label('', '&nbsp;', ['class'=>'']) !!}
=======
            <td>
                {!! Form::label('', $afiliado[0]->razon_social, ['class'=>'']) !!}
>>>>>>> 9e4aec7449517d89023ec5a47f305324838e35be
            </td>
        </tr>
        <tr>
            <td>{!! Form::label('', 'Departamento Domicilio Afiliación', ['class'=>'label-hts']) !!}
            </td>
<<<<<<< HEAD
            <td>{!! Form::label('', '&nbsp;', ['class'=>'']) !!}
=======
            <td>
                {!! Form::label('', $afiliado[0]->departamento, ['class'=>'']) !!}
>>>>>>> 9e4aec7449517d89023ec5a47f305324838e35be
            </td>
            <td>{!! Form::label('', 'Municipio Domicilio Afiliación', ['class'=>'label-hts']) !!}
            </td>
<<<<<<< HEAD
            <td>{!! Form::label('', '&nbsp;', ['class'=>'']) !!}
=======
            <td>
                {!! Form::label('', $afiliado[0]->municipio, ['class'=>'']) !!}
>>>>>>> 9e4aec7449517d89023ec5a47f305324838e35be
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
            <td>
<<<<<<< HEAD
             <div class="form-group">
        <div class="">
             {!! Form::select('name', [''=>'Seleccione una opción']+config('domains.Tipousuario'), null, ['required', 'data-error'=>'Campo requerido','class'=>'form-control']) !!}
        <div class="help-block with-errors">
        </div>
        </div>
    </div>
=======
                <div class="form-group">
                    <div class="">
                        {!! Form::select('name', [''=>'Seleccione una opción']+$departamentos, null, ['id'=>'departamento','required', 'data-error'=>'Campo requerido','class'=>'form-control']) !!}
                        <div class="help-block with-errors">
                        </div>
                    </div>
                </div>
>>>>>>> 9e4aec7449517d89023ec5a47f305324838e35be
            </td>
        </tr>
        <tr>
            <td> {!! Form::label('', 'Municipio donde quiere ser atendido:', ['class'=>'label-hts']) !!}
            </td>
<<<<<<< HEAD
            <td> <div class="form-group">
        <div class="">
             {!! Form::select('name', [''=>'Seleccione una opción']+config('domains.Tipousuario'), null, ['required', 'data-error'=>'Campo requerido','class'=>'form-control']) !!}
        <div class="help-block with-errors">
        </div>
        </div>
    </div>
=======
            <td>
                <div class="form-group">
                    <div class="">
                        {!! Form::select('name', [''=>'Seleccione una opción'], null, ['id'=>'municipio','required', 'data-error'=>'Campo requerido','class'=>'form-control']) !!}
                        <div class="help-block with-errors">
                        </div>
                    </div>
                </div>
>>>>>>> 9e4aec7449517d89023ec5a47f305324838e35be
            </td>
        </tr>
        <tr>
            <td> {!! Form::label('', 'Tiempo de traslado temporal:', ['class'=>'label-hts']) !!}
            </td>
            <td> 

<div class="form-group">
        <div class="">
            @foreach(config('domains.Tiempotraslado') as $data)
             <input class="flat-red" required name="tipo" type="radio"/>   {!! Form::label('',$data, ['class'=>'texto-hts']) !!}<br/>
             @endforeach
        <div class="help-block with-errors">
        </div>
        </div>
             </div>
            </td>
        </tr>
        <tr>
            <td> {!! Form::label('', 'Motivo:', ['class'=>'label-hts']) !!}
            </td>
            <td> 

<div class="form-group">
        <div class="">
            @foreach(config('domains.Motivotraslado') as $data)
             <input class="flat-red" required name="motivo" type="radio"/>   {!! Form::label('',$data, ['class'=>'texto-hts']) !!}<br/>
             @endforeach
        <div class="help-block with-errors">
        </div>
        </div>
             </div>
            </td>
        </tr>
         <tr>
            <td> {!! Form::label('', 'Fecha en que programó el cambio temporal de municipio:', ['class'=>'label-hts']) !!}
            </td>
            <td>
<div class="form-group">
        <div class="">
             {!! Form::text('', null, ['required', 'data-error'=>'Campo requerido','class'=>'form-control fecha','id'=>'datemask']) !!}
        <div class="help-block with-errors">
        </div>
        </div>
    </div>

            </td>
        </tr>
         <tr>
            <td> {!! Form::label('', 'Observaciones:', ['class'=>'label-hts']) !!}
            </td>
            <td>

<div class="form-group">
        <div class="">
            {!! Form::textarea('', null, ['data-error'=>'Campo requerido','class'=>'form-control']) !!}
        <div class="help-block with-errors">
        </div>
        </div>
    </div>

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
            <td>
            <div class="form-group">
        <div class="">
            {!! Form::text('', null, ['required','class'=>'form-control']) !!}
        <div class="help-block with-errors">
        </div>
        </div>
    </div>
            </td>
            <td>
                {!! Form::label('', 'Teléfono Fijo de la residencia temporal: ', ['class'=>'label-hts']) !!}
            </td>
            <td><div class="form-group">
        <div class="">
            {!! Form::text('', null, ['required', 'data-error'=>'Campo requerido','class'=>'form-control']) !!}
        <div class="help-block with-errors">
        </div>
        </div>
    </div>
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('', 'Celular:', ['class'=>'label-hts']) !!}
            </td>
            <td><div class="form-group">
        <div class="">
            {!! Form::text('', null, ['required', 'data-error'=>'Campo requerido','class'=>'form-control']) !!}
        <div class="help-block with-errors">
        </div>
        </div>
    </div>
            </td>
            <td>
                {!! Form::label('', 'Dirección temporal de residencia', ['class'=>'label-hts']) !!}
            </td>
            <td><div class="form-group">
        <div class="">
            {!! Form::text('', null, ['required', 'data-error'=>'Campo requerido','class'=>'form-control']) !!}
        <div class="help-block with-errors">
        </div>
        </div>
    </div>
            </td>
        </tr>
    </tbody>
</table>

<div class="col-md-12">
<<<<<<< HEAD
<p class="texto-warning-hts">
Apreciado afiliado, en máximo 10 días hábiles COMPARTA EPSS dará respuesta a su solicitud. Le agradecemos estar pendiente de los medios que usted suministro para contactarlo.
</p>
<p class="center">
Fecha de recepción de la Solicitud: 2016-12-28 Radicado No. 475700000000043
</p>
=======
    <p class="texto-warning-hts">
        Apreciado afiliado, en máximo 10 días hábiles COMPARTA EPSS dará respuesta a su solicitud. Le agradecemos estar pendiente de los medios que usted suministro para contactarlo.
    </p>
    <p class="center">
        Fecha de recepción de la Solicitud: {{$fechactual}} Radicado No. {{number_format($consecutivo, 0, ",", "")}}
    </p>
>>>>>>> 9e4aec7449517d89023ec5a47f305324838e35be
</div>

<div align="center" class="col-md-12">
<<<<<<< HEAD
          {!!Form::submit('Solicitar', ['class'=>'btn btn-primary']) !!}
          {!!Html::decode(link_to_route('solicitud/ingresar','<button type="button" class="btn btn-warning ">Cancelar</button>
        ',[],['class'=>'']))!!}
         <br/>
     <br/>
     </div>
=======
    {!!Form::submit('Solicitar', ['class'=>'btn btn-primary']) !!}
    {!!Html::decode(link_to_route('solicitud/ingresar','
    <button class="btn btn-warning " type="button">
        Cancelar
    </button>
    ',[],['class'=>'']))!!}
    <br/>
    <br/>
</div>
>>>>>>> 9e4aec7449517d89023ec5a47f305324838e35be
{!! Form::close() !!}
@stop