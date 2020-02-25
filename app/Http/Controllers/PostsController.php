<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     * GET /posts
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = \App\Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     * GET /posts/create
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     * POST /posts
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'max:100', 'min:3'],
            'detail' => ['required', 'max:500', 'min:3']
        ]);
        $post = new Post;
        $post->title = $request->input('title');
        $post->detail = $request->input('detail');
        $post->save();
        return redirect()->route('posts.show', ['post' => $post->id]);
    }

    /**
     * Display the specified resource.
     * GET /posts/$id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', ['post' => $post]);

    }

    /**
     * Show the form for editing the specified resource.
     * GET /posts/$id/edit
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     * PUT /posts/id
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'max:100', 'min:3'],
            'detail' => ['required', 'max:500', 'min:3']
        ]);
        $post = Post::findOrFail($id);
        $post->title = $request->input('title');
        $post->detail = $request->input('detail');
        $post->save();
        return redirect()->route('posts.show', ['post' => $post->id]);
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /posts/$id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('posts.index');
    }

    public function commentStore(Request $request, $id) {
        $post = Post::findOrFail($id);
        $comment = new Comment;
        $comment->post_id = $post->id;
        $comment->detail = $request->input('detail');
        $comment->save();
        return redirect()->route('posts.show', ['post' => $post->id]);
    }

}
