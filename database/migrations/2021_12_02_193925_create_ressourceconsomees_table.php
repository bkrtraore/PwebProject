<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRessourceconsomeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ressourceconsomees', function (Blueprint $table) {
            $table->bigInteger('reftypeappareil')->unsigned();
            $table->foreign('reftypeappareil')->references('libelle')->on('typeappareils');
            $table->bigInteger('refressource')->unsigned();
            $table->foreign('refressource')->references('idRessource')->on('ressources');
            $table->primary(['reftypeappareil','refressource']);            
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
        Schema::dropIfExists('ressourceconsomees');
    }
}
