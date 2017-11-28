<?php

namespace App\Http\Controllers\industrial_park\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\industrial_park\news;
use App\model\industrial_park\images;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class spiadmController extends Controller
{
    public function index()
    {
    	return view('admin\industrial_park\index');
    }
    
   
    public function menuAdd($value='')
    {
    	return view('admin\industrial_park\menuAdd');
    }

    public function listPage()
    {

       $news = news::where('status_news','=',3)
      // ->where('lang','=','TH')
      // ->orWhere('lang','=','EN')
       ->orderBy('created_at','desc')
       ->get();  
       return view('admin\industrial_park\listPage',['news'=>$news]);
       
    }
    public function editPage(Request $request)
    {
        $data = news::where('id_news',$request->id_news)->get();
        $images = images::where('id_news',$data[0]->id_news_sub)->get();
        if ($data[0]->folder_img != "") {
            $folName = $data[0]->folder_img ;
        }else{
            $folName = strtotime(date('Y-m-d H:i:s')).rand(11111, 99999);
            mkdir('images/news/'.$folName, 0777);
            $update_fol_img = news::where('id_news',$request->id_news)
            ->update(['folder_img' => $folName]);
        }
        
    	return view('admin\industrial_park\editPage',['news'=>$data,'images'=>$images,'folName'=>$folName]);
    }
    public function addPage(Request $request)
    {
       
        return view('admin\industrial_park\addPage');
    }
    public function imgUpload(Request $request)
    {
        if ($request->hasFile('file')) { 
        $image = $request->file('file');
        $imageName = strtotime(date('Y-m-d H:i:s')).rand(11111, 99999) . '.' . $image->getClientOriginalExtension();
        //$imageName = $image->getClientOriginalName();
        $folName = 'images/news/'.$request->new_folder ;
        $image->move(public_path($folName),$imageName);
        return response()->json(['succ'=>$imageName]);
        }
    }
    public function imgRemove($name)
    {
        return $name;
    }
    public function insertPage(Request $request)

    {

        $id_news_re = $request->id_news;
        $get_id = news::max('id_news');
      
       
      
        $openDir = opendir('images/news/'.$request->new_folder);
      
        $no = 0 ;
        while ($file_name = readdir($openDir)) {
            $p = $request->new_folder.'/'.$file_name;
            $img_check = images::where('img_name','=',$p)->count();
            if ($img_check == 0) {
                $ep = explode(".",$file_name);
                    if($ep[1]=='png' || $ep[1]=='jpg' || $ep[1]=='gif' ||$ep[1]=='jpeg' ||$ep[1]=='bmp' ){
                        $no++ ; 
                        $insert_img =  images::create([
                            'id_news' => $get_id+1,
                            'img_name' => $request->new_folder."/".$file_name,
                            'img_number' => $no,
                                        
                        ]);
                 }
            }
           
        }
  
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
                                'status_news' => 3,
                                'folder_img' => $request->new_folder, 
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
                                'status_news' => 3,
                                'folder_img' => $request->new_folder,
                                '_token' => $request->_token,
                                'users_id' => Auth::id(),
                                'lang' => 'EN',
                                ]);

                                 if ($insert_data_th==true || $insert_data_en==true) {
                                //return Redirect::to('news/1');
                                  return redirect()->route('listPage');
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
                                'status_news' => 3,
                                '_token' => $request->_token,
                                'users_id' => Auth::id(),
                                'lang' => $request->lang,
                                ]);
                                 if ($insert_data==true ) {
                                //return Redirect::to('news/1');
                                  return redirect()->route('listPage');
                                } 
                            }
                           



                          
                    
              
     
    }

    public function updatePage(Request $request)
    {
        $id_news_re = $request->id_news;
        $id_news_sub = $request->id_news_sub;
        $openDir = opendir('images/news/'.$request->new_folder);
       
        $no = 0 ;
        while ($file_name = readdir($openDir)) {
            $ep = explode(".",$file_name);
           
            if($ep[1]=='png' || $ep[1]=='jpg' || $ep[1]=='gif' ||$ep[1]=='jpeg' ||$ep[1]=='bmp' ){
                $no++ ; 
                $file_name_ = $request->new_folder."/".$file_name ;
                $check_img = images::where('img_name','=',$file_name_)->count();
                if ($check_img ==0 ) {
                    $insert_img =  images::create([
                        'id_news' => $id_news_sub,
                        'img_name' => $file_name_,
                        'img_number' => $no,
                                
                    ]);
                }
                
         }
        }
    
      //update data 
        $insert_data =  news::where('id_news','=',$id_news_re)
         ->update([
            'subject' => $request->subject,
            'story' => $request->story,
        ]);
        if ($insert_data==true ) {
            //return Redirect::to('news/1');
            return redirect()->route('listPage');
        } 
                   
        //return view('admin\industrial_park\editPage');
    }
    public function delPage()
    {
        return view('admin\industrial_park\editPage');
    }
}
