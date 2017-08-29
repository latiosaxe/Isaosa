<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $fillable = ['id','email', 'active'];
    protected $table = 'newsletter';
}
