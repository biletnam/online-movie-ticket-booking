<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
	protected $table = "movie_table";
	protected $fillable = ['movie_id', 'movie_name', 'movie_time', 'movie_description']
    //
}
