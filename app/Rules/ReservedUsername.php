<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Translation\PotentiallyTranslatedString;

class ReservedUsername implements ValidationRule
{
    /**
     * A list of reserved usernames.
     *
     * @var array
     */
    protected array $reservedUsernames = [
        'admin', 'administrator', 'root', 'superuser',
        'manager', 'moderator', 'support', 'owner',
        'system', 'webmaster'
    ];

    /**
     * Run the validation rule.
     *
     * @param Closure(string, ?string=): PotentiallyTranslatedString $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (in_array(strtolower($value), array_map('strtolower', $this->reservedUsernames))) {
            $fail("The $attribute is reserved. Please choose a different username.");
        }
    }
}
