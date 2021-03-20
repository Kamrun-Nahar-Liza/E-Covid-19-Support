<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlasmaComment extends Model
{
    protected $guarded = [];

    public function post(){

        return $this->belongsTo(PlasmaPost::class,'plasma_post_id' );
        }
    
        public function user(){
    
        return $this->belongsTo(User::class);
    
        }
}
