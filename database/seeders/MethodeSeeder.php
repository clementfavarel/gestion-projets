<?php

namespace Database\Seeders;

use App\Models\Methode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MethodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Methode::create([
            'nom' => "Carte achat",
            'libelle' => 'XXX',
            'code_imputation' => 'XXX',
            'truc' => 'XXX',
        ]);

        Methode::create([
            'nom' => "MAPA",
            'libelle' => 'XXX',
            'code_imputation' => 'XXX',
            'truc' => 'XXX',
        ]);

        Methode::create([
            'nom' => "Plan de charge DIRISI",
            'libelle' => 'XXX',
            'code_imputation' => 'XXX',
            'truc' => 'XXX',
        ]);

        Methode::create([
            'nom' => "Bon de commande",
            'libelle' => 'XXX',
            'code_imputation' => 'XXX',
            'truc' => 'XXX',
        ]);
    }
}
