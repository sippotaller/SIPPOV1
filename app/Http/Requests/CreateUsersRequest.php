<?php

namespace App\Http\Requests;
use App\model\TUsuario;
use App\Http\Requests\Request;

class CreateUsersRequest extends Request
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
            'Nombre' => 'required', 
            'Pais' => 'required', 
            'Provincia' => 'required', 
            'Distrito' => 'required',  
            'Ciudad' => 'required',
            'Calle' => 'required',  
            'CodPost' => 'required',
            'Telefono' => 'required|digits_between:5,10',   
            'email' => 'required|email|unique:TUsuario,email',
            'Pass' => 'required|min:5',
            'codUsuario' => 'required|unique:TUsuario,codUsuario'
        ];
    }
}
