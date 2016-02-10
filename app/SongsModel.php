<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SongsModel extends Model
{
    protected $fillable = ['song_title',
		'artist_id','album_id','song_url','song_duration',
		'song_preview_duration','song_status',
		'song_play_count','created_at','updated_at'];
	protected $table = "songs";
}
