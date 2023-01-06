<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRoomRequest extends FormRequest
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
            'name'  => 'required',
            'avatar'    => 'required',
            'description'    => 'required',
            'content'    => 'required',
            'category_id'    => 'required',
            'price_h'    => 'required',
            'price_d'    => 'required',
        ];
    }
}
