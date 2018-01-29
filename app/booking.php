<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
	protected $table = "Booking_Table";
	protected $fillable = ['booking_id', 'c_id', 'seat_id', 'show_id', 'bill']
    //
}
