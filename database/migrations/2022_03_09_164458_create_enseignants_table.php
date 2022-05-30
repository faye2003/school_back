<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnseignantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enseignants', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('telephone');
            $table->string('sexe');
            $table->string('adresse');
            $table->string('discipline');

            $table->integer('emploi_id')->unsigned()->nullable();
            $table->foreign('emploi_id')->references('id')->on('emplois');
            
            $table->integer('cour_id')->unsigned()->nullable();
            $table->foreign('cour_id')->references('id')->on('cours');

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
        Schema::dropIfExists('enseignants');
    }
}
