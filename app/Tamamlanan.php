<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tamamlanan extends Model
{
    protected $table = 'tamamlanmis';
    protected $fillable = [
        'ilanid',
        'yukleme',
        'indirme',
        'zaman',
        'tip',
        'hacim',
        'agirlik',
        'aciklama',
        'uyeid',
        'miktar',
        'nakliyeciid'
    ];
}
