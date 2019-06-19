<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    public $timestamps = false;

    protected $fillable = ['url', 'raccourcir'];


    public static function createRaccourcir() {
        $var = str_random(5);

        if(self::where('raccourcir', $var)->count() > 0 ) {
            return static::createRaccourcir();
        }

        else {
            return $var;
        }
    }
}
