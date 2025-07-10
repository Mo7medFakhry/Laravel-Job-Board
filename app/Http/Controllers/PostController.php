<?php

namespace App\Http\Controllers;

use App\Models\Post;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::simplePaginate(5);

        return view ('post.index' , ['posts' => $posts , 'pageTitle' => 'Blog']);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view ('post.show' , ['post' => $post , 'pageTitle' => $post->title]);
    }

    public function create()
    {
        Post::factory(100)->create();
        return redirect('/blog');
    }
}
