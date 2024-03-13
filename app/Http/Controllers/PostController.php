<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('user_posts.layout1.index');
    }

    public function show(string $id) {
        return view('user_posts.layout1.show', ['id' => $id, 'title' => "Post $id Title"]);
    }

    public function create() {
        return view('user_posts.layout1.create');
    }

    public function store(Request $request) {
        //no view as we will save data in data store
        //redirect to posts list
    }

    public function edit(string $id) {
        return view('user_posts.layout1.edit')->with(['id'=> $id]);
    }

    public function update(Request $request, string $id) {
        //no view as we will update data in data store
        //redirect to post show
    }

    public function destroy(string $id) {
        //no view as we will data from data store
        //redirect to post list
    }
}
