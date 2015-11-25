<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class TMarca extends Model
{
	protected $primaryKey="codMarca";
    protected $table="TMarca";
    public $timestamps = false;
    protected $fillable=array("desc");
}
