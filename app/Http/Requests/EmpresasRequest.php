<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresasRequest extends FormRequest
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
            'nit'  => 'required|unique:empresa',
            'nombre' => 'required',
            'nombre_contacto' => 'required',
            'telefono_contacto'  => 'required',
            'email'  => 'required|unique:empresa,email|unique:users,email',
            'id_ciudad'  => 'required',
            'direccion'  => 'required',
            'estado'  => 'required',
            'beneficio' => 'required',
            'fecha_ingreso' => 'required',
        ];
    }
}
