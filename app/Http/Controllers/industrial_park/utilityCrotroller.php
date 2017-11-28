<?php

namespace App\Http\Controllers\industrial_park;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class utilityCrotroller extends Controller
{

    public function get_utility()
    {
    	return view("industrial_park/utility");
    }
    public function commercial()
    {
    	return view("industrial_park/utility_commercial");
    }
    public function power_supply()
    {
    	return view("industrial_park/utility_power_supply");
    }
    public function security()
    {
    	return view("industrial_park/utility_security");
    }
    public function treatment()
    {
    	return view("industrial_park/utility_treatment");
    }
    public function flood_prevention()
    {
    	return view("industrial_park/utility_flood_prevention");
    }
    public function roads()
    {
    	return view("industrial_park/utility_roads");
    }
    public function telecommunications()
    {
    	return view("industrial_park/utility_telecommunications");
    }
}
