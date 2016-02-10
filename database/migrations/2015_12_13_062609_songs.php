<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Songs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {	
		Schema::create('songs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('song_title');
						
			$table->integer('artist_id')->unsigned();
			$table->index('artist_id');
			$table->foreign('artist_id')->references('id')->on('artists');			
			
            $table->integer('album_id')->unsigned();
			$table->index('album_id');
			$table->foreign('album_id')->references('id')->on('albums');			
							
            $table->string('song_url');
			$table->integer('song_duration');
			$table->integer('song_preview_duration');
			$table->integer('song_status');
			$table->integer('song_play_count');
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
        Schema::drop('songs');
    }
}
