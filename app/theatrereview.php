<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class theatrereview extends Model
{
	protected $table = 'theatrereview_table';
	protected $fillabale = ['r_id', 'c_id', 'star', 'cinema_id', 'time']
    //
}
