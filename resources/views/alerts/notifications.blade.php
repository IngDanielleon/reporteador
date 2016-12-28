<?php 
       
if (Session::has('message-success')) {       
 $script = "<script type='text/javascript'>
$(function () { $.msgGrowl ({
	type: 'success',
            title: 'Trasanccion Exitosa'
            , text: '".Session::get('message-success').".'
        });  });</script>
";
        echo $script;}

if (Session::has('message-error')) {       
 $script = "<script type='text/javascript'>
$(function () { $.msgGrowl ({
	type: 'error',
            title: 'Transacción Erronea'
            , text: '".Session::get('message-error').".'
        });  });</script>
";
        echo $script;}