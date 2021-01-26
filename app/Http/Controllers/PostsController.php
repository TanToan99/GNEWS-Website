<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(Request $request)
    {
        return view('home.posts.index', [
            'posts' => Post::latest()->paginate(10)
        ]);
    }

    public function search(Request $request)
    {
        $key = $request->keysearch;
        if($request->groupby = '0'){
            $posts = Post::latest()->where('title', 'like', '%' . $key . '%')->paginate($request->paginate);
        }else{
            $posts = Post::oldest()->where('title', 'like', '%' . $key . '%')->paginate($request->paginate);
        }
        return view('home.posts.index',[
            'posts' => $posts,
            'key' => $key
        ]);
    }

    public function show($id)
    {
        $post = Post::where('id',$id)->first();
        if($post){
            return view('home.posts.post',[
                'post' => $post
            ]);
        }
        return redirect()->back();
    }
}
