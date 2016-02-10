<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtistModel extends Model
{
    protected $fillable = ['artist_name','artist_image','artist_description','artist_status','created_at','updated_at'];
	protected $table = "artists";
}
