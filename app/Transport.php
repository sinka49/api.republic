<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    protected $table = 'transport';
    public $timestamps = false;
    public function user()
    {

        return $this->belongsTo(TransportType::class);
    }
}
