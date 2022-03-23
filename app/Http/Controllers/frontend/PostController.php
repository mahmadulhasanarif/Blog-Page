<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $this->data['categories'] = Category::all();
        $this->data['posts'] = Post::all();
        return view('frontend.posts.post', $this->data);
    }
    
}
