<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlbumModel extends Model
{
    protected $fillable = ['album_name','album_image','album_description','album_status','created_at','updated_at']; 
    protected $table = "albums";
}
