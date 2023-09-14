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
        return [
        'name_product' => 'required',
        'id_category' => 'required',
        'dose_ha' => 'required',
        'price_ml' => 'required',
        'technical_comments' => 'nullable',
        'customer_comments' => 'nullable',
        'application_instructions' => 'nullable',
        'magrama_pdf' => 'nullable',
        'ecological' => 'required'
        ];
    }
}
