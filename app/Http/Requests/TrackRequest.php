<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CoursekRequest extends FormRequest
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
     * @return array<string, \Illuminate\ConCoursets\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
      
      $rules = [
            'name' => [
                'required',
                Rule::unique('Courseks', 'name')->ignore($this->Coursek)
            ],
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    
        if ($this->getMethod() == 'PUT') {
            $rules += ['id' => 'required|exists:Courseks,id',
        ];
        }
    
        return $rules;
    }
}
