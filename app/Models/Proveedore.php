<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedore
 *
 * @property $id
 * @property $nombre_comercial
 * @property $razon_social
 * @property $nit
 * @property $direccion
 * @property $telefono
 * @property $correo_electronico
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proveedore extends Model
{
    
    static $rules = [
		'nombre_comercial' => 'required',
		'nit' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_comercial','razon_social','nit','direccion','telefono','correo_electronico','descripcion'];


    public function productos()
    {
        return $this->hasMany('App\Models\Producto', 'proveedor_id', 'id');
    }


}
