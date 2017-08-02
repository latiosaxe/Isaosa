<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Img extends Model
{
    protected $fillable = ['url', 'title'];
    protected $table = 'images';
    protected $visible = ['url'];

}
