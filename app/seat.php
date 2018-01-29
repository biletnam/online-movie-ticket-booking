<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class seat extends Model
{
	protected $table ='seat_table';
	protected $fillable ['seat_id', 'screen_id', 'seat_type']
    //
}
