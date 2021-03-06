<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectDestinationsAndUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
       {
           Schema::table('destinations', function (Blueprint $table) {

               $table->integer('user_id')->unsigned();

               $table->foreign('user_id')->references('id')->on('users');

           });
       }

       public function down()
       {
           Schema::table('destinations', function (Blueprint $table) {

               $table->dropForeign('destinations_user_id_foreign');

               $table->dropColumn('user_id');

           });
       }
}
