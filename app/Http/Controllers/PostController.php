<?php

namespace App\Http\Controllers;

use App\Models\Post;

use App\Http\Business\CrudPost;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'DESC')->paginate(5);
        return view('dashboard.post.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $crudPost = new CrudPost();
        $categories = $crudPost->getCategoriesToSelecForm();
        return view('dashboard.post.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'       => 'required|max:255',
            'description' => 'required',
            'category_id' => 'required|numeric'
        ]);

        $crudPost = new CrudPost();

        if( ! $crudPost->saveNewPost($request) ) {

            \Alert::danger('Unable to create post, try again.');
            return redirect('dashboard/posts/create');
        }

        \Alert::success('Successfully created Post.');
        return redirect()->route('posts_index');
    }

    /**
     * Show the resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return view('dashboard.post.show', ['post' => Post::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $crudPost = new CrudPost();
        $categories = $crudPost->getCategoriesToSelecForm();

        return view('dashboard.post.edit', [
            'post' => Post::findOrFail($id),
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required'
        ]);

        Post::find($id)->update($request->all());

        \Alert::success('Successfully edited Post.');
        return redirect()->route('posts_index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        \Alert::success('Successfully deleted Post!');
        return redirect()->route('posts_index');
    }
}
