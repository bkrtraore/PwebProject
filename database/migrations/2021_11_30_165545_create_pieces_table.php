<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePiecesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pieces', function (Blueprint $table) {
            $table->id('idpiece');
            $table->string('libelle');
            $table->bigInteger('refappartement')->unsigned();
            $table->foreign('refappartement')->references('idAppartement')->on('appartements');
            $table->bigInteger('reftype')->unsigned();
            $table->foreign('reftype')->references('type')->on('typepieces');
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
        Schema::dropIfExists('pieces');
    }
}
