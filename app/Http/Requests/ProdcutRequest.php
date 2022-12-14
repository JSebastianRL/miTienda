<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ProdcutRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'category_id'=> ['required'],
            'imagenProduct' => ['image','nullable'],
            'nombre' => ['required', 'string'],
            'precio' => ['required', 'integer'],
            'stock' => ['required', 'string'],
            'descripcion' => ['required', 'string', 'max:60'],
        ];

        //creacion
        if ($this->method('post')) {
            $rules['category_id'] = ['required', 'integer'];
        } else {
            //edicion

        }
        return $rules;
    }
}
