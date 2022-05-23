<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = DB::table('comments')->where('user_id', Auth::id())->get();

        return view('comments.index', compact('comments'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $property_id = $request['property_id'];

        return view('comments.create', compact('property_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommentRequest $request)
    {
        $comment = new Comment();
        $comment->fill($request->input());
        $comment->user_id = Auth::id();
        $comment->property_id = $request['property_id'];
        $comment->save();

        /* //TODO VERIFICAR RUTA */
        return redirect(url('properties/'.$comment->property_id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comment = Comment::find($id);

        return view('comments.show', compact('comment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment, Request $request)
    {
        $property_id = $request['property_id'];

        return view('comments.edit', compact('property_id', 'comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CommentRequest $request, Comment $comment)
    {
        $comment->fill($request->input());
        $comment->save();

        /* //TODO VERIFICAR RUTA */
        return redirect(url('properties/'.$request['property_id']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment, Request $request)
    {
        $comment->delete();

        /* //TODO VERIFICAR RUTA */
        return redirect(url('properties/'.$request['property_id']));
    }
}