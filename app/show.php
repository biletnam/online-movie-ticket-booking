<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class show extends Model
{
	protected $table = 'show_table';
	protected $fillable = ['movie_id', 'movie_time', 'price']
    //
}
