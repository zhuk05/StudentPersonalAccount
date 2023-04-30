<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Route;


class AboutController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('about');

    }
}

