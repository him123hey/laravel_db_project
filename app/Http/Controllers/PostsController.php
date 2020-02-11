<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function getPosts(){
        $posts = Post::all();

        return view('post', compact('posts'));
    }
    public function insertpost(Request $request){
        $post = new Post;
        $post -> title = $request->get('title');
        $post -> body = $request->get('description');
        $post -> save();
        return redirect('post');
    }
    public function showFormPost(){
        return view('postForm');
    }
    public function showFormEdit($id){
        $post = Post::find($id);
        return view('editForm', compact('post'));
    }
    public function Edit($id, Request $request){
        $post = Post::find($id);
        $post -> title = $request ->get('title');
        $post -> body = $request ->get('description');
        $post ->save();
        return redirect('post');
    }
}
