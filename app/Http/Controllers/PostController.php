<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
            $postsFromDB=Post::all();

        return view('index', [ 'posts' => $postsFromDB,]);
    }

    public function show(Post $post){
        // $SinglePost = Post::findOrFail($post);
        return view('show', ['post' => $post]);
    }
    public function edit(Post $post){
        // $SinglePost = Post::findOrFail($post);
        $users = User::all();
        return view('edit', ['post' => $post, 'users' => $users]);
    }
public function update(Request $request, Post $post)
{


    // $singlePost = Post::findOrFail($post->id);
    $post->update([
        'title' => $request->title,
        'discription' => $request->discription,
        'user_id'=> $request->user_id,
    ]);

    return redirect()->route('posts.index',)
                     ->with('success', 'Post updated successfully!');
}
public function create()
{
    $users = User::all();
    return view('create', ['users' => $users]);

}
public function store(Request $request){
    $validated = $request->validate(([
        'title' => 'required|string|max:255',
        'discription' => 'required|string',
        'user_id' => 'required|exists:users,id',
    ]));
    $newPost = Post::create($validated);
    return redirect()->route('posts.index')
                     ->with('success', 'Post created successfully!');
}

public function destroy(Post $post)
{
    // Post::where('id', $post)->delete();
    // $singlePost = Post::findOrFail($post);
    $post->delete();
    return redirect()->route('posts.index')
                     ->with('success', 'Post deleted successfully!');
}
}