<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser()
    {
        $user = auth()->user();
        return $user;
    }


    public function showDashboard()
    {
        $user = $this->getUser();
        $error = false;
        $posts = Post::latest()
            ->whereNull('deleted_at')
            ->where('user_id', $user->id)
            ->filter(request(['search']))
            ->simplepaginate(10);
        if (count($posts) == 0) {
            $error = true;
        }

        if ($user->role_id == 1)
        {

            return view('dashboard.admin', [
                'posts' => $posts,
                'error' => $error
            ]);
        }elseif ($user->role_id == 2)
        {
            return view('dashboard.user', [
                'posts' => $posts,
                'error' => $error
            ]);
        }
    }

}
