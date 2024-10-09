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
            'name' => ['required', 'string', 'max:30'],
            'quantity' => ['required', 'integer', 'max:3'],
            'price' => ['required', 'integer'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '商品名を入力してください',
            'name.string' => '商品名を文字列で入力してください',
            'name.max' => '商品名を30文字以下で入力してください',
            'quantity.required' => '数量を入力してください',
            'quantity.integer' => '数量を数字で入力してください',
            'quantity.max' => '数量を3桁以下で入力してください',
            'price.required' => '値段を入力してください',
            'price.integer' => '値段を数字で入力してください',
        ];
    }
}
