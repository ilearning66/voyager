<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewBanner extends Model
{
    //
     protected $table = 'view_banner';
       public $timestamps = false;

     protected $primaryKey = ['view_id', 'banner_id'];
}
