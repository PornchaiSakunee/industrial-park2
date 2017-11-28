<?php

namespace App\Http\Controllers\industrial_park;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\industrial_park\news;
use App\model\industrial_park\images;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use session ;
use Lang;
class actionController extends Controller
{
    public function index($id)
    {
        
    	 if (\App::isLocale('th')) {
                 $locale = "TH" ;
            }else{
                 $locale = "EN" ;
            }
    	
    	$get_data = news::where('id_news_sub',$id)
    	->where('lang',$locale)
    	->get();
    	$img_data = images::where('id_news',$id)->get();

    	return view('industrial_park/action',['data_page'=>$get_data,'img_data'=>$img_data]);
    }
     public function view($id)
    {
        
    	$get_data = news::where('id_news',$id)->get();
    	$img_data = images::where('id_news',$get_data[0]->id_news_sub)->get();

    	return view('industrial_park/action',['data_page'=>$get_data,'img_data'=>$img_data]);
    }
}
