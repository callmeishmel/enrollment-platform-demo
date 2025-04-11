<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PaymentPlan;

class PaymentPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaymentPlan::insert([
            [
                'name' => 'Upfront Payment',
                'monthly_payment' => 0,
                'duration_months' => 0,
                'interest_rate' => 0,
                'description' => 'Pay full tuition at the start of the program.',
            ],
            [
                'name' => 'Monthly Installments',
                'monthly_payment' => 500,
                'duration_months' => 12,
                'interest_rate' => 0,
                'description' => 'Spread your tuition evenly across a year.',
            ],
            [
                'name' => 'Deferred Payment Plan',
                'monthly_payment' => 400,
                'duration_months' => 18,
                'interest_rate' => 5.5,
                'description' => 'Start paying 3 months after graduation.',
            ],
        ]);
    }
}
