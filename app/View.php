<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    //
    public function banners(){
       
       return $this->belongsToMany(Banner::class,'view_banner','view_id','banner_id');
       //return $this->belongsToMany(Test::class)->withTimestamps();
    }
}
