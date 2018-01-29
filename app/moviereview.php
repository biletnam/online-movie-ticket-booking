<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class moviereview extends Model
{
	protected $table ='moviereview_table';
	protected $fillable = ['r_id', 'seat', 'review', 'movie_id', 'time']
    //
}
