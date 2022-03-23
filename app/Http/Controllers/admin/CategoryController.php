<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function index()
    {
        $this->data ['categories'] = Category::all();
        return view('admin.admin_all.admin_category.category', $this->data);
    }
    
    public function create()
    {
        return view('admin.admin_all.admin_category.create');
    }
    
    public function store(Request $request)
    {
        $this->data = $request->all();
        Category::create($this->data);
        Session::flash('message', 'Category Data Successfully Added');
        return redirect()->to('/admin/category');
    }
    
    public function destroy(Category $category)
    {
        $category->delete();
        Session::flash('message', 'Category Data Successfully Deleted');
        return redirect()->to('admin/category');
    }
}
