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
            <td>
            </td>
        </tr>
        <tr>
            <td> {!! Form::label('', 'Municipio donde quiere ser atendido:', ['class'=>'label-hts']) !!}
            </td>
            <td>
            </td>
        </tr>
        <tr>
            <td> {!! Form::label('', 'Tiempo de traslado temporal:', ['class'=>'label-hts']) !!}
            </td>
            <td>  
            </td>
        </tr>
        <tr>
            <td> {!! Form::label('', 'Motivo:', ['class'=>'label-hts']) !!}
            </td>
            <td> 
            </td>
        </tr>
         <tr>
            <td> {!! Form::label('', 'Fecha en que programó el cambio temporal de municipio:', ['class'=>'label-hts']) !!}
            </td>
            <td>
            </td>
        </tr>
         <tr>
            <td> {!! Form::label('', 'Observaciones:', ['class'=>'label-hts']) !!}
            </td>
            <td>
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
            </td>
            <td>
                {!! Form::label('', 'Teléfono Fijo de la residencia temporal: ', ['class'=>'label-hts']) !!}
            </td>
            <td>
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('', 'Celular:', ['class'=>'label-hts']) !!}
            </td>
            <td>
            </td>
            <td>
                {!! Form::label('', 'Dirección temporal de residencia', ['class'=>'label-hts']) !!}
            </td>
            <td>
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
            <td>
            </td>
            <td>
                {!! Form::label('', 'Estado de solicitud: ', ['class'=>'label-hts']) !!}
            </td>
            <td>
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
            <td>
            </td>
        </tr>
         <tr>
            <td>
                {!! Form::label('', 'IPS de primer nivel:', ['class'=>'label-hts']) !!}
            </td>
            <td>
            </td>
        </tr>
         <tr>
            <td>
                {!! Form::label('', 'Dirección de la IPS asignada temporalmente:', ['class'=>'label-hts']) !!}
            </td>
            <td>
            </td>
        </tr>
         <tr>
            <td>
                {!! Form::label('', 'Teléfono de la IPS asignada temporalmente:', ['class'=>'label-hts']) !!}
            </td>
            <td>
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
            <td>
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('', 'Fecha de caducidad del traslado temporal: ', ['class'=>'label-hts']) !!}
            </td>
            <td>
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
@section('script')
<script type="text/javascript">
    var menu = <?php echo $menu; ?>;
    if(menu){
      $("#menu").attr('class','hidden');
    }
</script>
@stop
@stop