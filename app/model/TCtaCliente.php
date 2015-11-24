<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class TCtaCliente extends Model
{
    protected $table="TCtaCliente";
    protected $primaryKey = 'codCtaCliente';
    protected $fillable = ['codCtaCliente', 'saldComp', 'montDev', 'fecIng', 'saldCred','codCatCliente','codPersona'];
    public $timestamps = false;
}
