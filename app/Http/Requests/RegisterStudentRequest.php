<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterStudentRequest extends FormRequest
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
            'email'        => 'required|unique:students,email',
            'password' => 'required|confirmed',
            'phone'        => 'required',
            'first_name'  => 'required',
            'last_name'   => 'required',
            'country_id'  => 'required',
            'qualifications' => 'required',
            'tracks'  => 'required',



        ];
    }
}
