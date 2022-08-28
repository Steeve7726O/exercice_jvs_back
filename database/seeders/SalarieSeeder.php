<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalarieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salarie')->insert([
            'id_salarie' => 1,
            'nom_salarie' => "Travis",
            'prenom_salarie' => "Scott",
            'fonction_salarie' => "Chanteur",
            'remuneration' => 1500,
            'commission' => 3,
        ]);
    }
}
