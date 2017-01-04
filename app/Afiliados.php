<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Afiliados extends Model
{
    //
    protected $table      = "af_afiliado";
    protected $primaryKey = "numero_identificacion_padre";
    protected $fillable   = ['afiliado', 'codigo_entidad', 'tipo_identificacion_padre', 'numero_identificacion_padre', 'tipo_identificacion', 'numero_identificacion', 'primer_apellido', 'segundo_apellido', 'primer_nombre',
        'segundo_nombre', 'fecha_nacimiento', 'sexo', 'tipo_afiliado', 'parentesco', 'grupo_poblacional', 'nivel_sisben',
        'ficha', 'condicion_beneficiario', 'departamento', 'municipio', 'zona_afiliacion', 'fecha_afiliacion_sgsss',
        'fecha_afiliacion_entidad', 'contrato_operacional', 'etnia', 'modalidad_subsidio', 'nucleo_familiar', 'estado_afiliado',
        'fecha_estado', 'tipo_contrato', 'socio', 'ips', 'suspendido', 'numero_carnet', 'fecha_carnet', 'discapacidad',
        'direccion', 'telefono_1', 'telefono_2', 'celular', 'correo_electronico', 'vereda', 'corregimiento', 'caserio',
        'resguardo', 'fecha_sisben', 'puntaje_sisben', 'observaciones', 'numero_formulario', 'fecha_fomulario', 'fecha_retiro',
        'codigo_eps_anterior', 'clase_af', 'cedula_promotor', 'nombre_promotor', 'tipo_proceso_huella', 'huella_izquierda',
        'huella_derecha', 'url_huella_izquierda', 'url_huella_derecha', 'dedo_huella_izquierda', 'dedo_huella_derecha', 'url_documento', 'url_foto', 'usuario_afilia', 'usuario_carnetiza', 'fecha_carnetiza', 'motivo_no_carnetizacion',
        'fecha_afilia', 'fecha_suspendido', 'fecha_fallecido', 'acta_certifica', 'entidad_certifica', 'motivo_suspension',
        'motivo_retiro', 'fecha_afiliacion_alto_costo', 'carpeta', 'fecha_muerte', 'afiliado_enlace', 'clase_afiliado',
        'acta_carnet', 'estado_traslado', 'sw_fosyga', 'observacion_fosyga', 'estado_liquidacion', 'serial_fosyga', 'usuario_anula', 'fecha_anula', 'observacion_anula', 'departamento_tc', 'municipio_tc', 'eps_tc', 'fecha_tc',
        'fecha_traslado_tc', 'usuario_tc', 'fecha_grabado_tc', 'fecha_traslado_otra_eps', 'causal_traslado', 'fecha_novedad_traslado', 'fecha_ingreso_otra_eps', 'sw_planeamiento', 'tipo_identificacion_cambio_anulado', 'numero_identificacion_cambio_anulado', 'usuario_cambio_anulado', 'fecha_cambio_anulado', 'observacion_cambio_anulado', 'estado_extra', 'ocupacion', 'nivel_educativo', 'tb_vereda_codificada', 'tb_corregimiento', 'condicion_discapacidad',
        'numero_formulario_fisico'];


}
