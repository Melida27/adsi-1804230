<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
        if($this->method() == 'PUT'){
            //Form Update
            return [
                'title' => 'required|min:4|unique:articles,title,'.$this->id,
                'image' => 'max:1000',
                'content' => 'required',
                'user_id' => 'required',
                'category_id' => 'required',
                'slider' => 'required',
                'price' => 'required|numeric|min:1|max:100',
            ];
        }else{
            //Form Create
            return [
                'title' => 'required|min:4|unique:articles',
                'image' => 'required|image|max:1000',
                'content' => 'required',
                'user_id' => 'required',
                'category_id' => 'required',
                'slider' => 'required',
                'price' => 'required|numeric|min:1|max:100',
            ];
        }
    }

    public function messages(){
        return [
            'title.required' => 'El campo título es obligatorio',
            'title.min' => 'El campo título debe tener mínimo :min caracteres',
            'title.unique' => 'El campo título ya está en uso',
            'content.required' => 'El campo contenido es obligatorio',
            'image.required' => 'El campo imagen es obligatorio',
            'image.image' => 'El campo imagen debe ser de tipo imagen',
            'image.max' => 'El archivo imagen no debe pesar más de :max kilobytes',
            'user_id.required' => 'El campo usuario es obligatorio',
            'category_id.required' => 'El campo categoría es obligatorio',
            'price.required' => 'El campo precio es obligatorio',
            'price.numeric' => 'El campo precio debe ser un número',
            'slider.required' => 'El campo importante es obligatorio'
        ];
    }
}
