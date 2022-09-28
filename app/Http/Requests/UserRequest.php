<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|string|min:2|max:255',
            'cpf' => 'required|string|min:2|max:255',
            'phone' => 'required|string|min:2|max:255',
            'type' => 'required|string|in:0,1',
            'email' => 'required|string|min:2|max:255',
            //'password' => 'required|string|min:8|max:255',
        ];
    }
}
