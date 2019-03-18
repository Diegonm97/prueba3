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
            
            'estadoEmp'  => 'required',
            'tipoIdEmp'  => 'required',
            'direccionEmp'  => 'required',
            'oficinaEmp'  => 'required',
            'ciudadEmp'  => 'required',
            'nombreRep' => 'required',
            'telefonoEmp'  => 'required',
            'emailEmp' => 'required',
            'nombreEPSEmp' => 'required',
            'nombreARLEmp' => 'required',
            'nombreAFPEmp' => 'required',
            'fechaIngEmp'  => 'required',
            'idEmpresaContraEmp'  => 'required',
            'idNIT'  => 'required',
            'nombreEmp'  => 'required',
            'estadoPago'  => 'required'
            //
        ];
    }
}
