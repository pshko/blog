<?php

namespace App\Http\Requests\Panel\Post;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
{

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
            'title' => ['required', 'string', 'max:255'],
            'banner' => ['required' , 'image'],
            'categories' => ['required', 'array'],
            'categories.*' => ['required', 'string'],
            'content' => ['required'],
        ];
    }
}
