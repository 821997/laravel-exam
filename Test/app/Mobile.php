<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobile extends Model
{
    protected $table = 'mobiles';

    protected $fillable = ['name', 'type', 'model', 'color'];
}
