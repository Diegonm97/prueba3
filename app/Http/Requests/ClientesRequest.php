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
            'nuip'  => 'required',
            'nombreCli'  => 'required',
            'estadoCli'  => 'required',
            'tipoIdCli'  => 'required',
            'direccionCli'  => 'required',
            'oficinaCli'  => 'required',
            'ciudadCli'  => 'required',
            'telefonoCli'  => 'required',
            'emailCli' => 'required',
            'fechaNacCli'  => 'required',
            'salarioCli'  => 'required',
            'rangoCli'  => 'required',
            'EPScli'  => 'required',
            'fechaIngCli'  => 'required',
            'idEmpresaContraCli'  => 'required',
            'idNIT'  => 'required',
            'nombreEmpCli'  => 'required',
            'estadoPago'  => 'required'
        ];
    }
}
