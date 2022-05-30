<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_evaluations', function (Blueprint $table) {
            $table->id();
            $table->string('designation');
            $table->string('description')->nullable();

            $table->integer('evaluation_id')->unsigned()->nullable();
            $table->foreign('evaluation_id')->references('id')->on('evaluations');

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
        Schema::dropIfExists('type_evaluations');
    }
}
