<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubstanceemisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('substanceemises', function (Blueprint $table) {
            $table->bigInteger('reftypeappareil')->unsigned();
            $table->foreign('reftypeappareil')->references('libelle')->on('typeappareils');
            $table->bigInteger('refsubstance')->unsigned();
            $table->foreign('refsubstance')->references('idSubstance')->on('substances');
            $table->primary(['reftypeappareil','refsubstance']);            
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
        Schema::dropIfExists('substanceemises');
    }
}
