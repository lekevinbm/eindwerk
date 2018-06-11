<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Auth;

class UpdateUserFormRequest extends FormRequest
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
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => ['required','string','email','max:191',Rule::unique('users')->ignore(Auth::id())],
            'date_of_birth' => 'required|date|before:now',
            'street_name' => 'required|string|max:255',
            'street_number' => 'required|string|max:10',
            'postcode' => 'required|string|max:10',
            'city' => 'required|string|max:255',
            'role' => 'required|string|in:Administrator,User',
        ];
    }
}
