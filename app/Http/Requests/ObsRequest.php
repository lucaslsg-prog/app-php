<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ObsRequest extends FormRequest
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
            'best_hw' => 'required',
            'cable_type' => 'required',
            'hw_for_radio_test' => 'required',
            'remarks' => 'required'
        ];
    }
}
