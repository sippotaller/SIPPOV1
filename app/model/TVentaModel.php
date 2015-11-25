<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class TVentaModel extends Model
{
    protected $table="TVenta";
    protected $primaryKey = 'numero';
    public $timestamps = false;
}
