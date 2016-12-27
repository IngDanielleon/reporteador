<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = "tb_municipio";
    protected $primaryKey = "municipio";
    protected $fillable = ['descripcion', 'departamento'];

    public static function obtenerMunicipio($id){
    	return Departamento::where('departamento',$id)->orderBy('descripcion')->get();
    }
}

