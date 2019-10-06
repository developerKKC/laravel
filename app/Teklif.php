<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teklif extends Model
{

    protected $table = 'teklifler';
    protected $fillable = [
        'ilanid',
        'nakliyeciid',
        'miktar'
    ];
}
