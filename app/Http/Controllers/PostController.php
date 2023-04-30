<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Route;


class PostController extends Controller
{
    public function index()
    {
        $post = Post::find(1);
        $category = Category::find(1);
        $tag = Tag::find(1);
        dd($tag->posts);
        return view('posts', compact('posts'));

    }

    public function create()
    {
        $postsArr =[
            [
                'title' => 'some title of the post',
                'content' => 'some interesting conrent',
                'image' => 'imageblabal.jpeg',
                'likes' => 20,
                'is_published' => 1,
            ],
            [
                'title' => 'another title of the post',
                'content' => 'another some interesting conrent',
                'image' => 'another imageblabal.jpeg',
                'likes' => 50,
                'is_published' => 1,
            ]
        ];

        /*foreach ($postsArr as $item)
        {
            dump($item);
            Post::create($item);
        }*/

         dd('created');
    }

    public function update()
    {
       $post = Post::find(6);
       
       $post->update([
                //'title' => 'updated',
                //'content' => 'updated',
                //'image' => 'updated',
                'likes' => 777,
                //'is_published' => 0,

       ]);
       dd('updated');
    }

    public function delete()
    {
        $post = Post::find(2);
        $post->delete();
        dd('deleted');
    }
    public function restore() //востановление в базе
    {
        $post = Post::withTrashed()->find(2);
        $post->restore();
        dd('restored');
    }

    /*
    firstOrCreate (условие) - проверка на дубликаты 
    updateOrCreate - так же проверит на дубликаты
    */

    public function firstOrCreate()
    {

        $anotherPost = 
        [
            'title' => 'some post',
            'content' => 'some content',
            'image' => 'some imageblabal.jpeg',
            'likes' => 5000,
            'is_published' => 1,
        ];

        $post = Post::firstOrCreate(
            [
            'title'=> 'some post'
            ],
            [
                'title' => 'some post',
                'content' => 'some content',
                'image' => 'some imageblabal.jpeg',
                'likes' => 123,
                'is_published' => 1,
            ]);
            dump($post->content);
            dd('finished');
    }
    public function updateOrCreate()
    {
        $anotherPost = 
        [
            'title' => 'xd',
            'content' => 'sd',
            'image' => 'sd.jpeg',
            'likes' => 10,
            'is_published' => 0,
        ];
        $post = Post::updateOrCreate([
            'title' => 'xd',
        ],$anotherPost
        );
        dump($post->likes);
        dd('done');
    }
}

