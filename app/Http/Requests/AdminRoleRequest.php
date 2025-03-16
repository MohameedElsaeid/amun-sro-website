<?php

namespace App\Http\Requests;

use App\Enums\AdminRole;
use Illuminate\Foundation\Http\FormRequest;
use Spatie\ValidationRules\Rules\Enum;

class AdminRoleRequest extends FormRequest
{
    public function authorize(): bool
    {
        // Customize this authorization logic if needed.
        // For example, check if the authenticated admin has permission to change roles.
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            // Validate that the role is one of the allowed enum values.
            'role' => ['required', new Enum(AdminRole::class)],
        ];
    }
}
