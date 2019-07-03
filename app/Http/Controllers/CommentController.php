<?php

namespace App\Http\Controllers;

use App\Comment,App\Article;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
            Comment::create($request->all());
            $comments=Comment::where('article_id',$request->article_id)->orderBy('created_at','desc')->get();
            $view=(String)view('article.comment_list')->with('comment',$comments)->render();
            return response()->json(['view'=>$view,'status','success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
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
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        // if ($request->ajax()){
        //     $comment=Comment::with('article_id','content','user')->where('article_id','like',
        //     '%'.$request->search.'%')->orderBy('created_at','desc')->paginate(4);
        //     $view=(String)view('article_show')->with('comment',$article)->render();
        //     return response()->json(['view'=>$view,'status','success']);
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
