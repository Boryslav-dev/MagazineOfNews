<?php

namespace App\Http\Controllers;

use App\Enteties\PostEntity;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index() {
        $post = new PostEntity();
        return view('main', ['data'=> $post->getAllPosts()]);
    }
}
