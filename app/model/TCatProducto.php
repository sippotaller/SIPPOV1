<?php 
namespace App\model;
use Illuminate\Database\Eloquent\Model;
class TCatProducto extends Model{
	protected $table="TCatProducto";
	public $timestamps = false;
	protected $primaryKey="codCatProducto";
	protected $fillable=array("desc","prec","codTipoProducto","codCuantia","codMarca");
}
?>