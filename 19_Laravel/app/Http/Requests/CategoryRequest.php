<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        if($this->method('put')){
            //Form Update
            return [
                'name' => 'required|min:4|unique:categories',
                'description' => 'required',
                'image' => 'max:1000'
            ];
        }else{
            //Form Create
            return [
                'name' => 'required|min:4|unique:categories',
                'description' => 'required',
                'image' => 'required|image|max:1000'
            ];
        }
    }

    public function messages(){
        return [
            'name.required' => 'El campo nombre es requerido',
            'name.min' => 'El campo nombre debe tener mínimo :min caracteres',
            'name.unique' => 'El campo nombre debe ser único',
            'description.required' => 'El campo descripción debe ser requerido',
            'image.required' => 'El campo imagen es requerido',
            'image.image' => 'El campo imagen debe ser de tipo imagen',
            'image.max' => 'El campo imagen no puede superar 1 kilobyte'
        ];
    }
}
