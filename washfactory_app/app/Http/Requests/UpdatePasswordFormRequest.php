<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use Auth;

class UpdatePasswordFormRequest extends FormRequest
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
            'old_password' => 'required|string|min:6',
            'password' => 'required|string|min:6|confirmed',
        ];
    }

    public function withValidator($validator)
{
    $validator->after(function ($validator) {
        $old_password = $this->input('old_password');
        if (!Hash::check($old_password, Auth::user()->getAuthPassword())) {
            $validator->errors()->add('old_password', "The old password that you inserted is not right.");
        }
    });
}
}
