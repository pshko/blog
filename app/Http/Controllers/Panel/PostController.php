<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\Panel\Post\CreatePostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class PostController extends Controller
{

    public function index()
    {
        return view('panel.posts.index');
    }


    public function create()
    {
        return view('panel.posts.create');
    }


    public function store(CreatePostRequest $request)
    {
        $categoriesId= Category::whereIn('name', $request->categories)->get()->pluck('id')->toArray();
        if(count($categoriesId) < 1) {
            throw ValidationException::withMessages([
               'categories' => ['دسته بندی یافت نشد.']
            ]);
        }
        $file = $request->file('banner');
        $fileName = $file->getClientOriginalName();
        $file->storeAs('images/banners', $fileName, 'public_files');
        $data = $request->validated();
        $data['banner'] = $fileName;
        $data['user_id'] = auth()->user()->id;
        $post = Post::create(
            $data
        );
        $post->categories()->sync($categoriesId);
        return redirect()->route('posts.index');
    }


    public function show(Post $post)
    {
        //
    }


    public function edit(Post $post)
    {
        return view('panel.posts.edit');
    }

    public function update(Request $request, Post $post)
    {
        //
    }


    public function destroy(Post $post)
    {
        //
    }
}
