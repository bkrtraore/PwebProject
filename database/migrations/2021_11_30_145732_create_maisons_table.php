<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaisonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maisons', function (Blueprint $table) {
            $table->id('idmaison');
            $table->bigInteger('refisolation')->unsigned();
            $table->foreign('refisolation')->references('isolation')->on('isolations');
            $table->bigInteger('refstatut')->unsigned();
            $table->foreign('refstatut')->references('statut')->on('statuts');
            $table->bigInteger('refville')->unsigned();
            $table->foreign('refville')->references('idville')->on('villes');
            $table->string('nom');
            $table->string('proprietaire');
            $table->unsignedInteger('numMaison');
            $table->string('rue');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maisons');
    }
}
