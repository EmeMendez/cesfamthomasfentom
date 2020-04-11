<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Tag;
use App\Image;
use App\User;
use App\Category;

class Post extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'user_id','category_id','name','excerpt','body','image'
    ];

    //relations 
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
        return $this->hasMany(Image::class);
    }

    //scopes
    public function scopeName($query,$name){
        if($name)
            return $query->where('name','LIKE', "%$name%");
    }

    public function scopeStatus($query, $status){
        if($status)
            return $query->where('status',$status);
    }

    public function scopeCategory($query,$category){
        if($category){
            return $query->where('category_id',$category);
        }
    }

}
