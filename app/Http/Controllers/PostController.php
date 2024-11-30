<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('posts.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Post::create([]);

        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $post = Post::find();
        return view('posts.show', ['post' => $post]);
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        $data = [
            'title' => $request->title,
            'content' => $request->content
        ];

        $post->update($data);

        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Post::find($id);
        $post->delete();
        return redirect('/posts');
    }    
}
