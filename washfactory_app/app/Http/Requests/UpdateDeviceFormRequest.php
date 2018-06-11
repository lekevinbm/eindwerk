<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDeviceFormRequest extends FormRequest
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
            'type' => 'required|in:wash,dry',
            'code_name' => 'required|string|max:191',
            'brand' => 'required|string|max:191',
            'manufacturer_code' => 'required|string|max:191',
            'activation_status' => 'required|in:active,out-of-service,non-active|max:191',
            'location' => 'required|numeric|exists:locations,id',
        ];
    }
}
