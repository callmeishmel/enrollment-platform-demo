<?php
namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoanApplicationService
{
    public static function applicationHandler( User|null $user, array $formData): void
    {
        try {
            DB::beginTransaction();

            $user = self::saveUserIfNotAuthenticated($user, $formData);

            self::savePhoneNumber($user, $formData);
            self::saveAddress($user, $formData);
            self::saveApplication($user, $formData);

            DB::commit();

        } catch (\Throwable $e) {
            DB::rollBack();
            throw $e;
        }
    }

    public static function saveUserIfNotAuthenticated($user, array $formData): User
    {
        if(!$user) {
            $user = User::create([
                'name' => $formData['first_name'] . ' ' . $formData['last_name'],
                'email' => $formData['email'],
                'password' => Hash::make($formData['password']),
            ]);
            Auth::login($user);
        }

        return $user;
    }

    public static function savePhoneNumber($user, array $formData): void
    {
        $user->phoneNumber()->updateOrCreate(
            ['user_id' => $user->id],
            ['phone'   => $formData['phone']]
        );
    }

    public static function saveAddress($user, array $formData): void
    {
        $user->address()->updateOrCreate(
            ['user_id' => $user->id],
            ['street_address' => $formData['street_address'],
            'street_address_2' => $formData['street_address_2'] ?? null,
            'city' => $formData['city'],
            'state' => $formData['state'],
            'zip_code' => $formData['zip_code']]
        );
    }

    public static function saveApplication($user, array $formData): void
    {
        $user->application()->create([
            'user_id'               => $user->id,
            'program_id'            => $formData['program_id'],
            'preferred_start_date'  => $formData['preferred_start_date'],
            'payment_plan_id'       => $formData['payment_plan_id']
        ]);
    }
    
}
