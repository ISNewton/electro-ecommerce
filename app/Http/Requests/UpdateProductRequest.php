<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'product_name'        =>  'required|string',
            'product_quantity'    =>  'required|integer',
            'sell_price'          =>  'required|numeric|gt:discount_price',
            'discount_type'       =>  'nullable|string|in:percentage,value',
            'discount_price'      =>  'nullable|numeric|required_if:discount_type,percentage,value|lt:sell_price',
            'product_images'      =>  'nullable|array',
            'product_images.*'    =>  'mimes:jpg,jpeg,png,webp|max:4000',
            'subcategory_id'      =>  'required|string',
            'brand_id'            =>  'nullable|integer',
            'product_discription' =>  'required|string',
            'sections.*'          =>  'nullable|integer'
        ];
    }

    public function messages() {
        return  [
            'discount_price.lt' => 'The sell price needs to be greater than the discount price'
        ];
    }
}
