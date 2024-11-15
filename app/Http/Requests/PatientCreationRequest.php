<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientCreationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'regex:/^[a-zA-Z\s\'-ñÑ]*$/'],
            'email' => ['required', 'email'],
            'phoneNumber' => ['required', 'integer'],
            'docPhoto' => ['required', 'mimes:jpeg,png,jpg', 'max:2048'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Full name is required.',
            'name.regex' => 'Full name must contain only valid characters.',
            'email.required' => 'Email address is required.',
            'email.email' => 'The email provided must be a valid email.',
            'phoneNumber.required' => 'Phone number is required.',
            'phoneNumber.integer' => 'Phone number must contain only numbers.',
            'docPhoto.required' => 'Photo of the document is required.',
            'docPhoto.mimes' => 'The provided file extension must be .jpef, .png or .jpg.',
            'docPhoto.max' => 'The maximum image size must be 2048.',
        ];
    }
}
