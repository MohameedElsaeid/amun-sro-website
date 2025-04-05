<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ChangePasswordRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Auth::check(); // Ensure user is logged in
    }

    public function rules(): array
    {
        return [
            'old_password' => ['required', function ($attribute, $value, $fail) {
                if (md5($value) !== Auth::user()->password) {
                    $fail('The old password is incorrect.');
                }
            }],
            'new_password' => ['required', 'string', 'min:8'],
            'password_confirmation' => ['required', 'same:new_password'],
        ];
    }

    public function messages(): array
    {
        return [
            'old_password.required' => 'The old password is required.',
            'new_password.required' => 'Please enter a new password.',
            'new_password.min' => 'The new password must be at least 8 characters.',
            'password_confirmation.required' => 'Please confirm your new password.',
            'password_confirmation.same' => 'Password confirmation does not match.',
        ];
    }
}
