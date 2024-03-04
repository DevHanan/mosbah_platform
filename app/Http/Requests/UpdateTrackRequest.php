<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateTrackRequest extends FormRequest
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
            'name' => 'required|unique:tracks,name',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    
        if ($this->getMethod() == 'patch') {
            $rules += ['id' => 'required|exists:tracks,id', "name" => [
                Rule::unique('tracks', 'name')->ignore($this->id)

            ]
        ];
        }
    
        return $rules;
    }
}
