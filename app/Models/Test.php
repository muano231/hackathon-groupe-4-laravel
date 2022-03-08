<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    public $fillable = [
        'age',
        'zone_code',
        'session_id',
        'user_id',
        'device_serial_number',
        'Olevel',
        'temperature',
        'zone_code',
        'UV',
        'weather_condition',
        'lat',
        'long',
        'product_id',

    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function session()
    {
        return $this->belongsTo('App\Session');
    }

}