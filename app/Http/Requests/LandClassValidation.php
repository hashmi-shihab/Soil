<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LandClassValidation extends FormRequest
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
            'name_bn' => 'required',
            'name_en' => 'required',/*],
        [
            'name_bn.required'=>'Land class name Bangla is required ',
            'name_en.required'=>'Land class name English is required ',*/
        ];
    }
}
