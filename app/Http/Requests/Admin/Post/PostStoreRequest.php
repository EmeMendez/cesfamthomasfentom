<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
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
            'name'          => ['required','unique:posts'],
            'image'         => ['required','mimes:jpg,jpeg,png'],
            'excerpt'       => 'required',
            'body'          => 'required',
            'category'      => 'required|integer',
            'tags'          => 'required|array',
            'body'          => 'required',
            'status'        => 'required|in:DRAFT,APPLY_FOR_PUBLISH'

        ];
    }
}
