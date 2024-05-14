<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Rules\UniqueEmailInStudentInstructor;


class RegisterRequest extends FormRequest
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
                'email' => ['required', new UniqueEmailInStudentInstructor('students', 'instructors', 'email')],
                'password' => 'required|confirmed',

            ];
       
    }

    public function messages()
    {
        return [
            'email.unique' => __('front.email_unique'),
            'email.required' => __('front.email_required'),
            'phone.required'  => __('front.phone_required'),
            'phone.unique' => __('front.phone_unique'),
            'password.required' => __('front.password_required'),
            'password.confirmed'  => __('front.password_confirm_not_match')
        ];
    }
}
