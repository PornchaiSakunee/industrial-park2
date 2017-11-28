<?php

namespace App\model\industrial_park;

use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    //fillable fields
    protected $fillable  = ['img_id','id_news','img_name','img_number']; 

     //custom timestamps name
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
