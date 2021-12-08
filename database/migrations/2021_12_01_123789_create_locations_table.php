<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->bigInteger('refUtilisateur')->unsigned();
            $table->foreign('refUtilisateur')->references('idUtilisateur')->on('users');
            $table->bigInteger('refAppartement')->unsigned();
            $table->foreign('refAppartement')->references('idAppartement')->on('appartements');
            $table->primary(['refUtilisateur','refAppartement']);
            $table->date('dateDebut');
            $table->date('dateFin');
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
        Schema::dropIfExists('locations');
    }
}
