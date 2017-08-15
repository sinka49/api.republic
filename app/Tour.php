<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * Class Tour
 *
 * @package App
 *
 * @SWG\Definition(
 *   definition="Tour",
 *   required={"title"}
 * )
 *
 */
class Tour extends Model
{
    protected $fillable = ['title', 'description','price','time_start','time_end','title_desc','type_rests'];
    public $timestamps = false;
}
