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


$(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});

    //Date range picker
    $('.fecharango').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('.fecha').datepicker({
      autoclose: true,
      format: 'dd/mm/yyyy'
    });

    //Flat red color scheme for iCheck iradio_minimal-blue iradio_minimal-red
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

//Activador de validaciones
    $('#frm').validator();
 
    var cnt = 10;
    TabbedNotification = function(options) {
        var message = "<div id='ntf" + cnt + "' class='text alert-" + options.type + "' style='display:none'><h2><i class='fa fa-bell'></i> " + options.title + "</h2><div class='close'><a href='javascript:;' class='notification_close'><i class='fa fa-close'></i></a></div><p>" + options.text + "</p></div>";
        if (!document.getElementById('custom_notifications')) {
            alert('doesnt exists');
        } else {
            $('#custom_notifications ul.notifications').append("<li><a id='ntlink" + cnt + "' class='alert-" + options.type + "' href='#ntf" + cnt + "'><i class='fa fa-bell animated shake'></i></a></li>");
            $('#custom_notifications #notif-group').append(message);
            cnt++;
            CustomTabs(options);
        }
    };
    CustomTabs = function(options) {
        $('.tabbed_notifications > div').hide();
        $('.tabbed_notifications > div:first-of-type').show();
        $('#custom_notifications').removeClass('dsp_none');
        $('.notifications a').click(function(e) {
            e.preventDefault();
            var $this = $(this),
                tabbed_notifications = '#' + $this.parents('.notifications').data('tabbed_notifications'),
                others = $this.closest('li').siblings().children('a'),
                target = $this.attr('href');
            others.removeClass('active');
            $this.addClass('active');
            $(tabbed_notifications).children('div').hide();
            $(target).show();
        });
    };
    CustomTabs();
    var tabid = idname = '';
    $(document).on('click', '.notification_close', function(e) {
        idname = $(this).parent().parent().attr("id");
        tabid = idname.substr(-2);
        $('#ntf' + tabid).remove();
        $('#ntlink' + tabid).parent().remove();
        $('.notifications a').first().addClass('active');
        $('#notif-group div').first().css('display', 'block');
    });
  });