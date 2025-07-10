<?php

namespace App\Http\Controllers;

use App\Models\Comment ;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $data = Comment::simplePaginate(5) ;

        return view('Comment.index' , ['comments' => $data , 'pageTitle' => 'Blog']); ;
    }

    public function create()
    {
        Comment::factory(100)->create();


        return redirect('/blog');
    }
}
