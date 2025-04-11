<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Program::insert([
            [
                'name' => 'HVAC Technician',
                'description' => 'Hands-on training for heating and cooling systems.',
                'duration_months' => 9,
                'cost' => 8500,
            ],
            [
                'name' => 'Welding Specialist',
                'description' => 'Technical welding for manufacturing and infrastructure.',
                'duration_months' => 6,
                'cost' => 6500,
            ],
            [
                'name' => 'Medical Assistant',
                'description' => 'Clinical and administrative training for medical offices.',
                'duration_months' => 12,
                'cost' => 9500,
            ],
        ]);
    }
}
