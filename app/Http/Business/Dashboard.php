<?php

namespace App\Http\Business;

use App\Models\Category;
use App\Models\Post;
use App\User;

use Illuminate\Http\Request;

class Dashboard {

    public function getNumCategories()
    {
        $categories = Category::all();
        return $categories->count();
    }

    public function getNumPosts()
    {
        $post = Post::all();
        return $post->count();
    }

    public function getNumUsers()
    {
        $users = User::all();
        return $users->count();
    }
}
