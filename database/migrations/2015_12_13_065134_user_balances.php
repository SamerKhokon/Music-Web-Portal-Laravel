<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserBalances extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_balances', function (Blueprint $table) {
            $table->increments('ubid');
            $table->string('song_title');
						
			$table->integer('user_id')->unsigned();
			$table->index('user_id');
			$table->foreign('user_id')->references('id')->on('users');			
				
            $table->bigInteger('prev_balance');
			$table->bigInteger('current_balance');
			$table->bigInteger('used_balance');
			$table->dateTime('balance_renew_time');
			$table->dateTime('balance_end_time');
			$table->integer('balance_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::drop('user_balances');
    }
}
