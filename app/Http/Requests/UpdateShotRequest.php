<?php

namespace MyTailor\Http\Requests;

use MyTailor\Http\Requests\Request;

class UpdateShotRequest extends Request
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
//            'file_name' => ['required', 'unique:shots'],
//            'file_type' => ['required']
        ];
    }
}
