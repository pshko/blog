<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $postCount = Post::count();
        $categoryCount = Category::count();
        $commentCount = Comment::count();
        if(auth()->user()->role === 'author') {
            $postCount = Post::where('user_id', auth()->user()->id)->count();
            $commentCount = Comment::whereHas('post', function ($query) {
                return $query->where('user_id', auth()->user()->id);
            })->count();
        }
        return view('panel.index', compact('userCount', 'postCount', 'categoryCount', 'commentCount'));
    }
}
