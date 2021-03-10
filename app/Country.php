<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $guarded = [];

    public function posts()
    {

    	return $this->hasMany(Post::class);

    }

}
