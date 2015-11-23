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
     * Display a listing of the resource.
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
        $Segmentos=DB::table("TSegmento")->get();
        return view("Forms/Productos/CreateCatProducto",["Segmento"=>$Segmentos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function getFamilia($codSegmento){
        return DB::table("TFamilia")->where("codSegmento","=",$codSegmento)->get();
    }
    public function getClase($codClase){
        return DB::table("TClase")->where("codFamilia","=",$codClase)->get();
    }
    public function getTipoProducto($codClase){
        return DB::table("TTipoProducto")->where("codClase","=",$codClase)->get();
    }
    public function getUnidadMedida($codUM){
        return DB::table("TUnidadMedida")->where("codUM",'=',$codUM)->get();
    }
    public function getTipoCuantia($codTipoCuantia){
        return DB::table("TTipoCuantia")->where("codTipoCuantia","=",$codTipoCuantia)->get();
    }

}
