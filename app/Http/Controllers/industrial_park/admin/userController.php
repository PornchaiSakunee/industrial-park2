<?php

namespace App\Http\Controllers\industrial_park\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\industrial_park\admin\user AS user ;
class userController extends Controller
{
   
 
    public function user()
    {
    	$getUser = user::get();
    	return view('admin\industrial_park\user',['users'=>$getUser]);
    }
    public function user_add()
    {
    	return view('admin\industrial_park\user_add');
    }
}
