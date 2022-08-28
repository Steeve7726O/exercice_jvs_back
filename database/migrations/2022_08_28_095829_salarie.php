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
        Schema::create('salarie', function(Blueprint $table) {
            $table->id('id_salarie');
            $table->string('nom_salarie');
            $table->string('prenom_salarie');
            $table->string('fonction_salarie');
            $table->float('remuneration', 8, 2, true);
            $table->float('commission', 8, 2, true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('salarie');
    }
};
