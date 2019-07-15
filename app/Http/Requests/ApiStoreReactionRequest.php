<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApiStoreReactionRequest extends FormRequest
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
            'mobile_id' => 'required',
            'reaction' => 'required|in:VG,G,O,P,VP',
            'mobile_id' => 'required',
            'lat' => 'required|numeric',
            'long' => 'required|numeric',
        ];
    }
}
