<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
class Tag extends Model
{
    protected $fillable = ['name','url'];

   public function posts(){
       return $this->belongsToMany(Post::class);
   } 
}
