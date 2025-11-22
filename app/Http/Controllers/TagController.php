<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::cursorPaginate(5);

        return view('tag.index', ['tags' => $tags, 'pageTitle' => 'tags']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tag.create', ['pageTitle' => 'Create New Tag']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tag = Tag::findOrFail($id);

        return view('Tag.show', ['tag' => $tag, 'pageTitle' => "Show Tag"]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        return view('tag.edit', [ 'pageTitle' => 'Blog - Edit Tag']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


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
