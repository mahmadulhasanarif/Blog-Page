@extends('admin.admin_all.admin_layout.layout')

@section('content')
<div class="container">
    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{session('message')}}
        </div>
    @endif
    
    <h1 class="h3 mb-2 text-gray-800">Contact Message table</h1>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Message Details Data</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <td>{{$contact->name}}</td>
                    </tr>
                    
                    <tr>
                        <th>Email </th>
                        <td>{{$contact->email}}</td>
                    </tr>
                    
                    
                    <tr>
                        <th>Subject</th>
                        <td>{{$contact->subject}}</td>
                    </tr>
                    
                    <tr>
                        <th>Message</th>
                        <td>{{$contact->message}}</td>
                    </tr>
                    
                </thead>
                <form action="{{url('admin/contact/'.$contact->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">Delete</button>
                </form>
            </table>
        </div>
    </div>
</div>
</div>
@endsection
