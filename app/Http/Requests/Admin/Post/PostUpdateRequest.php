<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ifDeletedAt;

class PostUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'          => ['required','unique:posts,name,' . $this->post],
            'excerpt'       => 'required',
            'body'          => 'required',
            'category'      => ['required','integer',new ifDeletedAt('category')],
            'tags'          => ['required','array',new ifDeletedAt('tag')],
            'body'          => 'required',
            'status'        => 'required|in:DRAFT,PUBLISHED,APPLY_FOR_PUBLISH'

        ];
    }
}
