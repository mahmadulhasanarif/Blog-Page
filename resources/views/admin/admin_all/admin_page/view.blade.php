@extends('admin.admin_all.admin_layout.layout')

@section('content')
<div class="container">
    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{session('message')}}
        </div>
    @endif
    
    <h1 class="h3 mb-2 text-gray-800">Page Details table</h1>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Details Data</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Title</th>
                        <td>{{$page->name}}</td>
                    </tr>
                    
                    <tr>
                        <th>Category</th>
                        <td>{{$page->category->name}}</td>
                    </tr>
                    
                    <tr>
                        <th>Slug</th>
                        <td>{{$page->slug}}</td>
                    </tr>
                    
                    <tr>
                        <th>Status</th>
                        <td>{{$page->status}}</td>
                    </tr>
                    
                    <tr>
                        <th>Description</th>
                        <td>{{$page->description}}</td>
                    </tr>
                    
                    
                </thead>
                <form action="{{url('admin/page/'.$page->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">Delete</button>
                    <a class="btn btn-warning" href="{{url('admin/page/'.$page->id.'/edit')}}">Edit</a>
                </form>
            </table>
        </div>
    </div>
</div>
</div>
@endsection
