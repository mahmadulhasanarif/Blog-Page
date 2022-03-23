<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Page;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $this->data['categories'] = Category::all();
        $this->data['pages'] = Page::all();
        $this->data['posts'] = Post::all();
        return view('frontend.pages.page', $this->data);
    }
    
}
