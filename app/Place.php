<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    public $timestamps = false;
    protected $fillable = ['title', 'desc','img','city', 'lat', 'lng' , 'warning', 'way', 'secure', 'trigger_places'];
    protected $hidden = ['trigger_places'];
}
