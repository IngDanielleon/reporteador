<!DOCTYPE html>
<html>
    <head>
        <title>
            @yield('titulo', 'titulo de la pagina')
        </title>
        @include('layouts.css')
    </head>
    <body class="container">
        <br/>
        @include('layouts.menu')
        <center>
            <div class="logo-hts">
            </div>
            <div class="logo-text-hts">
                @yield('namepage','')
            </div>
            <br/>
            <br/>
        </center>
        @yield('contenido')
        <div class="iziModal" data-izimodal-loop="" id="modal-iframe">
        </div>
        @include('layouts.js')
@include('alerts.notifications')
@yield('script')
    </body>
</html>