<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\VCatalogoProductos;
use App\model\TUnidadMedida;
use App\model\TSegmento;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class TCatProductoController extends Controller
{
    /**
     * Display a Liing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        return view("Forms/Productos/CatProductos",["CatalogoProductos"=>VCatalogoProductos::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {   
        $TipoCuantia=DB::table("TTipoCuantia")->get();
        $Segmentos=DB::table("TSegmento")->get();
        $UnidadMedida=DB::table("TUnidadMedida")->get();
        $Marca=DB::table("TMarca")->get();
        return view("Forms/Productos/CreateCatProducto",["Segmento"=>$Segmentos,"Cuantia"=>$TipoCuantia,"UnidadMedida"=>$UnidadMedida,"Marca"=>$Marca]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return "Hola";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function getListFamilia($codSegmento){
        return DB::table("TFamilia")->where("codSegmento","=",$codSegmento)->get();
    }
    public function getListClase($codFamilia){
        return DB::table("TClase")->where("codFamilia","=",$codFamilia)->get();
    }
    public function getListTipoProducto($codClase){
        return DB::table("TTipoProducto")->where("codClase","=",$codClase)->get();
    }
    public function getListCuantia($codTipoCuantia,$codUnidadMedida){
        return DB::table("TCuantia")->where("codTipoCuantia","=",$codTipoCuantia)->where("codUM","=",$codUnidadMedida)->get();
    }
    public function getKeyTipoProducto($keyTipoProducto){
        return DB::table("TTipoProducto")->where("desc","like","%".$keyTipoProducto."%")->take(20)->get();
    }
    public function getTipoProducto($codTipoProducto){
        return DB::table("TTipoProducto")->where("codTipoProducto","=",$codTipoProducto)->get(["desc"]);
    }
    public function getMarca($codMarca){
        return DB::table("TMarca")->where("codMarca","=",$codMarca)->get(["desc"]);
    }
    public function getTipoCuantia($codTipoCuantia){
        return DB::table("TTipoCuantia")->where("codTipoCuantia","=",$codTipoCuantia)->get(["desc"]);
    }
    public function getUnidadMedida($codUnidadMedida){
        return DB::table("TUnidadMedida")->where("codUM","=",$codUnidadMedida)->get(["desc"]);
    }
    

}
