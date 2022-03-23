<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Page;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $this->data['categories'] = Category::all();
        $this->data['posts'] = Post::all();
        $this->data['pages'] = Page::all();
        return view('frontend.Homes.home', $this->data);
    }
}
