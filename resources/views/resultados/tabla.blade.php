   <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                  <th>Número de Radicado</th>
                  <th>Estado de Solicitud</th>
                  <th>Departamento Domicilio</th>
                  <th>Municipio Domicilio</th>
                  <th>Departamento Traslado</th>
                  <th>Municipio Traslado</th>
                  <th>Ver Solicitud</th>
                </tr>
                </thead>
              <tbody>
                @foreach($portabilidad as $port)
               
                <tr>
                  <td>{{$port->radicado}}</td>
                  <td>{{config('domains.Estadosolicitud')[$port->estado_solicitud]}}</td>
                  <td>{{$port->departamento_siic}}</td>
                  <td>{{$port->municipio_siic}}</td>
                  <td>{{$port->departamento}}</td>
                  <td>{{$port->municipio}}</td>
                   <td style="text-align:center;">{!!Html::decode(link_to_route('filtros.show', '<button class="btn btn-sm btn-primary" ><i class="fa fa-eye "></i></button>', [$port->radicado], ['class'=>'iframe', 'title'=>'Solicitud de Portabilidad', 'data-icon'=>'fa fa-file']))!!}</td>
                </tr>
                @endforeach
              </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

