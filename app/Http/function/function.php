<?php
use App\model\industrial_park\news;
use App\model\industrial_park\images;
//ตรวจสอบว่าได้สร้างข่าว ภาษาไทย หรือไม่
function check_lang_th($id_sub){
	
	 $lang_s = news::where('id_news_sub',$id_sub)->where('lang','TH')->count();
     return $lang_s;
}
//ตรวจสอบว่าได้สร้างข่าว ภาษาอังกฤษ หรือไม่
function check_lang_EN($id_sub){
	 
	 $lang_s = news::where('id_news_sub',$id_sub)->where('lang','EN')->count();
     return $lang_s;
}

 function folder_img($id_news)
{
	$lang_s = news::where('id_news',$id_news)->get();
	$lang_fol = news::where('id_news_sub',$lang_s[0]->id_news_sub)->get();
    $name_fol = "";
	foreach ($lang_fol as $key => $value) {
		if($value->folder_img != ''){
			$name_fol = $value->folder_img;
		}
	}

	return $name_fol ;
     
}

?>