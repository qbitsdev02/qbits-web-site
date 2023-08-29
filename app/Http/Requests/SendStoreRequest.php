<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendStoreRequest extends FormRequest
{
    protected $redirect = '/#contact';
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
        return [
            'name'          => 'required',
            'subject'       => 'required',
            'email'         => 'required|email',
            'phone_number'  => 'required',
        ];
    }

    // public function messages(): array
    // {
    //     return [
    //         'name.required' => __('send'),
    //         // 'body.required' => 'A message is required',
    //     ];
    // }
}
