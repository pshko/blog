<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
protected $fillable = [
    'content',
    'comment_id',
    'user_id',
    'post_id',
    'is_approved'
];
protected $with = ['approvedReplies'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    public function replies()
    {
        return $this->hasMany(Comment::class);
    }
    public function getCreateAtInJalali()
    {
        return verta($this->created_at)->format('Y/m/d');
    }

    public function approvedReplies()
    {
        return $this->replies()->where('is_approved', true);
}
    public function getStatusInPersian()
    {
        return !! $this->is_approved
            ? 'تایید شده'
            : 'تایید نشده';
    }
}
