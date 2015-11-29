<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "Usuario";
    protected $primaryKey = 'codUsuario';
    protected $fillable = ['codUsuario', 'Pass', 'Nombre','Telefono', 'Pais','Calle','Distrito', 'Ciudad', 'CodPost','email'];
    public $timestamps = false;
}
