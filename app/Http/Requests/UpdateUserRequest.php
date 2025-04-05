<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateUserRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Ensure the user is authorized
    }

    public function rules()
    {
        return [
            'StrUserID' => 'required|string|max:255|unique:TB_User,StrUserID,' . Auth::user()->JID . ',JID',
            'phone' => 'required|string|max:15|unique:TB_User,phone,' . Auth::user()->JID . ',JID',
            'sex' => 'required|in:male,female',
        ];
    }

    public function messages()
    {
        return [
            'StrUserID.required' => 'Username is required.',
            'StrUserID.unique' => 'This username is already taken.',
            'phone.required' => 'Phone number is required.',
            'phone.unique' => 'This phone number is already in use.',
            'sex.required' => 'Gender is required.',
        ];
    }
}
