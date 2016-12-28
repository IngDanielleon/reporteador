<!DOCTYPE html>
<html>
<head>
<title>@yield('titulo', 'titulo de la pagina')</title>
@include('layouts.css')
</head>
<body class="container">
<br/>
@include('layouts.menu')
<center>
<div class="logo-hts">
</div>
<div class="logo-text-hts"> &nbsp;&nbsp;@yield('namepage','')</div>
<br/><br/>
</center>
@yield('contenido')
<div id="modal-iframe" class="iziModal" data-izimodal-loop=""></div>
@include('layouts.js')
@yield('script')
</body>
</html>