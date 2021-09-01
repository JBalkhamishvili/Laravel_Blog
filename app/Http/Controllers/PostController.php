<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $error = false;
        $posts = Post::latest()->whereNull('deleted_at')->filter(request(['search']))->paginate(10);

        if (count($posts) == 0) {
            $error = true;
        }
        return view('posts/showPosts', [
            'posts' => $posts,
            'error' => $error
        ]);

        /*        $posts = Post::latest();

        if(request('search')){
            $posts
                ->where('title', 'like', '%'.request('search').'%')
                ->orwhere('short_content', 'like', '%'.request('search').'%')
                ->orwhere('content', 'like', '%'.request('search').'%');
        }

        return $posts->get();*/
    }

    public function storePost()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'short_content' => 'required',
            'content' => 'required',
            'user_id' => 'required'
        ]);


        Post::create($attributes);

        return redirect('/posts')->with('success', 'Post Added Successfully!');
    }

    public function showadPost(Post $id)
    {
        return view('posts/adPost', [
            'post' => $id,
        ]);
    }

    public function editPost(Request $request, Post $id)
    {

        $post = $id;
        $post->title = $request->edit_title;
        $post->short_content = $request->edit_short_content;
        $post->content = $request->edit_content;
        $post->save();

        return redirect()->route('post', ['id' => $post->id])->with('success', 'Post has been updated successfully!');
    }

    public function deletePost(Post $id)
    {
        $post = $id;
        $post->delete();
        return redirect('/posts')->with('success', 'Post has been deleted successfully!');

    }

    public function showPost(Post $id)
    {
        return view('posts/showPost', [
            'post' => $id,
        ]);
    }
}
