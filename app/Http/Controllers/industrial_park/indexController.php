<?php

namespace App\Http\Controllers\industrial_park;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use App\model\industrial_park\homeModel AS homeModel;
use App\model\industrial_park\news;
use App\model\industrial_park\images;
use Lang;
use session ;
class indexController extends Controller
{
    public function index()
    {
        //$locale = \App::getLocale();

        if (\App::isLocale('th')) {
             $locale = "TH" ;
        }else{
             $locale = "EN" ;
        }
       
    	//select ข่าว
    	$data_news = news::join(
            'images','images.id_news','=','news.id_news'
        )
        ->where('news.lang','=',$locale)
        ->where('news.status_news','=',1)
        ->orwhere('news.status_news','=',2)
        ->limit(3)->get();

       
        

     
    	//return view('industrial_park/index',['news'=>$news,'event'=>$event]);
        return view('industrial_park/index',['news'=>$data_news]);
    }

    public function news_event($page)
    {
           //$locale = \App::getLocale();

            if (\App::isLocale('th')) {
                 $locale = "TH" ;
            }else{
                 $locale = "EN" ;
            }
       
         $data_news = news::join(
            'images','images.id_news','=','news.id_news'
        )
         ->where('news.lang','=',$locale)
         ->where('news.status_news','=',1)
         ->orwhere('news.status_news','=',2)
         ->get();
         return view('industrial_park/news',['news'=>$data_news]);
    }
    public function detail($id_new)
    {
        $data_news = news::where('news.id_news','=',$id_new)
        ->join(
            'images','images.id_news','=','news.id_news'
        )->get();
      
       return view('industrial_park/detail',['news'=>$data_news]);
  
    }
}