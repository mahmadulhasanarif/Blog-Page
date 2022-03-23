@extends('admin.admin_all.admin_layout.layout')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    
        @if (session('message'))
            <div class="alert alert-success" role="alert">
                {{session('message')}}
            </div>
        @endif
      
    <h1 class="h3 mb-2 text-gray-800">Post table</h1>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Post Data table</h6>
            <a style="float: right" class="btn btn-success" href="/admin/page/create">Page Data Add</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($pages as $page)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$page->name}}</td>
                            <td>{{$page->status}}</td>
                            <td>
                             
                                <a href="{{url('admin/page/'.$page->id)}}" class="btn btn-info">view</a>
                               
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection