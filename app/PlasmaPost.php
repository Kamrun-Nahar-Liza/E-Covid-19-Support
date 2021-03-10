<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlasmaPost extends Model
{
    protected $guarded = [];

    public function user()
    {

    return $this->belongsTo(User::class); 
    
    }

    public function country() 
    {

    return $this->belongsTo(Country::class,'country_id' );

    }

    
}
