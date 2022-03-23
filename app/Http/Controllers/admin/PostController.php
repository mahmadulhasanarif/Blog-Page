<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Expr\New_;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['posts'] = Post::all();
        return view('admin.admin_all.admin_post.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data ['post'] = New Post();
        $this->data['categories'] = Category::all();
        return view('admin.admin_all.admin_post.form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->data = $request->all();
        if ($request->file('image')){
            $this->data['image'] = Storage::putFile('images', $request->file('image'));
        }
        Post::create($this->data);
        Session::flash('message', 'Post Data Added Successfully');
        return redirect()->to('/admin/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $this->data['categories'] = New Category();
        $this->data['post'] = $post;
        if ($post->image) {
            $this->data['post']->image = Storage::url($post->image);
        }
        
        return view('admin.admin_all.admin_post.view', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $this->data['post'] = $post;
        if ($post->image){
            $this->data['post']->image = Storage::url($post->image);
        }
        $this->data['categories'] = Category::all();
        return view('admin.admin_all.admin_post.form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->data = $request->all();
        
        $post->title = $this->data['title'];
        $post->status = $this->data['status'];
        $post->sort_desc = $this->data['sort_desc'];
        $post->long_desc = $this->data['long_desc'];
        $post->category_id = $this->data['category_id'];
        if ($request->file('image')){
            if($post->image){
                Storage::delete($post->image);
            }
            $post->image = Storage::putFile('images', $request->file('image'));
        }
        
        $post->save();
        Session::flash('message', 'Post Data Updated Successfully');
        return redirect()->to('admin/post/'.$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if ($post->image){
            Storage::delete($post->image);
        }
        $post->delete();
        Session::flash('message', 'Post Data Deleted Successfully');
        return redirect()->to('/admin/post');
    }
}
