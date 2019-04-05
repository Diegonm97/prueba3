<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Empleado_empresaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * #2c7ce1 // #87CB16
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
            'id_empresa' => 'required',
            'identificacion'  => 'required', 
            'tipo_id' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'email' => 'required',
            'tipo_cliente' => 'required',
            'fecha_ingreso' => 'required',
            'fecha_nacimiento' => 'required',
            'salario' => 'required',
            'rango' => 'required',
            'upc' => 'required',
            'id_ciudad' => 'required',
            'id_eps' => 'required',
            'id_afp' => 'required',
            'estado' => 'required',
            'emi' => 'required',
            'sercofun' => 'required',
        ];
    }
}
