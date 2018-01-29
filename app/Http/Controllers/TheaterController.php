<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TheaterController extends Controller
{
	public function create(Request $r)
	{
		dd($r->input());
	}
}
