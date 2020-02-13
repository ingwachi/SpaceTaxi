<?php

namespace App\Http\Controllers;

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
        return 'List of all posts';
    }

    /**
     * Show the form for creating a new resource.
     * GET /posts/create
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'Form for create new post';
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
        //
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
        return 'Show content of post number '. $id;
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
        return 'Form for edit post number '.$id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
        //
    }
}
