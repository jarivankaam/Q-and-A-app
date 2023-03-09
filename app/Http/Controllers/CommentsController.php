<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //write a query to use request to insert a new comment into the database
        $request->validate([
            'message' => 'required',
            'user_id' => 'required',
            'post_id' => 'required'
        ]);

        $comment = new Comment();
        $comment->content = $request->message;
        $comment->user_id = $request->user_id;
        $comment->post_id = $request->post_id;
        $comment->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //write a query to use request to insert a new comment into the database
        $request->validate([
            'message' => 'required',
            'user_id' => 'required',
            'post_id' => 'required'
        ]);

        $comment = Comment::findOrFail($id);
        $comment->content = $request->message;
        $comment->user_id = $request->user_id;
        $comment->post_id = $request->post_id;
        $comment->save();

        return redirect(route('posts.show', $comment->post_id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
