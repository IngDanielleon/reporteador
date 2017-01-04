@extends('layouts.base')
@section('titulo','Sistema de portabilidad')
@section('namepage','Bienvenidos')
@section('contenido')
<div class="col-md-12">
    <br/>
    <h1 class="titulo-hts">
        Decreto 1683 de 2013
    </h1>
    <br/>
    <p class="parrafo-hts">
        Por el cual se reglamenta el artículo 22 de la Ley 1438 de 2011 sobre portabilidad nacional en el Sistema General de Seguridad Social en Salud, en donde se dispone que: "Todas las Entidades Promotoras de Salud deberán garantizar el acceso a los servicios de salud en el territorio nacional, a través de acuerdos con prestadores de servicios de salud y Entidades Promotoras de Salud. Las Entidades Promotoras de Salud podrán ofrecer los planes de beneficios en los dos regímenes, preservando los atributos de continuidad, longitudinalidad, integralidad, y adscripción individual y familiar a los equipos básicos de salud y redes integradas de servicios. El acceso a la atención de salud será a través de la cédula de ciudadanía u otro documento de identidad. (. . .)”.
    </p>
    <br/>
    <br/>
    <br/>
        <div class="form-inline">
        {!!Html::decode(link_to_route('solicitud/ingresar','<button class="btn btn-lg btn-primary btn-block">Ingresar Solicitud</button>
        ',[],['class'=>'col-md-4']))!!}
   
        {!!Html::decode(link_to_route('solicitud/estado','<button class="btn btn-lg btn-primary btn-block">Estado Solicitud</button>
        ',[],['class'=>'col-md-4']))!!}
  
        {!!Html::decode(link_to_route('solicitud/respuesta','<button class="btn btn-lg btn-primary btn-block">Responder Solicitud</button>
        ',[],['class'=>'col-md-4']))!!}
    </div>

</div>


@stop
