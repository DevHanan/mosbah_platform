<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCouponRequest extends FormRequest
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
      
        return [
            'id' => 'required|exists:coupones,id',
            'discount' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'code' => [
                'required',
                Rule::unique('coupones', 'code')->ignore($this->id)
            ],

        ];
    }
}
