<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\TCuantia;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
class TCuantiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $Cuantia=new TCuantia;
        // $Cuantia->min=$request->get("min");
        // $Cuantia->max=$request->get("max");
        // $Cuantia->codTipoCuantia=$request->get("codTipoCuantia");
        // $Cuantia->codUM=$request->get("codUM");
        // $Cuantia->save();
        // return $Cuantia->id;
        // $cuantia=["min"=>$request->get("min")
        //                 ,"max"=>$request->get("max")
        //                 ,"codTipoCuantia"=>$request->get("codTipoCuantia")
        //                 ,"codUM"=>$request->get("codUM")];
        $v=Validator::make($request->all(),[
            'min'=>'required|min:1',
            'max'=>'required|min:1',
            ]);
        if(!$v->fails()){
            TCuantia::create($request->all());
            return array("status"=>"Exito");
        }else{
            return array("status"=>"Error","messages"=>$v->errors());
        }

        
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
