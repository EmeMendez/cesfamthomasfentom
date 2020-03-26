<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
class Category extends Model
{
    protected $fillable = ['name','url','description'];

    public function posts(){
        return $this->hasToMany(Post::class);// a category has many posts
    }
}
