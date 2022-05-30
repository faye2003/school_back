<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('designation');
            $table->string('description')->nullable();
            $table->integer('numero');
            $table->string('status')->nullable();

            $table->integer('eleve_id')->unsigned()->nullable();
            $table->foreign('eleve_id')->references('id')->on('eleves');

            $table->integer('emploi_id')->unsigned()->nullable();
            $table->foreign('emploi_id')->references('id')->on('emplois');

            $table->integer('option_id')->unsigned()->nullable();
            $table->foreign('option_id')->references('id')->on('options');

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
        Schema::dropIfExists('classes');
    }
}
