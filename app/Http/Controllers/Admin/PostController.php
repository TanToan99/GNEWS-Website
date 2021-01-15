<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostsRequest;
use App\Models\Media;
use App\Models\MediaLibrary;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index', [
            'posts' => Post::with('author')->latest()->paginate(50)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create', [
            'users' => User::authors()->pluck('name', 'id')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostsRequest $request)
    {
        $image = $request->file('thumbnail');
        $name = $image->getClientOriginalName();
        $id = MediaLibrary::first()
            ->addMedia($image)
            ->usingName($name)
            ->toMediaCollection()->id;;
        $data = $request->only(['title', 'content']);
        $post = Post::create(array_merge($data,[
            'thumbnail_id' => $id,
            'author_id' => auth()->user()->id
        ]));

        return redirect()->route('admin.posts.edit', $post)->withSuccess("Create success");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->only(['title', 'content']);
        if($request->has('thumbnail')){
            $post->thumbnail->delete();
            $image = $request->file('thumbnail');
            $name = md5(time()).'.jpg';;
            $id = MediaLibrary::first()
                ->addMedia($image)
                ->usingName($name)
                ->toMediaCollection()->id;
            $data = array_merge($data,['thumbnail_id' => $id,]);
        }
        $post->update($data);
        return redirect()->route('admin.posts.edit', $post)->withSuccess("Update success");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->thumbnail->delete();
        $post->delete();
        return redirect()->route('admin.posts.index')->withSuccess("Delete post success");
    }
}
