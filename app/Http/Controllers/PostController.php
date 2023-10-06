<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller{
    public function index(){
        $data = Post::get();
        return view('user.index', compact('data'));

    }

    public function show($id){
        $data = Post::find($id);
        return view('user.show',compact('data'));
    }

    public function create(){
        return view('user.create');
    }

    public function store(Request $request){
        $post = new Post();
        $post->user_id = 1;
        $post->title = $request->title;
        $post->excerpt = $request->excerpt;
        $post->body = $request->body;
        $post->save();
        return redirect()->route('post.index');
    }

    public function destroy($id){
        $data = Post::find($id)->delete();
        return redirect()->route('post.index');
    }

    public function edit($id){
        $post =  Post::find($id);
        return view('user.edit',compact('post'));
    }

    public function update(Request $request, $id){
        $post = Post::find($id);
        $post->user_id = 1;
        $post->title = $request->title;
        $post->excerpt = $request->excerpt;
        $post->body = $request->body;
        $post->save();
        return redirect()->route('post.index');
    }
}
