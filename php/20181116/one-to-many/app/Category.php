<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table='Categories'; 
   protected $fillable = ['name'];

    public function posts(){
        return $this->hasMany('App\Post');
    }
//     public static function boot() {
//         parent::boot();
//  // this is a recommended way to declare event handlers
   
//         static::deleting(function($category) { // before delete() method call this
//              $category->posts()->delete();
//              // do the rest of the cleanup...
//         });
//     }
}
