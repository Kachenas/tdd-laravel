<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        
        if ($this->isMethod('post')) {
            return [
                'product_name' => 'required|string',
                'product_price' => 'required|numeric',
                'quantity' => 'required|integer',
                'product_status' => 'required|string'
            ];
        } elseif ($this->isMethod('put')) {
            return [
                'id' => 'required|numeric',
                'product_price' => 'required|numeric',
                'quantity' => 'required|integer',
                'product_status' => 'required|string'
            ];
        }

        return [];
    }
}
