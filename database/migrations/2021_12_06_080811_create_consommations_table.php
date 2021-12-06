<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsommationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consommations', function (Blueprint $table) {
            $table->bigInteger('refappareil')->unsigned();
            $table->foreign('refappareil')->references('idAppareil')->on('appareils');
            $table->bigInteger('reftypeappareil')->unsigned();
            $table->foreign('reftypeappareil')->references('reftypeappareil')->on('ressourceconsomees');
            $table->bigInteger('refressource')->unsigned();
            $table->foreign('refressource')->references('refressource')->on('ressourceconsomees');
            $table->primary(['refappareil','reftypeappareil','refressource']);
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
        Schema::dropIfExists('consommations');
    }
}
