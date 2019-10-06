<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ilan extends Model
{
protected $table = 'ilanlar';
    protected $fillable = [
        'yukleme',
        'indirme',
        'zaman',
        'tip',
        'hacim',
        'agirlik',
        'aciklama',
        'uyeid'
    ];
}
