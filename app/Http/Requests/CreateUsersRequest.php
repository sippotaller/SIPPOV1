<?php

namespace App\Http\Requests;
use App\model\Usuario;
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
            'nombre' => 'required', 
            'pais' => 'required', 
            'provincia' => 'required', 
            'distrito' => 'required',  
            'ciudad' => 'required',
            'calle' => 'required',  
            'codPostal' => 'required',
            'telefono' => 'required|digits_between:5,10',   
            'correo' => 'required|email',
            'pass' => 'required'
        ];
    }
}
