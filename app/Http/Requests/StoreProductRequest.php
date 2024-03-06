<?php

namespace App\Http\Requests;

use App\Http\Requests\JsonFormRequest;


class StoreProductRequest extends JsonFormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'     => [
                'required',
            ],
            'code' => [
                'required',
                'unique:products,code'
            ],
            'sku' => [
                'required',
                'unique:products,sku'
            ],
            'status' => [
                'required',
            ],
        ];   
    }
}
