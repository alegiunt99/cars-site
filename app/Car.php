<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //

    protected $fillable = ['brand', 'model', 'price', 'year', 'displacement', 'gear', 'license_plate', 'alimentation'];
}
