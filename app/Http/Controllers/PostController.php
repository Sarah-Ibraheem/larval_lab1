<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class PostController extends Controller
{
    public function create()
    {
        $users = User::all();

        return view('posts.create', [
            'users' => $users
        ]);
    }

    public function store()
    {
        $request = request();

        //store the request data in the db
        Post::create([
            'title' => $request->title,
            'description' =>  $request->description,
            'user_id' =>  $request->user_id,
        ]);

        //redirect to /posts
        return redirect()->route('posts.index');
    }

    public function index()
    {
        $posts = Post::all();

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function show()
    {
        $request = request();
        $postId = $request->post;

        $post = Post::find($postId);
        return view('posts.show',[
            'post' => $post,
        ]);
    }

    public function edit()
    {
        $request = request();
        $postId = $request->post;
        $post = Post::find($postId);
        $users = User::all();
        return view('posts.edit',[
            'post' => $post,'users'=>$users
        ]);
    }

    public function update()
    {
        $request = request();
        $postId = $request->post;
        $post = Post::find($postId);
        //store the request data in the db
       $post->update([
            'title' => $request->title,
            'description' =>  $request->description,
            'user_id' =>  $request->user_id,
        ]);

        //redirect to /posts
        return redirect()->route('posts.index');
    }

//     public function destroy()

//    {     $request = request();
//         $postId = $request->post;
//         $post = Post::find($postId);
//         $post->delete();
//         return redirect()->route('posts.index');

//     }




    
}
