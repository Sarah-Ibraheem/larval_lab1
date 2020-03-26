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
}
