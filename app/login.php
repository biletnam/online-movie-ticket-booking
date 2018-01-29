<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class login extends Model
{
	protected $table = 'login_table';
	protected $fillable = ['c_id', 'password']
    //
}
