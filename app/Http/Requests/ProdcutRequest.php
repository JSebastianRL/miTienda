<?php

namespace App\Http\Requests;

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
            'id'=>['required'],
            'img_file' => ['image','nullable'],
            'nombre' => ['required', 'string'],
            'precio' => ['required', 'integer'],
            'stock' => ['required', 'string'],
            'descripcion' => ['required', 'string', 'max:60'],
        ];

        //creacion
        if ($this->method('POST')) {
            $rules['category_id'] = ['required', 'integer'];
        } else {
            //edicion

        }
        return $rules;
    }
}
