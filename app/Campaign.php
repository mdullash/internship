<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    public function recipient()
    {
        return $this->hasMany('App\Recipient');
    }
}
