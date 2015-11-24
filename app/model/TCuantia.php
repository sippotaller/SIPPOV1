<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class TCuantia extends Model
{
	protected $primarykey="codCuantia";
 	protected $table="TCuantia";
 	protected $fillable= ["min","max","codUM","codTipoCuantia"];
 	protected $guarded = ['codCuantia'];
 	public $timestamps = false;
}
