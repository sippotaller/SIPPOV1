<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class VListaPedidos extends Model
{
    protected $table="listaPedidos";
    public $timestamps = false;

    public function scopeName($query, $name)
    {
    	if (trim($name)!="") {
    		$query->where(\DB::raw("CONCAT(nombreCliente,' ', apellidoPaternoCliente,' ', apellidoMaternoCliente)"), "LIKE", "%$name%");  
    	}
    }
}
