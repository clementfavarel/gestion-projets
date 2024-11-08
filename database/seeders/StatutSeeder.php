<?php

namespace Database\Seeders;

use App\Models\Statut;
use Illuminate\Database\Seeder;

class StatutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Statut::create([
            'nom' => 'Non débuté',
        ]);

        Statut::create([
            'nom' => 'En cours',
        ]);

        Statut::create([
            'nom' => 'Terminé',
        ]);

        Statut::create([
            'nom' => 'Non concerné',
        ]);

        Statut::create([
            'nom' => 'Bloqué',
        ]);

        Statut::create([
            'nom' => 'En attente',
        ]);
    }
}
