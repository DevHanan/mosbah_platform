<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
        $type = $this->request->get('type');
        if ($type == 'instructor') {
            return [
                'email'        => 'required|unique:instructors,email',
                'password' => 'required|confirmed',
                'phone'        => 'required'

            ];
        } else {
            return [
                'phone' => 'required',
                'email'        => 'required|unique:students,email',
                'password' => 'required|confirmed',
                'tracks.*' => 'required|exists:tracks,id'


            ];
        }
    }
}
