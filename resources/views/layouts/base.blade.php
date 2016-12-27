<!DOCTYPE html>
<html>
<head>
<title>@yield('title', 'titulo de la pagina')</title>
@include('layouts.css')
</head>
<body class="container">
@include('layouts.menu')
<center>
<p>
{!!Html::image('theme/image/logo_portabilidad_entrada.png',null,['width'=>"90%" ,'height'=>"220"])!!}
</p>
</center>
@yield('contenido')
<div id="modal-iframe" class="iziModal" data-izimodal-loop=""></div>
</body>
@include('layouts.js')
@yield('script')
</html>