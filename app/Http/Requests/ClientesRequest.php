<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientesRequest extends FormRequest
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
            'identificacion'  => 'required',
            'tipo_id'  => 'required',
            'nombres'  => 'required',
            'apellidos'  => 'required',
            'estado'  => 'required',
            'telefono'  => 'required',
            'direccion'  => 'required',
            'tipo_cliente'  => 'required',
            'fecha_ingreso'  => 'required',
            'fecha_nacimiento' => 'required',
            'salario'  => 'required',
            'id_ciudad'  => 'required',
            'id_eps'  => 'required',
            'id_afp'=> 'required',
            'beneficio'=> 'required',
            'rango'  => 'required',
            'upc'  => 'required',
            'emi' => 'required',
            'sercofun' => 'required',
        ];
    }
}
