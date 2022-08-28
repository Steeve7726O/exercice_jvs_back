<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projet')->insert([
            'id_projet' => 1,
            'debut_projet' => "15/05/2000",
            'fin_projet' => "15/05/2030",
            'theme_projet' => "Musique",
            'libelle_projet' => "Utopia",
        ]);
    }
}
