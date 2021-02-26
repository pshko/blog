<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCommentRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'content' => ['required'],
            'post_id' => ['required', 'exists:posts,id'],
            'comment_id' => ['nullable', 'exists:comments,id']
        ];
    }
}
