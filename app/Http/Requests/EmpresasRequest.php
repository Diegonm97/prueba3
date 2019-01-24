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
        return false;
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
            'nombreEmp'  => 'required',
            'estadoEmp'  => 'required',
            'tipoIdEmp'  => 'required',
            'direccionEmp'  => 'required',
            'oficinaEmp'  => 'required',
            'ciudadEmp'  => 'required',
            'telefonoEmp'  => 'required',
            'emailEmp' => 'required',
            'fechaNacEmp'  => 'required',
            'salarioEmp'  => 'required',
            'rangoEmp'  => 'required',
            'EPSEmp'  => 'required',
            'fechaIngEmp'  => 'required',
            'idEmpresaContraEmp'  => 'required',
            'idNIT'  => 'required',
            'nombreEmpEmp'  => 'required',
            'estadoPago'  => 'required'
            //
        ];
    }
}
