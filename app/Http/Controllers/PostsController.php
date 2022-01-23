<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(Request $request)
    {
        return view('posts.index', [
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
        return view('posts.index',[
            'posts' => $posts,
            'key' => $key
        ]);
    }

    public function show($id)
    {
        $post = Post::where('id',$id)->first();
        if($post){
            return view('posts.post',[
                'post' => $post
            ]);
        }
        return redirect()->back();
    }

    public function like(Request $request){
        $music = Post::find($request->id);
        $id_user = auth()->user()->id;
        $like = 0;
        if($music->liked($id_user))
            $music->unlike($id_user);
        else{
            $music->like($id_user);
            $like = 1;
        }
        $music->save();
        return response()->json([
            'like' => $like,
            'like_total' => $music->likeCount,
        ]);
    }
}
