<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Category;
use App\Tag;
class IfDeletedAt implements Rule
{
    public $model;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if($this->model == 'category'){
            return $this->category($value);
        }
        if($this->model == 'tag'){
            return $this->tags($value);
        }
    }

    public function category($value){
        $category = Category::withTrashed()->find($value);        
        return  $category->deleted_at == null ;
    }
    public function tags($array){
        foreach($array as $tag){
            $tag = Tag::withTrashed()->find($tag);
            if($tag->deleted_at == null){
                return true;
            break;
            }
            else{
                return false;
            }
        }
    }
    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return trans('validation.if_deleted_at');
    }
}
