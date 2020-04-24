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
        'user_id','category_id','name','excerpt','body','image','created_at'
    ];

    //relations 
    public function user(){
        return $this->belongsTo(User::class)->withTrashed();
    }
    public function category(){
        return $this->belongsTo(Category::class)->withTrashed();
    }

    public function tags(){
        return $this->belongsToMany(Tag::class)->withTrashed();
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

    public function scopeDeleted($query,$post_status){
        if($post_status == 'DELETED')
            return $query->onlyTrashed();
    }
    
    public function scopeAdmin($query){
        if(!auth()->user()->hasRole('admin'))
            return $query->where('user_id',auth()->user()->id);
    }

}
