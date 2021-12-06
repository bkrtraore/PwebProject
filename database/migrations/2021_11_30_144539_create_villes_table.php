<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVillesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('villes', function (Blueprint $table) {
            $table->id('idville');
            $table->string('nomville');
            $table->bigInteger('refdepartement')->unsigned();
            $table->foreign('refdepartement')->references('idDepartement')->on('departements');
            $table->bigInteger('refCP')->unsigned();
            $table->foreign('refCP')->references('CP')->on('codepostals');
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
        Schema::dropIfExists('villes');
    }
}
