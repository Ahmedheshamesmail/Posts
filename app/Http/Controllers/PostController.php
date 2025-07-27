<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
            $postsFromDB=Post::all();

        return view('index', [ 'posts' => $postsFromDB,]);
    }

    public function show($post){
        $SonglePost = Post::findOrFail($post);
        return view('show', ['posts' => $SonglePost]);
    }
}
