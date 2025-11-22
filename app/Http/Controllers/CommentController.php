<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Comment::cursorPaginate(5);

        return view('Comment.index', ['comments' => $data, 'pageTitle' => 'Comments']);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Comment.create', ['pageTitle' => 'Create New Comment']); ;
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
        $comment = Comment::findOrFail($id);

        return view('Comment.show', ['comment' => $comment, 'pageTitle' => "Show Comment"]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        return view('Comment.edit', [ 'pageTitle' => 'Blog - Edit Comment']);
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
}
