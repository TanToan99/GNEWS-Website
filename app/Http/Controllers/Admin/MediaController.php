<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MediaRequest;
use App\Models\Media;
use App\Models\MediaLibrary;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.media.index', [
            'media' => MediaLibrary::first()->media()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.media.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  MediaRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(MediaRequest $request)
    {
        $image = $request->file('image');
        $name = $image->getClientOriginalName();

        MediaLibrary::first()
            ->addMedia($image)
            ->usingName($name)
            ->toMediaCollection();

        return redirect()->route('admin.media.index')->withSuccess("Create success");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Media $medium): Media
    {
        return $medium;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Media $medium)
    {
        $medium->delete();
        return redirect()->route('admin.media.index')->withSuccess("Delete success");
    }
}
