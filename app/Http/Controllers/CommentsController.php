<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Prophecy\Argument\Token\ObjectStateToken;

class CommentsController extends Controller
{
    public function storeComment(Post $id)
    {
        $post = $id;
        $attributes = request()->validate([
            'user_id' => 'required',
            'post_id' => 'required',
            'content' => 'required'
        ]);


        Comment::create($attributes);

        return redirect()->route('post', ['id' => $post->id])->with('success', 'Comment added successfully!');
    }
}
