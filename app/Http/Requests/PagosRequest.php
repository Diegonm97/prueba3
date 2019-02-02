<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PagosRequest extends FormRequest
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
            'nuipPago' => 'required',  
            'nombrePago' => 'required',
            'oficinaPago' => 'required',
            'telefonoPago' => 'required',
            'emailPago' => 'required',
            'salarioPago' => 'required',
            'EPSpago' => 'required',
            'AFPpago' => 'required',
            'ARLpago' => 'required',
            'cajaCompPago' => 'required',
            'mesPago' => 'required',
            'estadoClientePago' => 'required',
            'sumaPago' => 'required',
            'interesesPago' => 'required',
            'sumTotalPago' => 'required',
            'abonoPago' => 'required',
            'formaPago' => 'required',
            'proximoPago' => 'required',
            'observacionPago' => 'required',
            'informePago' => 'required',
            'empresaContPago' => 'required',
            'costoAdminPago' => 'required',
            'EMIpago' => 'required',
            'descuentoPago' => 'required',
            'UPCadicPago' => 'required',
            'sevFunePago' => 'required',
            'inscripcionPago' => 'required',
            'activacionPago' => 'required',
            'aporteVoluPago' => 'required',
        ];
    }
}
