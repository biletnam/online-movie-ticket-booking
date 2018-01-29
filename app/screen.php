<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class screen extends Model
{
	protected $table = 'screen_table';
	protected $fillable = ['scrteen_id', 'screen_no', 'cinema_id']
    //
}
