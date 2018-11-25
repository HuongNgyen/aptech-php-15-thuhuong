<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Post extends Model
{
    //
    public function categories(){
        
        return $this->belongsToMany('App\Category');
    }
}
