<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class TPersona extends Model
{
    protected $table="TPersona";
    protected $primaryKey = 'codPersona';
    protected $fillable = ['codPersona', 'dni', 'nomb','apPat', 'apMat','correo','telefono', 'celular', 'direccion','pais','region','provincia','distrito','descripcion'];
    public $timestamps = false;

    public function scopeName($query, $name)
    {
    	if (trim($name)!="") {
    		$query->where(\DB::raw("CONCAT(nomb,' ', apPat,' ', apMat)"), "LIKE", "%$name%");  
    	}
    }
}
