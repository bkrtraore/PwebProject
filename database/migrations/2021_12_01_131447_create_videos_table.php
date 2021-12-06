<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id('idvideo');
            $table->bigInteger('refappareils')->unsigned();
            $table->foreign('refappareils')->references('idappareil')->on('appareils');
            $table->integer('nbLikes');
            $table->integer('nbUnlikes');
            $table->integer('nbCommentaires');
            $table->integer('nbVues');
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
        Schema::dropIfExists('videos');
    }
}
