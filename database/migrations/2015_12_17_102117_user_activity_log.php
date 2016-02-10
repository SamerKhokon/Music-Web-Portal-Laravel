<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserActivityLog extends Migration
{
    /**
    * Run the migrations.
    * @return void
    */
    public function up()
    {
        Schema::create('user_activity_log', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->index('user_id');
            $table->foreign('user_id')->references('id')->on('users'); 

            $table->string('activity_info');
            $table->string('user_ip');

            $table->timestamps();
        });    
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::drop('user_activity_log');
    }
}
