<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index(Request $request)
    {
        return view('home.forum.index', [
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
        return view('home.forum.index',[
            'posts' => $posts,
            'key' => $key
        ]);
    }
}
