<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

use function Pest\Laravel\post;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::simplePaginate(5);

        return view('tag.index', ['tags' => $tags, 'pageTitle' => 'tags']);
    }

    public function create()
    {
        Tag::create([
            'title' => 'Software Engineer ' ,
        ]);
        return redirect('/tags');
    }

    // public function destroy($id)
    // {
    //     Tag::destroy($id);
    //     return redirect('/blog');
    // }

    public function testmanytomany()
    {
        // $post5 = Post::find(15);
        // $post7 = post::find(7);

        // $post5->tags()->attach([3,4]);
        // $post7->tags()->attach(3);

        // return response()->json([
        //     'post5' => $post5->tags,
        //     'post7' => $post7->tags,
        // ]);

        $tag = Tag::find(3);
        $tag->posts()->attach([5]);
        return response()->json([
            'tag' => $tag->title,
            'post' => $tag->posts
        ]);
    }
}
