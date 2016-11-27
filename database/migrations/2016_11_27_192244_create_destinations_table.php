<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('destinations', function (Blueprint $table) {

        $table->increments('id');
        $table->timestamps();
        $table->string('destination');
        $table->string('type')->nullable();
        $table->string('country');
        $table->string('continent');
        $table->integer('year');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('destinations');
    }
}
