<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['name', 'slug'];
    protected $table = 'galleries';

    public function images(){
//        return $this->hasMany('App\Img', 'gallery_id', 'image_id', 'galleries_images');
        return $this->belongsToMany('App\Img', 'galleries_images', 'gallery_id', 'image_id');
    }
}
