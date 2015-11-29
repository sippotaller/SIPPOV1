<?php

namespace App\Http\Controllers;
use Hash;
use Illuminate\Http\Request;
use App\model\TUsuario;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUsersRequest;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Forms/Usuario");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Forms/NuevoUsuario");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUsersRequest $request)
    {   
       // dd($request);
        $codUsuarioAnterior = \DB::table('tUsuario')->max('codUsuario');
        if ($codUsuarioAnterior!='') {
            $nuevoCodUsuario=$codUsuarioAnterior+1;
        } else {
            $nuevoCodUsuario=1;
        }
        
        $nuevoCodUsuario=$codUsuarioAnterior+1;
        $nuevoUsuario= new TUsuario();
        $nuevoUsuario->codUsuario=$nuevoCodUsuario;//
        $nuevoUsuario->Nombre=$request->nombre;
        $nuevoUsuario->Telefono=$request->telefono;
        $nuevoUsuario->Pais=$request->pais;
        $nuevoUsuario->Calle=$request->calle;
        $nuevoUsuario->Distrito=$request->distrito;
        $nuevoUsuario->Provincia=$request->provincia;
        $nuevoUsuario->Ciudad=$request->ciudad;
        $nuevoUsuario->CodPost=$request->codPostal;
        $nuevoUsuario->email=$request->correo;
        $password=Hash::make($request->pass);
        $nuevoUsuario->Pass=$password;
        $nuevoUsuario->save();
        return redirect ('Usuario');
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
