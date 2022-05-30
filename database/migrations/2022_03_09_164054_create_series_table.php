<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series', function (Blueprint $table) {
            $table->id();
            $table->string('designation');
            $table->string('description')->nullable();

            $table->integer('eleve_id')->unsigned()->nullable();
            $table->foreign('eleve_id')->references('id')->on('eleves');

            $table->integer('classe_id')->unsigned()->nullable();
            $table->foreign('classe_id')->references('id')->on('classes');

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
        Schema::dropIfExists('series');
    }
}
