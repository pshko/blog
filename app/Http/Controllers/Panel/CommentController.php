<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function index()
    {
        $comments = Comment::with(['user', 'post'])->withCount('replies')->paginate(10);
        return view('panel.comments.index', compact('comments'));
    }


    public function destroy(Comment $comment)
    {
        //
    }
}
