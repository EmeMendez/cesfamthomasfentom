<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;
use App\Image;
use App\User;
use App\Category;

class Post extends Model
{
    protected $fillable = [
        'user_id','category_id','name','url','excerpt','body','status','image'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    public function images(){
        return $this->belongsToMany(Image::class);
    }
}
