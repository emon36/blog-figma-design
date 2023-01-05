<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {

        return view('admin.dashboard');

    }


    public function manageBlog()
    {
        $posts = Post::latest()->get();

        return view('admin.blog.index',['posts'=>$posts]);
    }

    public function changePostStatus($id)
    {
        $post = Post::find($id);

        if ($post->status == 1)
        {
            $post->status = 0;
            $post->update();
        }
        else
        {
            $post->status = 1;
            $post->update();
        }

        return redirect()->back();
    }
}
