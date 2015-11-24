<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class TListaClientes extends Model
{
    protected $table="listaClientes";
    protected $primaryKey = 'codigo';
    public $timestamps = false;

    public function scopeName($query, $name)
    {
    	if (trim($name)!="") {
    		$query->where(\DB::raw("CONCAT(nombre,' ', apPat,' ', apMat)"), "LIKE", "%$name%");  
    	}
    }
}
