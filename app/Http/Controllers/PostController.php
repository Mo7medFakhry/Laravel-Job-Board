<?php

namespace App\Http\Controllers;

use App\Models\Post;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::cursorPaginate(5);

        return view('post.index', ['posts' => $posts, 'pageTitle' => 'Blog']);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('post.show', ['post' => $post, 'pageTitle' => $post->title]);
    }

    public function create()
    {
        Post::factory(30)->create();
        return redirect('/blog');
    }

    public function destroy($id)
    {
        Post::destroy($id);
        return redirect('/blog');
    }
}
