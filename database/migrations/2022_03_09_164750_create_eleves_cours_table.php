<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElevesCoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleves_cours', function (Blueprint $table) {
            $table->id();

            $table->integer('eleve_id')->unsigned()->nullable();
            $table->foreign('eleve_id')->references('id')->on('eleves');

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
        Schema::dropIfExists('eleves_cours');
    }
}
