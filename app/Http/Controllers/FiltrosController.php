<?php

namespace App\Http\Controllers;

use App\Departamento;
use App\Http\Controllers\Controller;
use App\solicitudes_portabilidad_jb;
use Illuminate\Http\Request;

class FiltrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = Departamento::whereNull('departamento')->orderBy('descripcion')->lists('descripcion', 'municipio')->toArray();
        return view('respuesta.filtros.index', compact('departamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $departamento = $request['departamento'];
        $municipio    = $request['municipio'];
        $fechainicio  = $request['fecha_inicio'];
        $fechafin     = $request['fecha_fin'];
        $estado       = $request['estado'];
        $pendientes   = 0;
        $aprobadas    = 0;
        $rechazados   = 0;

        $where = " tb_municipio.municipio = '" . $departamento . "'";

        if (!empty($municipio)) {
            $where .= " AND tb_municipio.municipio = '" . $municipio . "'";
        }

        if ($estado == 0) {
            $pendientes = solicitudes_portabilidad_jb::join('tb_municipio', 'tb_municipio.descripcion', '=', 'solicitudes_portabilidad_jb.departamento_siic')->where('estado_solicitud', '0')->whereRaw($where)->count();
        }
        if ($estado == 'Aprobado') {
            $aprobadas = solicitudes_portabilidad_jb::join('tb_municipio', 'tb_municipio.descripcion', '=', 'solicitudes_portabilidad_jb.departamento_siic')->where('estado_solicitud', 'Aprobado')->whereRaw($where)->count();
        }
        if ($estado == 'Rechazado') {
            $rechazados = solicitudes_portabilidad_jb::join('tb_municipio', 'tb_municipio.descripcion', '=', 'solicitudes_portabilidad_jb.departamento_siic')->where('estado_solicitud', 'Rechazado')->whereRaw($where)->count();
        } else {
            $pendientes = solicitudes_portabilidad_jb::join('tb_municipio', 'tb_municipio.descripcion', '=', 'solicitudes_portabilidad_jb.departamento_siic')->where('estado_solicitud', '0')->whereRaw($where)->count();
            $aprobadas  = solicitudes_portabilidad_jb::join('tb_municipio', 'tb_municipio.descripcion', '=', 'solicitudes_portabilidad_jb.departamento_siic')->where('estado_solicitud', 'Aprobado')->whereRaw($where)->count();
            $rechazados = solicitudes_portabilidad_jb::join('tb_municipio', 'tb_municipio.descripcion', '=', 'solicitudes_portabilidad_jb.departamento_siic')->where('estado_solicitud', 'Rechazado')->whereRaw($where)->count();
        }

        //tipos de usuarios
        $agencia_de_servicios = solicitudes_portabilidad_jb::join('tb_municipio', 'tb_municipio.descripcion', '=', 'solicitudes_portabilidad_jb.departamento_siic')->where('tipo_usuario', '0')->whereRaw($where)->count();
        $agencia_social       = solicitudes_portabilidad_jb::join('tb_municipio', 'tb_municipio.descripcion', '=', 'solicitudes_portabilidad_jb.departamento_siic')->where('tipo_usuario', '1')->whereRaw($where)->count();
        $ips                  = solicitudes_portabilidad_jb::join('tb_municipio', 'tb_municipio.descripcion', '=', 'solicitudes_portabilidad_jb.departamento_siic')->where('tipo_usuario', '2')->whereRaw($where)->count();
        $call_center          = solicitudes_portabilidad_jb::join('tb_municipio', 'tb_municipio.descripcion', '=', 'solicitudes_portabilidad_jb.departamento_siic')->where('tipo_usuario', '3')->whereRaw($where)->count();
        $secretaria_salud     = solicitudes_portabilidad_jb::join('tb_municipio', 'tb_municipio.descripcion', '=', 'solicitudes_portabilidad_jb.departamento_siic')->where('tipo_usuario', '4')->whereRaw($where)->count();
        $correo_electronico   = solicitudes_portabilidad_jb::join('tb_municipio', 'tb_municipio.descripcion', '=', 'solicitudes_portabilidad_jb.departamento_siic')->where('tipo_usuario', '5')->whereRaw($where)->count();
        $afiliado             = solicitudes_portabilidad_jb::join('tb_municipio', 'tb_municipio.descripcion', '=', 'solicitudes_portabilidad_jb.departamento_siic')->where('tipo_usuario', '')->whereRaw($where)->count();

        $portabilidad = solicitudes_portabilidad_jb::select('radicado', 'estado_solicitud', 'departamento_siic', 'municipio_siic', 'solicitudes_portabilidad_jb.departamento', 'solicitudes_portabilidad_jb.municipio')->join('tb_municipio', 'tb_municipio.descripcion', '=', 'solicitudes_portabilidad_jb.departamento_siic')->whereRaw($where)->get();

        return view('respuesta.resultados.index', compact('aprobadas', 'rechazados', 'pendientes', 'agencia_de_servicios', 'agencia_social', 'ips', 'call_center', 'secretaria_salud', 'correo_electronico', 'afiliado', 'portabilidad'));
    }

    /** 
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,  $id)
    {
         $parametro = $id;
        if(isset($request['id'])){
            $parametro = $request['id'];
        }
        $reporte = solicitudes_portabilidad_jb::where('radicado', '=', $parametro)->get();
        return view('estado.mostrar', compact('reporte'));   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getMunicipios(Request $request, $id)
    {
        //
        if ($request->ajax()) {
            $municipios = Departamento::obtenerMunicipio($id);
            return response()->json($municipios);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
