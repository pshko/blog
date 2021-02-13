<?php

namespace App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::paginate(4);
        $ParentCategories = Category::where('category_id', NULL)->get();
        return view('panel.categories.index', compact('categories', 'ParentCategories'));
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
        $ParentCategories = Category::where('category_id', NULL)->where('id', '!=', $category->id)->get();
        return view('panel.categories.edit', compact('category', 'ParentCategories'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'category_id' => ['nullable', 'exists:categories,id']
        ]);
        $category->update(
          $request->only('name', 'category_id')
        );
        session()->flash('status', 'دسته بندی به درستی ویرایش شد!');
        return redirect()->route('categories.index');
    }


    public function destroy(Request $request, Category $category)
    {
        $category->delete();
        session()->flash('status', 'دسته بندی مورد نظر با موفقیت حذف گردید!');
        return back();
    }
}
