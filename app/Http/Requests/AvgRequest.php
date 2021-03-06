<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AvgRequest extends FormRequest
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
            'avg_sleep_mode' => 'required',
            'sample_type' => 'required',
            'measuring_form' => 'required',
            'hw_version' => 'required'
        ];
    }
}
