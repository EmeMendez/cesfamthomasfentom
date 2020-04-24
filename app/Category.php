<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Post;
class Category extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['name'];

    public function posts(){
        return $this->hasToMany(Post::class)->withTrashed();// a category has many posts
    }

    public function scopeName($query,$name){
        if($name)
            return $query->where('name','LIKE',"%$name%");
    }

    public function scopeDeleted($query,$category_status){
        if($category_status=='DELETED')
            return $query->onlyTrashed();
    }
}
