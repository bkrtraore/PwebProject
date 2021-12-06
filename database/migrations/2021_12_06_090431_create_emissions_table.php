<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emissions', function (Blueprint $table) {
            $table->bigInteger('refappareil')->unsigned();
            $table->foreign('refappareil')->references('idAppareil')->on('appareils');
            $table->bigInteger('reftypeappareil')->unsigned();
            $table->foreign('reftypeappareil')->references('reftypeappareil')->on('substanceemises');
            $table->bigInteger('refsubstance')->unsigned();
            $table->foreign('refsubstance')->references('refsubstance')->on('substanceemises');
            $table->primary(['refappareil','reftypeappareil','refsubstance']);
            $table->float('valeurConsommation');
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
        Schema::dropIfExists('emissions');
    }
}
