<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    protected $table = 'licenses';

    protected $fillable = [
        'builder_id',
        'name',
        'address',
        'email',
        'phone',
        'license',
        'pan'
    ];
  
}
