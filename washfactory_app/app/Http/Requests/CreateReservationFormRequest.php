<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Device;
use Auth;

class CreateReservationFormRequest extends FormRequest
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
            'device_id' => 'required|numeric|exists:devices,id',
            'reserve_dryer' => 'nullable'
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $device_id = $this->input('device_id');
            $device_type = Device::find($device_id)->type;
            if($device_type == 'wash'){
                if(Auth::user()->credits - 6 < 0){
                    $validator->errors()->add('credits_error', "You don't have enought credits.");
                }
            }else{
                if(Auth::user()->credits - 0.8 < 0){
                    $validator->errors()->add('credits_error', "You don't have enought credits.");
                }
            }
        });
    }
}
