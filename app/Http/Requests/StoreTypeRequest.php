<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTypeRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:20|unique:types,name',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nome del tipo richiesto',
            'name.max' => 'Numero massimo caratteri: :max',
            'name.unique' => 'Il tipo esiste già'
        ];
    }
}
