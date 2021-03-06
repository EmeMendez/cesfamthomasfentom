<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Post;
class Tag extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['name'];

   public function posts(){
       return $this->belongsToMany(Post::class)->withTrashed();
   } 

   public function scopeName($query,$name){
    if($name)
        return $query->where('name','LIKE', "%$name%");
   }

   public function scopeDeleted($query,$tag_status){
       if($tag_status == 'DELETED')
        return $query->onlyTrashed();
   }
}
