<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nakliyeci extends Model
{
    protected $table = 'nakliyecikayit';
    protected $fillable = [
        'uyeid','tip','plaka'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
