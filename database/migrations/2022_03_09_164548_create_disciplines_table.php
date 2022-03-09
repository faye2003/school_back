<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisciplinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disciplines', function (Blueprint $table) {
            $table->id();
            $table->string('designation');
            $table->string('description')->nullable();
            $table->string('sigle');
            $table->integer('coefficient');

            $table->integer('evaluation_id')->unsigned()->nullable();
            $table->foreign('evaluation_id')->references('id')->on('evaluations');

            $table->integer('enseignant_id')->unsigned()->nullable();
            $table->foreign('enseignant_id')->references('id')->on('enseignants');
            
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
        Schema::dropIfExists('disciplines');
    }
}
