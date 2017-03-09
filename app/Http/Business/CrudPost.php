<?php

namespace App\Http\Business;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CrudPost
{
    public function getCategoriesToSelecForm()
    {
        $cat = array();
        $categories = Category::select('id', 'name')->get();

        foreach ($categories as  $category) {
            $cat[$category->id] = $category->name;
        }

        return $cat;
    }

    public function saveNewPost(Request $request)
    {
        // store
        $post = new Post();
        $post->title       = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category_id;
        $post->user_id     = $user = Auth::id();
        $post->save();

        return true;
    }

}
