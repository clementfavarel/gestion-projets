<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Laetitia COLLODET',
            'email' => 'laetitia.collodet@intradef.gouv.fr',
        ]);

        User::factory()->create([
            'name' => 'Clément FAVAREL',
            'email' => 'clement.favarel@intradef.gouv.fr',
        ]);
    }
}
