<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateLocationFormRequest extends FormRequest
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
            'name' => 'required|string|max:191',
            'street_name' => 'required|string|max:191',
            'street_number' => 'required|string|max:191',
            'postcode' => 'required|string|max:191',
            'city' => 'required|string|max:191',
            'location_code' => 'required|string|max:191|unique:locations',
            'description' => 'nullable|string|max:191'
        ];
    }
}
