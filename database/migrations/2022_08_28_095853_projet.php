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
        Schema::create('projet', function(Blueprint $projet) {
            $projet->id('id_projet');
            $projet->date('debut_projet');
            $projet->date('fin_projet')->nullable();
            $projet->string('theme_projet');
            $projet->string('libelle_projet');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('projet');
    }
};
