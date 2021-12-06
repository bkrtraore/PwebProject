<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id('idUtilisateur')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->date('datedeNaissance');
            $table->string('genre');
            $table->string('email')->unique();
            $table->string('motdepasse');
            $table->string('adresseFixe')->unique();
            $table->boolean('admin');
            $table->boolean('estproprio');
            $table->boolean('estlocataire');
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
        Schema::dropIfExists('utilisateurs');
    }
}
