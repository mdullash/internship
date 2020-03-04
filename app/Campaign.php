<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    public $timestamps=false;
    public function recipient()
    {
        //return $this->hasMany('App\Recipient');
    }
}
