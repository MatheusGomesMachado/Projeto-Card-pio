<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstablishmentRequest extends FormRequest
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
            'trading_name' => 'required|string|min:2|max:255',
            'company_name' => 'required|string|min:2|max:255',
            'phone' => 'required|string|min:2|max:255',
            'cnpj' => 'required|string|min:2|max:255',
            'address' => 'required|string|min:2|max:255',
        ];
    }
}
