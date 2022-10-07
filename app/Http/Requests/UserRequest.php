<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
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
            //'role' => ['required', Rule::in(['admin', 'user'])],
            'email' => ['required', 'email'],
        ];

        //creacion
        if ($this->method('POST')) {
            $rules['email'] = ['required', 'email ', 'unique:users,email'];
            $rules['password'] = ['required', 'string', 'min:8', 'confirmed'];
        } else {
            //edicion
            $rules['password'] = ['nullable','min:8','confirmed'];
            $rules['email'] = ['required', 'email ', 'unique:users,email,{$this->user->id}'];
        }
        return $rules;
    }
}
