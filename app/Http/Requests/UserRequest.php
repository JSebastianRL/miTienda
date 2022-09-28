<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
        ];

        //creacion
        if ($this->method('POST')) {
            $rules['password'] = ['required', 'string', 'min:6', 'confirmed'];
        } else {
            //edicion
            $rules['password'] = ['confirmed'];
        }
        return $rules;
    }
}
