<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     *index
     * @return void
     */

     public function index() {

        $posts = Post::latest()->paginate(5);
        return view("posts.index", compact("posts"));

     }
}
