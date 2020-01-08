<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|min:3|max:255',
            'code' => 'unique:products,code',
            'short_description' =>'bail|max:255|required',
            'description' => 'required|min:5',
            'price' => 'required|numeric|min:1',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Обязательное :attribute поле для ввода',
            'min' => 'Минимальное :attribute количество символов - :min',
            'max' => 'Максимальное количество символов - :max'
        ];
    }
}
