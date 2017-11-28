<?php

namespace App\model\industrial_park;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{

	//fillable fields
    protected $fillable  = ['id_news','id_news_sub','subject','story','views','status_del','status_news','folder_img','_token','users_id','lang']; 

     //custom timestamps name
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}