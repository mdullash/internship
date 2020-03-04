<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipient extends Model
{
    public $timestamps=false;
    //protected $fillable = ['recipient_number'];
    public function phone()
    {
        //return $this->hasOne('App\Phone');
    }
}
