<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $fillable = ['id','title', 'description', 'link', 'image', 'position'];
    protected $table = 'home';
    public $timestamps = false;
}
