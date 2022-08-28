<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tache', function(Blueprint $tache) {
            $tache->id('id_tache');
            $tache->string('nom_tache');
            $tache->date('debut_tache');
            $tache->date('fin_tache')->nullable();
            $tache->bigInteger('id_projet');
            $tache->bigInteger('id_salarie');
            $tache->float('cout_tache', 8, 2, true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tache');
    }
};
