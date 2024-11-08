<?php

namespace Database\Seeders;

use App\Models\Enveloppe;
use Illuminate\Database\Seeder;

class EnveloppeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Enveloppe::create([
            'nom' => "EMM",
        ]);
    }
}
