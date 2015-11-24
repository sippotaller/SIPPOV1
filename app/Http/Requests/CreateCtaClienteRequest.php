<?php

namespace App\Http\Requests;
use App\model\TPersona;
use App\Http\Requests\Request;

class CreateCtaClienteRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required', 
            'apPat' => 'required',
            'apMat' => 'required',  
            'pais' => 'required', 
            'region' => 'required',
            'provincia' => 'required', 
            'distrito' => 'required',  
            'direccion' => 'required',
            'dni' => 'required|unique:TPersona,dni',  
            'telefono' => 'required|digits_between:5,10', 
            'celular' => 'required|digits:9',   
            'correo' => 'required|email|unique:TPersona,correo'
        ];
    }
}
