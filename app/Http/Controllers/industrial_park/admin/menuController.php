<?php

namespace App\Http\Controllers\industrial_park\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\moldel\industrial_park\admin\menu AS menu ;

class menuController extends Controller
{
     public function getMenu()
     {
     	$menu = menu::get();

     	return $menu->name_th;

     }
}
