@extends('layouts.base')
@section('titulo','portabilidad')
@section('namepage','Tablero de Control')
@section('contenido')
<br/>
<div class="col-md-12">

<div class="col-md-4">
<h2>Estados de Solicitudes</h2>

<h4>Solicitudes Aprobadas: {{$aprobadas}}</h4>
<h4>Solicitudes Pendientes: {{$rechazados}}</h4>
<h4>Solicitudes Rechazadas: {{$pendientes}}</h4>
<?php $total = $pendientes+$aprobadas+$rechazados;?>
<h4>Total Solicitudes: {{$total}}</h4>
<br>
 <!-- Donut chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Estados Solicitudes</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div id="donut-chart" style="height: 300px;"></div>
            </div>
            <!-- /.box-body-->
          </div>    
 

</div>

<div class="col-md-4">
<h2>Ciudades con mayor número de solicitudes</h2>

<br>
 <!-- Donut chart -->
       <!-- DONUT CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Solicitudes por ciudades</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="pieChart" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
</div>

<div class="col-md-4">
<h2>Tipos de usuarios con mayor número de solicitudes</h2>

<h4>Agencia de Servicios: {{$agencia_de_servicios}}</h4>
<h4>Agencia Social Municipal: {{$agencia_social}}</h4>
<h4>IPS: {{$ips}}</h4>
<h4>Call Center: {{$call_center}}</h4>
<h4>Secretaria de Salud: {{$secretaria_salud}}</h4>
<h4>Correo Electrónico: {{$correo_electronico}}</h4>
<h4>Afiliado: {{$afiliado}}</h4>
<br>
          <!-- Bar chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Solicitudes por usuarios</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div id="bar-chart" style="height: 300px;"></div>
            </div>
            <!-- /.box-body-->
          </div>
</div>
</div>

<div class="col-md-12">
<center>
<h1>Tabla de Portabilidad</h1>
<br>
</center>
@include('respuesta.resultados.tabla') 
</div>

@section('script')
<script type="text/javascript">
  $(function () {
  /*
     * DONUT CHART
     * -----------
     */

    var donutData = [
      {label: "Aprobado", data: {{($aprobadas*100)/$total}}, color: "#3c8dbc"},
      {label: "Rechazado", data: {{($rechazados*100)/$total}}, color: "#0073b7"},
      {label: "Pendiente", data: {{($pendientes*100)/$total}}, color: "#00c0ef"}
    ];
    $.plot("#donut-chart", donutData, {
      series: {
        pie: {
          show: true,
          radius: 1,
          innerRadius: 0.5,
          label: {
            show: true,
            radius: 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: false
      }
    });
    /*
     * END DONUT CHART
     */


     /*
     * BAR CHART
     * ---------
     */

    var bar_data = {
      data: [["Agencia Servicios", {{$agencia_de_servicios}}], ["Agencia Social", {{$agencia_social}}], ["IPS", {{$ips}}], ["Call Center", {{$call_center}}], ["Secretaria Salud", {{$secretaria_salud}}], ["Correo Electronico", {{$correo_electronico}}], ["Afiliado", {{$afiliado}}]],
      color: "#3c8dbc"
    };
    $.plot("#bar-chart", [bar_data], {
      grid: {
        borderWidth: 1,
        borderColor: "#f3f3f3",
        tickColor: "#f3f3f3"
      },
      series: {
        bars: {
          show: true,
          barWidth: 0.5,
          align: "center"
        }
      },
      xaxis: {
        mode: "categories",
        tickLength: 0
      }
    });
    /* END BAR CHART */


    

      /*
   * Custom Label formatter
   * ----------------------
   */
  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #000; font-weight: 600;">'
        + label
        + "<br>"
        + Math.round(series.percent) + "%</div>";
  }



   //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
    var pieChart = new Chart(pieChartCanvas);
    var PieData = [
      {
        value: 700,
        color: "#f56954",
        highlight: "#f56954",
        label: "Chrome"
      },
      {
        value: 500,
        color: "#00a65a",
        highlight: "#00a65a",
        label: "IE"
      },
      {
        value: 400,
        color: "#f39c12",
        highlight: "#f39c12",
        label: "FireFox"
      },
      {
        value: 600,
        color: "#00c0ef",
        highlight: "#00c0ef",
        label: "Safari"
      },
      {
        value: 300,
        color: "#3c8dbc",
        highlight: "#3c8dbc",
        label: "Opera"
      },
      {
        value: 100,
        color: "#d2d6de",
        highlight: "#d2d6de",
        label: "Navigator"
      }
    ];
    var pieOptions = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke: true,
      //String - The colour of each segment stroke
      segmentStrokeColor: "#000",
      //Number - The width of each segment stroke
      segmentStrokeWidth: 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps: 100,
      //String - Animation easing effect
      animationEasing: "easeOutBounce",
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate: true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale: false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
    };
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions);

  });


   $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
@stop
@stop