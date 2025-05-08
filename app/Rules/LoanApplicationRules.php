<?php
namespace App\Rules;

use App\Support\USStates;

class LoanApplicationRules
{
    public static function for($step): array
    {
        switch ($step) {
            case 1:
                return [
                    'formData.first_name'            => 'required|string|min:2|max:100',
                    'formData.last_name'             => 'required|string|min:2|max:100',
                    'formData.street_address'        => 'required|string|min:5|max:100',
                    'formData.street_address_2'      => 'nullable|string|max:100',
                    'formData.phone'                 => ['required', 'string', 'regex:/^\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$/'],
                    'formData.city'                  => 'required|string|min:2|max:100',
                    'formData.state'                 => 'required|string|size:2|in:'. implode(',', array_keys(USStates::STATES)),
                    'formData.zip_code'              => 'required|string|regex:/^\d{5}(-\d{4})?$/',
                ];
            case 2:
                return [
                    'formData.program_id'            => 'required|exists:programs,id',
                    'formData.preferred_start_date'  => 'required|date|after_or_equal:today',
                ];
            case 3:
                return [
                    'formData.payment_plan_id'       => 'required|integer|exists:payment_plans,id',
                ];
            default:
                return [];
        }
    }

    public static function attributes(): array
    {
        return [
            'formData.first_name'            => 'first name',
            'formData.last_name'             => 'last name',
            'formData.street_address'        => 'street address',
            'formData.phone'                 => 'phone number',
            'formData.city'                  => 'city',
            'formData.state'                 => 'state',
            'formData.zip_code'              => 'zip code',
            'formData.program_id'            => 'program',
            'formData.preferred_start_date'  => 'start date',
            'formData.payment_plan_id'       => 'payment plan',
        ];
    }
}