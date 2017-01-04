<?php

namespace App\Http\Controllers;

use App\Departamento;
use App\Http\Controllers\Controller;
use App\solicitudes_portabilidad_jb;
use Carbon\Carbon;
use DB;
use Auth;
use Illuminate\Http\Request;
use Redirect;
use Session;

class SolicitudesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $fecha      = Carbon::parse($request['fecha'])->format('Y-m-d ');
        $fechactual = Carbon::parse()->format('Y-m-d ');
        $afiliado   = DB::table('administrativo.af_afiliado as af')
            ->select('af.afiliado', 'ti.abreviatura', 'af.tipo_identificacion', 'af.numero_identificacion', 'af.primer_apellido',
                'af.segundo_apellido', 'af.primer_nombre', 'af.segundo_nombre', 'af.fecha_nacimiento', 'af.municipio as radicado',
                'af.sexo', 'depto.descripcion as departamento', 'mun.descripcion as municipio', 'af.estado_afiliado', 'af.ips', 'af.numero_carnet', 'ips.razon_social', 'ips.nit')
            ->join('administrativo.tb_tipo_identificacion as ti', 'ti.tipo_identificacion', '=', 'af.tipo_identificacion')
            ->join('administrativo.ct_ips as ips', 'ips.ips', '=', 'af.ips')
            ->join('administrativo.tb_municipio as depto', 'depto.municipio', '=', 'af.departamento')
            ->join('administrativo.tb_municipio as mun', 'mun.municipio', '=', 'af.municipio')
            ->where('af.numero_identificacion', $request['id'])
            ->where('af.tipo_identificacion', $request['tipo'])
            ->where('af.fecha_nacimiento', $fecha)->get();

        if (count($afiliado) > 0) {
            $consecutivo   = $this->show($afiliado[0]->radicado);
            $departamentos = Departamento::whereNull('departamento')->orderBy('descripcion')->lists('descripcion', 'municipio')->toArray();
            return view('ingreso.nueva', compact('departamentos', 'afiliado', 'consecutivo', 'fechactual'));
        }
        Session::flash('message-error', 'El usuario no se encuentra registrado');
        return redirect('/solicitud/ingresar');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $solicitud = solicitudes_portabilidad_jb::create();
        if ($solicitud) {
            Session::flash('message-success', 'Solicitud ingresada correctamente');
        } else {
            Session::flash('message-error', 'Error al ingresar solicitud');
        }
        return redirect('/solicitud/ingresar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $consecutivo = solicitudes_portabilidad_jb::select('radicado')
            ->where('municipio_rad', $id)
            ->orderBy('radicado', 'DESC')
            ->take(1)->get();

        $cadena  = substr($consecutivo[0]->radicado, strlen($id));
        $boolean = false;
        $conse   = "";
        for ($i = 0; $i < strlen($cadena); $i++) {
            $indicador = substr($cadena, $i, 1);
            if ($indicador != 0 || $boolean == true) {
                $boolean == true;
                $conse .= substr($cadena, $i, 1);
            }
        }
        $cadena = substr($cadena, strpos($cadena, $conse));
        $conse  = $id . str_pad($cadena + 1, 10, "0", STR_PAD_LEFT);
        return $conse;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        return view('estado.mostrar');
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
