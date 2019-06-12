<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public $comment;

    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }

    public function index()
    {
        $comments=$this->comment->wherePost_id($id)->get();

        return view('comments.all',compact('comments'));
    }


    public function store(Request $request)
    {
        $this->comment->create($request->all()+['user_id'=>$request->user()->id]);

        return back();
    }
}
