<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $fillable=['name','passport_id'];
    public function passport()
    {
        return $this->belongsTo('App\Passport', 'passport_id');
    }
}
