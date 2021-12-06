<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppartementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appartements', function (Blueprint $table) {
            $table->id('idAppartement');
            $table->bigInteger('reftype')->unsigned();
            $table->foreign('reftype')->references('type')->on('typeappartements');
            $table->bigInteger('refMaison')->unsigned();
            $table->foreign('refMaison')->references('idmaison')->on('maisons');
            $table->bigInteger('refSecurite')->unsigned();
            $table->foreign('refSecurite')->references('securite')->on('securites');
            $table->integer('nbhabitants');
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
        Schema::dropIfExists('appartements');
    }
}
