@extends('layouts.base')
@section('titulo','Estado de solicitud')
@section('namepage','Estado de solicitud')
@section('contenido')
<br/>
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
            <td>{!! Form::label('', $reporte[0]->tipo_id, ['class'=>'']) !!}  
            </td>
            <td>{!! Form::label('', 'Numero Identificacion:', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::label('', $reporte[0]->identificacion, ['class'=>'']) !!}
            </td>
        </tr>
        <tr>
            <td>{!! Form::label('', 'Nombres y Apellidos:', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::label('', $reporte[0]->primer_nombre, ['class'=>'']) !!}
            </td>
            <td>{!! Form::label('', 'Fecha de Nacimiento:', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::label('', $reporte[0]->fecha_nacimiento, ['class'=>'']) !!}
            </td>
        </tr>
        <tr>
            <td>{!! Form::label('', 'Número de Carnet:', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::label('', $reporte[0]->numero_carnet, ['class'=>'']) !!}
            </td>
            <td>{!! Form::label('', 'IPS Primaria Asignada', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::label('', $reporte[0]->razon_social, ['class'=>'']) !!}
            </td>
        </tr>
        <tr>
            <td>{!! Form::label('', 'Departamento Domicilio Afiliación', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::label('', $reporte[0]->departamento_siic, ['class'=>'']) !!}
            </td>
            <td>{!! Form::label('', 'Municipio Domicilio Afiliación', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::label('', $reporte[0]->municipio_siic, ['class'=>'']) !!}
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
            <td>{!! Form::label('', $reporte[0]->departamento, ['class'=>'']) !!}
            </td>
        </tr>
        <tr>
            <td> {!! Form::label('', 'Municipio donde quiere ser atendido:', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::label('', $reporte[0]->municipio, ['class'=>'']) !!}
            </td>
        </tr>
        <tr>
            <td> {!! Form::label('', 'Tiempo de traslado temporal:', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::label('', $reporte[0]->tiempo_traslado, ['class'=>'']) !!}  
            </td>
        </tr>
        <tr>
            <td> {!! Form::label('', 'Motivo:', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::label('', $reporte[0]->motivo_traslado, ['class'=>'']) !!} 
            </td>
        </tr>
         <tr>
            <td> {!! Form::label('', 'Fecha en que programó el cambio temporal de municipio:', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::label('', $reporte[0]->fecha_cambio_temporal_municipio, ['class'=>'']) !!}
            </td>
        </tr>
         <tr>
            <td> {!! Form::label('', 'Observaciones:', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::label('', $reporte[0]->observacion_traslado, ['class'=>'']) !!}
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
            <td>{!! Form::label('', $reporte[0]->correo, ['class'=>'']) !!}
            </td>
            <td>
                {!! Form::label('', 'Teléfono Fijo de la residencia temporal: ', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::label('', $reporte[0]->telefono_residencia_temporal, ['class'=>'']) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('', 'Celular:', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::label('', $reporte[0]->celular, ['class'=>'']) !!}
            </td>
            <td>
                {!! Form::label('', 'Dirección temporal de residencia', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::label('', $reporte[0]->direccion_temporal_residencia, ['class'=>'']) !!}
            </td>
        </tr>
    </tbody>
</table>
<table class="table table-striped table-bordered ">
    <thead>
        <tr>
            <th colspan="4" class="th-hts">
                4. Estado Solicitud
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                {!! Form::label('', 'Radicado:', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::label('', $reporte[0]->radicado, ['class'=>'']) !!}
            </td>
            <td>
                {!! Form::label('', 'Estado de solicitud: ', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::label('', $reporte[0]->estado_solicitud, ['class'=>'']) !!}
            </td>
        </tr>
    </tbody>
</table>
<table class="table table-striped table-bordered ">
    <thead>
        <tr>
            <th colspan="2" class="th-hts">
                5. Respuesta solicitud
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                {!! Form::label('', 'Nit IPS de primer nivel:', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::label('', $reporte[0]->nit_ips_2, ['class'=>'']) !!}
            </td>
        </tr>
         <tr>
            <td>
                {!! Form::label('', 'IPS de primer nivel:', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::label('', $reporte[0]->ips_2, ['class'=>'']) !!}
            </td>
        </tr>
         <tr>
            <td>
                {!! Form::label('', 'Dirección de la IPS asignada temporalmente:', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::label('', $reporte[0]->direccion_ips_2, ['class'=>'']) !!}
            </td>
        </tr>
         <tr>
            <td>
                {!! Form::label('', 'Teléfono de la IPS asignada temporalmente:', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::label('', $reporte[0]->telefono_ips_2, ['class'=>'']) !!}
            </td>
        </tr>
         <tr>
            <td>
                {!! Form::label('', 'Departamento IPS Asignada temporalmente:', ['class'=>'label-hts']) !!}
            </td>
            <td>
            </td>
        </tr>
         <tr>
            <td>
                {!! Form::label('', 'Municipio IPS Asignada temporalmente:', ['class'=>'label-hts']) !!}
            </td>
            <td>
            </td>
        </tr>
         <tr>
            <td>
                {!! Form::label('', 'Por un periodo máximo de:', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::label('', $reporte[0]->periodo_maximo, ['class'=>'']) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('', 'Fecha de caducidad del traslado temporal: ', ['class'=>'label-hts']) !!}
            </td>
            <td>{!! Form::label('', $reporte[0]->fecha_caducidad, ['class'=>'']) !!}
            </td>
        </tr>
    </tbody>
</table>

<div align="center" class="col-md-12">
    <button class="btn btn-primary " type="button">
        Imprimir
    </button>
          {!!Html::decode(link_to_route('solicitud/estado','
    <button class="btn btn-warning " type="button">
        Regresar
    </button>
    ',[],['class'=>'']))!!}

</div>
<br/><br/><br/>
@stop