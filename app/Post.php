<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];


    public function country() 
    {

    return $this->belongsTo(Country::class,'country_id' );

    }
    
    public function user()
    {

    return $this->belongsTo(User::class); 
    
    }

}
