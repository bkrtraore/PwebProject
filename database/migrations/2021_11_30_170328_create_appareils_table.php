<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppareilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appareils', function (Blueprint $table) {
            $table->id('idappareil');
            $table->bigInteger('reftype')->unsigned();
            $table->foreign('reftype')->references('libelle')->on('typeappareils');
            $table->bigInteger('refpiece')->unsigned();
            $table->foreign('refpiece')->references('idpiece')->on('pieces');
            $table->string('emplacement');
            $table->longText('descriptionEmplacement');
            $table->string('description');
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
        Schema::dropIfExists('appareils');
    }
}
