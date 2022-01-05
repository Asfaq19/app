<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index',compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Post $post)
    {
        request()->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post->create([
            'title' => request('title'), 
            'content' => request('content'), 
        ]);

        return redirect('/posts');


    }

    public function show($id)
    {
        //
    }

    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
        // return view('posts.edit',['post' => $post]);
    }

    public function update(Post $post)
    {
        request()->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post->update([
            'title' => request('title'), 
            'content' => request('content'), 
        ]);

        return redirect('/posts');
    }
    
    public function destroy(Post $post)
    {
        $post->delete();
        
        return redirect('/posts');
    }
}
