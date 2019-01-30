<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfiguracionRequest extends FormRequest
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

            'tarifaEPS'    => 'required',
            'tarifaARLr1'  => 'required',
            'tarifaARLr2'  => 'required',
            'tarifaARLr3'  => 'required',
            'tarifaARLr4'  => 'required',
            'tarifaARLr5'  => 'required',
            'tarifaAFP'    => 'required',
            'cajaComp'     => 'required',
            'CCFautoliquidacion'=> 'required',
            'tarifaSena'   => 'required',
            'tarifaICBF'   => 'required',
            'tarifaEPS1607'=> 'required',
            'tarifaCAJA1607'=> 'required',
            'tarifaEPScolExt'=> 'required',
            'IVA'   => 'required',
            'salarioMinimo' => 'required',
            'Administracion'=> 'required',
            'DiasHabiles'   => 'required',
            'IndepVencimiento'=> 'required',



            //
        ];
    }
}
