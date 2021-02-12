<?php

namespace App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $ParentCategories = Category::where('category_id', NULL)->get();
        return view('panel.categories.index', compact('ParentCategories'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', 'unique:categories'],
            'category_id' => ['nullable', 'exists:categories,id']
        ]);
            Category::create(
                $request->only(['name', 'slug', 'category_id'])
            );
            session()->flash('status', 'دسته بندی مورد نظر به درستی ایجاد شد!');
            return back();
    }


    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        //
    }

    public function update(Request $request, Category $category)
    {
        //
    }


    public function destroy(Category $category)
    {
        //
    }
}
