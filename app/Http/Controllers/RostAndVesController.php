<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RostAndVes;
use App\Models\Post;


class RostAndVesController extends Controller
{
    public function index(){
        $inv = Post::where('is_pulished', 0)->first();
            dump($inv->title);
        
        dd('end');
    }
}
