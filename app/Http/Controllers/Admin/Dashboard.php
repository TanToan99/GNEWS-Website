<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Models\Post;
use App\Models\User;

class Dashboard extends Controller
{
    public function index(): View
    {
        return view('admin.dashboard.index',[
            'posts' => Post::get(),
            'users' => User::get()
        ]);       
    }
}
