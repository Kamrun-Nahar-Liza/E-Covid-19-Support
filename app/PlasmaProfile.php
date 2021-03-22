<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlasmaProfile extends Model
{
    protected $fillable = [

        'user_id', 'first_name', 'last_name', 'blood_group','phone','country','area',
    ];

    public function user(){

    	return $this->belongsTo(User::class , 'user_id');

    }

    public function plasmarequest()
    {

    return $this->hasMany(PlasmaRequest::class,'plasma_profile_id'); 
    
    }
}
