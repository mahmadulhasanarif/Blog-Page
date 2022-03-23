<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Expr\New_;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['pages'] = Page::all();
        return view('admin.admin_all.admin_page.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['page'] = New Page();
        $this->data['categories'] = Category::all();
        return view('admin.admin_all.admin_page.form', $this->data);
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
        Page::create($this->data);
        Session::flash('message', 'Data Added Successfully');
        return redirect()->to('admin/page');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        $this->data['page']=$page;
        $this->data['categories'] = Category::all();
        return view('admin.admin_all.admin_page.view', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        $this->data['page'] = $page;
        $this->data['categories'] = Category::all();
        return view('admin.admin_all.admin_page.form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $this->data = $request->all();
        
        $page->name = $this->data['name'];
        $page->status = $this->data['status'];
        $page->slug = $this->data['slug'];
        $page->description = $this->data['description'];
        $page->save();
        Session::flash('message', 'Data Updated Successfully');
        return redirect()->to('/admin/page/'. $page->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        $page->delete();
        Session::flash('message', 'Data Deleted Successfully');
        return redirect()->to('/admin/page');
    }
}
