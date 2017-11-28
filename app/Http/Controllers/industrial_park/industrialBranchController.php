<?php

namespace App\Http\Controllers\industrial_park;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use App\model\industrial_park\homeModel AS homeModel;
class industrialBranchController extends Controller
{
   public function index($request)
   {
   	  //$getmenu = homeModel::get();
   	  if ($request=='sr') {
   	  	return view('industrial_park/industrial_branch_sr');
   	  }else if($request=='kb'){
   	  	return view('industrial_park/industrial_branch_kb');
   	  }else if($request=='lp'){
   	  	return view('industrial_park/industrial_branch_lp');
   	  }else if($request=='rb'){
   	  	return view('industrial_park/industrial_branch_rb');
   	  }else if($request=='ms'){
   	  	return view('industrial_park/industrial_branch_ms');
   	  }
   	  
   }
}
