 $(function () {
    //Date picker
    $('.datepicker').datepicker({
      autoclose: true
    });
  });

 //para selec dinamico municipios

 $("#departamento").change(event=>{
 	$.get("municipios/"+event.target.value+"", function(response, sta){
 		$("#municipio").empty();
 		$("#municipio").append("<option value=''>seleccione una opción</option>");
 		for(i=0; i<response.length; i++){
 			$("#municipio").append("<option value='"+response[i].municipio+"'>"+response[i].descripcion+"</option>");
 		}
 	});
 });


$(document).on('click', '.iframe', function(event) {
    event.preventDefault();
    var width = 1000;
    var heigth = 1000;
    var url = window.location;
    var icon = null;
    var sub = '';
    if ($(this).attr('data') != null) {
        width = $(this).attr('data');
    }
    if ($(this).attr('data-icon') != null) {
        icon = $(this).attr('data-icon');
    }
    if ($(this).attr('data-sub') != null) {
        sub = $(this).attr('data-sub');
    }
    $("#modal-iframe").iziModal({
        title: $(this).attr('title'),
        subtitle: sub,
        icon: icon,
        transitionIn: 'bounceIn',
        headerColor: 'rgb(45, 150, 255)',
        overlay: true,
        radius: 5,
        width: width,
        iframeHeight: heigth,
        iframe: true,
        timeoutProgressbar: false,
      
    });
    $("#modal-iframe").iziModal('open', event);
});


