<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class TUsuario extends Model
{
    protected $table = "tUsuario";
    protected $primaryKey = 'codUsuario';
    protected $fillable = ['codUsuario', 'Pass', 'Nombre','Telefono', 'Pais','Calle','Distrito', 'Ciudad', 'CodPost','email','Provincia'];
    public $timestamps = false;

    public function scopeName($query, $name)
    {
    	if (trim($name)!="") {
    		$query->where(\DB::raw("CONCAT(Nombre,' ', codUsuario)"), "LIKE", "%$name%");  
    	}
    }
}
