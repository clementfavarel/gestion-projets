<?php

namespace Database\Seeders;

use App\Models\Phase;
use Illuminate\Database\Seeder;

class PhaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Phase::create([
            'nom' => "Phase d'ideation",
        ]);

        Phase::create([
            'nom' => "Phase d'incubation",
        ]);

        Phase::create([
            'nom' => "Phase de développement",
        ]);

        Phase::create([
            'nom' => "Phase de mise en service",
        ]);
    }
}
