<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Routing\Route;
use App\model\TPersona;
use App\model\TCtaCliente;
use App\model\TListaClientes;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Requests\CreateCtaClienteRequest;
use App\Http\Requests\EditCtaClienteRequest;
use Carbon\Carbon;

class TCtaClienteController extends Controller
{

    public function __construct()
    {
        $this->beforeFilter('@findPersona', ['only'=>['show','edit','update','destroy']]);
        $this->beforeFilter('@findCliente', ['only'=>['show','edit','update','destroy']]);
        //ayuda para que la busqueda no se de luego de crear  o editar
    }

    public function findPersona(Route $route)
    {
        $this->person=TPersona::where('codPersona', '=', $route->getParameter('CtaCliente'))->firstOrFail();
    }
    public function findCliente(Route $route)
    {
        $this->buscarCliente=TListaClientes::where('codigo', '=', $route->getParameter('CtaCliente'))->firstOrFail();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    $listaClientes=TListaClientes::name($request->get('name'))->paginate(8);
    return view("Forms/Cliente",["personas"=>$listaClientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Forms/NuevoCliente");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCtaClienteRequest $request)
    {
       /* $data=$request->all();
        $rules=array
        (
            'nombre' => 'required',    
            'pais' => 'required',  
            'provincia' => 'required', 
            'distrito' => 'required',  
            'ciudad' => 'required',
            'calle' => 'required', 
            'codigopostal' => 'required',  
            'telefono' => 'required',  
            'email' => 'required'
        );

       $v = Validator::make($data,$rules);

       if ($v->fails()) {
           return redirect()->back()
           ->withErrors($v->errors())
           ->withInput($request->all());
       }*/
        $codPersonaAnterior = \DB::table('TPersona')->max('codPersona');
        $codClienteAnterior = \DB::table('TCtaCliente')->max('codCtaCliente');
        $nuevoCodPersona=$codPersonaAnterior+1;
        $persona= new TPersona();
        $persona->codPersona=$nuevoCodPersona;
        $persona->dni=$request->dni;
        $persona->nomb=$request->nombre;
        $persona->apPat=$request->apPat;
        $persona->apMat=$request->apMat;
        $persona->correo=$request->correo;        
        $persona->telefono=$request->telefono;
        $persona->celular=$request->celular;      
        $persona->direccion=$request->direccion;
        $persona->pais=$request->pais;
        $persona->region=$request->region;
        $persona->provincia=$request->provincia;
        $persona->distrito=$request->distrito;
        $persona->save();
        $cliente= new TCtaCliente();
        $cliente->codCtaCliente=$codClienteAnterior+1;
        $cliente->fecIng=Carbon::now()->format('Y-m-d');
        $cliente->codCatCliente=111;
        $cliente->codPersona=$nuevoCodPersona;
        $cliente->save();   
        return redirect ('Cliente/CtaCliente');
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
    public function edit($codigo)
    {
       // $persona = TPersona::where('codPersona', '=', $codPersona)->firstOrFail();
        //return view("Forms/EditarCliente", ["persona"=>$this->person);
        $Cliente=\DB::table('listaClientes')->where('codigo','=',$codigo)->first();
        //return view("Forms/EditarCliente")->with('persona',$Cliente);
        return view("Forms/EditarCliente", ["persona"=>$Cliente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditCtaClienteRequest $request, $codigo)
    {
        $codCliente = TCtaCliente::where('codCtaCliente','=',$codigo)->firstOrFail();
        $persona = TPersona::where('codPersona', '=', $codCliente->codPersona)->firstOrFail();
        $persona->dni=$request->dni;
        $persona->nomb=$request->nombre;
        $persona->apPat=$request->apPat;
        $persona->apMat=$request->apMat;
        $persona->correo=$request->correo;        
        $persona->telefono=$request->telefono;
        $persona->celular=$request->celular;      
        $persona->direccion=$request->direccion;
        $persona->pais=$request->pais;
        $persona->region=$request->region;
        $persona->provincia=$request->provincia;
        $persona->distrito=$request->distrito;
        $persona->save();
        return redirect ('Cliente/CtaCliente');

      /*  $persona=$this->person;
        $persona->codPersona=$codPersona;
        $persona->dni=76205210;
        $persona->nomb=$request->nombre;
        $persona->apPat=$request->pais;
        $persona->apMat=$request->provincia;
        $persona->save();*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        //$persona = TPersona::where('codPersona', '=', $id)->firstOrFail();
        $cliente = TCtaCliente::where('codPersona', '=', $id)->firstOrFail();
        $cliente->delete();
        /*$persona=$this->person;
        $persona->delete();*/
        //Se esta eliminado solo al cliente en TCtaCliente, pero la informacion aun continua en TPersona
        $message=$persona->nomb.' '.$persona->apPat.' '.$persona->apMat.' fue eliminado';


        if ($request->ajax()) {
            return response()->json([
                'id'=>$this->person->codPersona,
                'message'=>$message
                ]);
        }

        Session::flash('message', $message);
        return redirect ('Cliente');
    }
}
