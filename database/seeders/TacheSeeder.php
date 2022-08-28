<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TacheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tache')->insert([
            'id_tache' => 1,
            'nom_tache' => "Instru musique 1",
            'debut_tache' => "20/08/2020",
            'fin_tache' => null,
            'id_projet' => 1,
            'id_salarie' => 1,
            'cout_tache' => 17,
        ]);
    }
}
