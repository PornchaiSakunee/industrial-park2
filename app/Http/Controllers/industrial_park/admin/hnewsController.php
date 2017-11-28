<?php

namespace App\Http\Controllers\industrial_park\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\industrial_park\news;
use App\model\industrial_park\images;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
//use Illuminate\Support\Facades\DB;
use session;
class hnewsController extends Controller
{
    public function index($stnew)
    {
    	
       $st = $stnew==1 ? 1 : 2 ;
       $news = news::where('news.status_news','=',$st)
       ->orderBy('news.created_at','desc')->get();
    		
    	return view('admin\industrial_park\news_list',['news'=>$news,'stnew'=>$st]);
    	
    }
    public function add_news()
    {
    	
    	return view('admin\industrial_park\news');
    }
    public function insert(Request $request)
    {
    	$id_news_re = $request->id_news;
    	$get_id = news::max('id_news');
    	//get post data
       
          if ($request->hasFile('logo')) {
		        if($request->file('logo')->isValid()) {
		            try {
		                $file = $request->file('logo');
		                $name = strtotime(date('Y-m-d H:i:s')).rand(11111, 99999) . '.' . $file->getClientOriginalExtension();

		               $move_file = $request->file('logo')->move("images/news", $name);

		               if($move_file==true){
		               	  

		               		//insert imgages

				        	$insert_img =  images::create([
		               		'id_news' => $get_id+1,
				        	'img_name' => $name,
						    'img_number' => 1,
						    
				        	]);

				        	 //insert data 
                            if ($request->lang == 'all_lang') {
                                // insert th
                                $insert_data_th =  news::create([
                                'id_news' => $get_id+1,
                                'id_news_sub' => $get_id+1,
                                'subject' => $request->subject,
                                'story' => $request->story,
                                'views' => 0,
                                'status_del' => 0,  
                                'status_news' => $request->status_news,
                               
                                '_token' => $request->_token,
                                'users_id' => Auth::id(),
                                'lang' => 'TH',
                                ]);
                                // insert en
                                $insert_data_en =  news::create([
                                'id_news' => $get_id+2,
                                'id_news_sub' => $get_id+1,
                                'subject' => $request->subject,
                                'story' => $request->story,
                                'views' => 0,
                                'status_del' => 0,  
                                'status_news' => $request->status_news,
                               
                                '_token' => $request->_token,
                                'users_id' => Auth::id(),
                                'lang' => 'EN',
                                ]);

                                 if ($insert_data_th==true || $insert_data_en==true) {
                                //return Redirect::to('news/1');
                                  return redirect()->route('news',['id' => $request->status_news]);
                                }

                            }else{
                                // insert news & event
                                $sub_id = $id_news_re !='' ? $id_news_re : $get_id+1 ;
                                $insert_data =  news::create([
                                'id_news' => $get_id+1,
                                'id_news_sub' => $sub_id,
                                'subject' => $request->subject,
                                'story' => $request->story,
                                'views' => 0,
                                'status_del' => 0,  
                                'status_news' => $request->status_news,
                                '_token' => $request->_token,
                                'users_id' => Auth::id(),
                                'lang' => $request->lang,
                                ]);
                                 if ($insert_data==true ) {
                                //return Redirect::to('news/1');
                                 return redirect()->route('news',['id' => $request->status_news]);
                                } 
                            }
                           

				        	
		               		 
		               }else{
		               		return '!Not move file' ;
		               }
		               

		            } catch (Illuminate\Filesystem\FileNotFoundException $e) {
		            	return $e ;
		            }
		        }
		    }
    
       

    }
    public function update(Request $request)
    {
    	
      
        //ตรวจสอบว่ามีการอัฟโหลดหรือไม่ 
    	if ($request->hasFile('logo')) {
    		    //อัฟโหลดสมบูรณ์หรือไม่ 
		        if($request->file('logo')->isValid()) {
		            try {
		               $file = $request->file('logo');
		               $name = strtotime(date('Y-m-d H:i:s')).rand(11111, 99999) . '.' . $file->getClientOriginalExtension();

		               $move_file = $request->file('logo')->move("images/news", $name);

		               if($move_file==true){

		               	    unlink("images/news/".$request->d_logo);
		               		$news_updata = news::where('id_news',$request->id_news)->update([
						    		'subject' => $request->subject,
						    		'story' => $request->story,
						    		'status_news' => $request->status_news,
						    	]);

		               		if ($news_updata==true) {
		               			$img_updata = images::where('img_name',$request->d_logo)->update([
						    		'img_name' => $name,
						    		
						    	]);
				        		//return Redirect::to('news/1');
				        	  return redirect()->route('news',['id' => $request->status_news]);
				        	}
		               		 
		               }else{
		               		return '!Not move file' ;
		               		
		               }
		               

		            } catch (Illuminate\Filesystem\FileNotFoundException $e) {
		            	return $e ;
		            }
		        }
		    }else{
		    	$news_updata = news::where('id_news',$request->id_news)->update([
		    		'subject' => $request->subject,
		    		'story' => $request->story,
		    		'status_news' => $request->status_news,
		    	]);
		    	if ($news_updata==true) {
				    //return Redirect::to('news/1');
				    return redirect()->route('news',['id' => $request->status_news]);
				}
		    }
            /*
		    $news_updata = news::where('id_news',$request->id_news)->update([
    		'subject' => $request->subject,
    		'story' => $request->story,
    		'logo' => $request->logo,
    		'subject' => $request->subject,
    	]);
    	*/
    }
     public function edit(Request $request)
    {
    	$data_news = news::where('id_news','=',$request->id_news)->get();
        $images = images::where('id_news','=',$data_news[0]->id_news_sub)->get();
       // print_r($data_news);
       //print_r($images);
    	return view('admin\industrial_park\news_edit',['news'=>$data_news,'images'=>$images]);
    }
    public function del(Request $request)
    {
    	$num = news::where('id_news_sub','=',$request->id_news)->count();
    	$news = news::where('id_news','=',$request->id_news)->delete();
    	if ($news==true) {
    		//ถ้ามี  1 ภาษา
    		if($num==1){
    			$img_name = images::where('id_news','=',$request->id_news)->get();
    			
    			foreach ($img_name as $key => $value) {
    				unlink("images/news/".$value->img_name);
    			}
    			$img_db = images::where('id_news','=',$request->id_news)->delete();
    			
    		}
    		
    		//return $data_news[0]->logo ;
    		return redirect()->route('news',['id'=>$request->d_status_news]);
    	}
    	
    }
}
