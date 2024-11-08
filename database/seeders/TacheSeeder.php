<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TacheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Methode::create([
            'nom' => "Carte achat",
            'date_debut' => 'XXX',
            'date_fin' => 'XXX',
            'user_id' => 'XXX',
        ]);
    }
}
