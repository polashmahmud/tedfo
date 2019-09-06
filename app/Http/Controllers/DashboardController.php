<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = Post::with('categories')->orderBy('created_at', 'desc')->take(10)->get();

        return view('dashboard', compact('posts'));
    }
}
