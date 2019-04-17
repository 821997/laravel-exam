<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laptop extends Model
{
    protected $table = 'laptops';

    protected $fillable = ['name','body','type','model'];
}
