<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SmartphoneRequest extends FormRequest
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

        'tss_sample_id' => 'required',
        'avg_sleep_mode_id' => 'required',
        'observation_id'=> nullable(),
        'esim' => 'required',
        'power_of_lock' => 'required'
        ];
    }
}
