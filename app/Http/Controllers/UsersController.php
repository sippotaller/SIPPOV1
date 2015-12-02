<?php

namespace App\Http\Controllers;
use Hash;
use Illuminate\Http\Request;
use App\model\TUsuario;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUsersRequest;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $listaUsuarios=TUsuario::name($request->get('name'))->paginate(8);
        return view("Forms/Usuario",["usuarios"=>$listaUsuarios]);
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
        $nuevoUsuario= new TUsuario($request->all());
        $nuevoUsuario->Pass=Hash::make($request->Pass);
        $nuevoUsuario->save();
        $message='Usuario añadido';
        Session::flash('message', $message);
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
