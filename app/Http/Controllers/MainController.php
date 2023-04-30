<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Route;


class MainController extends Controller
{
    public function index()
    {
        return view('main');

    }
}

