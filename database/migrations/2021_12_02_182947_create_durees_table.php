<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDureesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('durees', function (Blueprint $table) {
            $table->id('idduree');
            $table->date('date');
            $table->time('heureDebut');
            $table->time('heureFin');
            $table->bigInteger('refappareils')->unsigned();
            $table->foreign('refappareils')->references('idappareil')->on('appareils');
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
        Schema::dropIfExists('durees');
    }
}
