<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;
use App\Image;

class Post extends Model
{
    
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    public function images(){
        return $this->belongsToMany(Image::class);
    }
}
