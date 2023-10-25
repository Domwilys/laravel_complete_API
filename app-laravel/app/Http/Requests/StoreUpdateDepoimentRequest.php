<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUpdateDepoimentRequest extends FormRequest
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
        $rules = [
            'nome' => [
                'required',
                'min:1',
                'max:100',
                'unique:depoiments',
            ],
            'email' => [
                'required',
                'min:1',
                'max:1000',
            ],
            'ocupacao' => [
                'required',
                'min:1',
                'max:100',
            ],
            'depoimento' => [
                'required',
                'min:1',
            ],
        ];

        if($this -> method() === 'PUT' || $this -> method() === 'PATCH') {
            $rules['nome'] = [
                'required',
                'min:1',
                'max:255',
                //"unique:supports,subject,{$this -> id},id",
                Rule::unique('depoiments') -> ignore($this -> depoiment ?? $this -> id),
            ];
        }

        return $rules;
    }
}
