<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class solicitudes_portabilidad_jb extends Model
{
	protected $connection = 'pgsql2';
    protected $table = "solicitudes_portabilidad_jb";
    protected $primaryKey = "radicado";
    protected $fillable = ['tipo_id', 'identificacion', 'primer_nombre', 'segundo_nombre', 'primer_apellido', 
       'segundo_apellido', 'fecha_nacimiento', 'numero_carnet', 'razon_social', 
       'nit', 'departamento_siic', 'municipio_siic', 'tipo_usuario', 'departamento_tipo_us', 
       'nit_ips_tipo_us', 'nombre_ips_tipo_us', 'municipio_ips_tipo_us', 'agente_call_tipo_us', 
       'municipio_rad', 'afiliado', 'fecha_solicitud', 'radicado', 'departamento', 
       'municipio', 'tiempo_traslado', 'motivo_traslado', 'otro_motivo_traslado', 
       'fecha_cambio_temporal_municipio', 'observacion_traslado', 'correo', 
       'telefono_residencia_temporal', 'celular', 'direccion_temporal_residencia', 
       'estado_solicitud', 'nit_ips_2', 'ips_2', 'direccion_ips_2', 'telefono_ips_2', 
       'periodo_maximo', 'fecha_caducidad', 'coord_aseguramiento', 'fecha_cierre'];
}
