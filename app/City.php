<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'sehirler';
    protected $fillable = [
        'il',

    ];
    public $timestamps = false;
}
