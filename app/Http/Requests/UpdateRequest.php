<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'first_name'=> 'string',
            'last_name'=> 'string',
            'm_name'=> 'string',
            'phone'=> 'string',
            'email'=> 'string',
            'password'=> 'string',
            'role_name'=>'',
            'password_confirm'=> '',
        ];
    }
}
