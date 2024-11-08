<?php

namespace Database\Seeders;

use App\Models\Priorite;
use Illuminate\Database\Seeder;

class PrioriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Priorite::create([
            'nom' => 'P1',
        ]);
        Priorite::create([
            'nom' => 'P2',
        ]);
        Priorite::create([
            'nom' => 'P3',
        ]);
        Priorite::create([
            'nom' => 'P4',
        ]);
        Priorite::create([
            'nom' => 'P5',
        ]);
    }
}
