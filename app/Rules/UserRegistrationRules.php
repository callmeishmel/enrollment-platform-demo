<?php

namespace App\Rules;

class UserRegistrationRules
{
    public static function base(): array
    {
        return [
            'formData.email'                 => 'required|string|email:rfc,filter|max:255|unique:users,email',
            'formData.password'              => 'required|string|min:8|max:100|confirmed',
            'formData.password_confirmation' => 'required|string|min:8|max:100',
        ];
    }

    public static function attributes(): array
    {
        return [
            'formData.email'                    => 'email',
            'formData.password'                 => 'password',
            'formData.password_confirmation'    => 'password confirmation',
        ];
    }
}