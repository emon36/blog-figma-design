<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $post = new Post();

        $post->title = $request->title;
        $post->user_id = auth()->user()->id;
        $post->content = $request->content;

        $post->save();

        return redirect()->back()->with('success','Post submitted successfully');
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('blog.show',['post'=>$post]);
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        if ($post->user_id == auth()->id() or auth()->user()->role_id == 1 )
        {
            $post->title = $request->title;
            $post->content = $request->content;
            $post->update();
            return redirect()->back()->with('success','Post updated successfully');

        }
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('blog.edit',['post'=>$post]);
    }
}
