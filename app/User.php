<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;

class User extends Model implements AuthenticatableContract, AuthorizableContract, CanResetPasswordContract
{

    use Authenticatable,
    Authorizable,
        CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'usuario';

   /**
     * The database table used by the model.
     *
     * @var string
     */
    
    protected $primaryKey = 'numero_identificacion';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['usuario' ,  'clave character' ,  'nombre character' ,  'apellido character' ,  'fecha_nacimiento' ,  'url character' ,  'direccion character' ,  'telefono character' ,  'celular character' ,  'email character' ,  'telefono_oficina character' ,  'extension character' ,  'sw_administrador' ,  'sw_activo' ,  'tipo_identificacion' ,  'numero_identificacion',  'url_firma '];

    
}
