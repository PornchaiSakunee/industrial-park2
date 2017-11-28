<?php

namespace App\Http\Controllers\industrial_park;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class overviewController extends Controller
{
    public function index()
    {
    	return view('industrial_park/overview');
    }
}
