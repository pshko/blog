<?php

namespace App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;

use App\Http\Requests\Panel\Category\CategoryCreateRequest;
use App\Http\Requests\Panel\Category\CategoryUpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::with('parent')->paginate(4);
        $parentCategories = Category::where('category_id', NULL)->get();
        return view('panel.categories.index', compact('categories', 'parentCategories'));
    }


    public function create()
    {
        //
    }


    public function store(CategoryCreateRequest $request)
    {

            Category::create(
                $request->validated()
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
        $parentCategories = Category::where('category_id', NULL)->where('id', '!=', $category->id)->get();
        return view('panel.categories.edit', compact('category', 'ParentCategories'));
    }

    public function update(CategoryUpdateRequest $request, Category $category)
    {
        $category->update(
          $request->validated()
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
