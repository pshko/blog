<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function index(Request $request)
    {
        if(isset($request->approved)){
            $comments = Comment::where('is_approved', !! $request->approved)->with(['user', 'post'])->withCount('replies')->paginate(8);
        }
        else{
            $comments = Comment::with(['user', 'post'])->withCount('replies')->paginate(10);
        }
        return view('panel.comments.index', compact('comments'));
    }


    public function destroy(Comment $comment)
    {
        $comment->delete();
        session()->flash('status', 'نظر مورد نظر با موفقیت حذف شد!');
        return back();
    }

    public function update(Comment $comment)
    {
        $comment->update([
            'is_approved' => ! $comment->is_approved
        ]);
        session()->flash('status', 'نظر مورد نظر با موفقیت ویرایش شد!');
        return back();
    }
}
