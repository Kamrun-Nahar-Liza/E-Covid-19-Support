<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlasmaRequest extends Model
{
    protected $guarded = [];

    public function plasmaprofile()
    {

    return $this->belongsTo(PlasmaProfile::class,'plasma_profile_id'); 
    
    }

    public function user()
    {

    return $this->belongsTo(User::class); 
    
    }
}
