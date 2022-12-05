<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{

    public function comment(Request $request)
    {
        $id      = $request->id;
        $name    = $request->name;
        $email   = $request->email;
        $date    = date('Y-m-d');
        $comment = $request->input('comment');

        DB::table('comments')->insert([
            'comment_post_id'  =>$id,
            'name'             =>$name,
            'email'            =>$email,
            'comment'          =>$comment,
            'date'             =>$date,
        ]);

        return redirect()->back();
    }

    public function all_comments()
    {
        $comments = Comment::all();
        return view('backend.comments.all_comments' , compact('comments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }


    public function destroy($id)
    {
        $comments = Comment::find($id);
        $comments->delete();

        return redirect()->route('all_comments');
    }
}
