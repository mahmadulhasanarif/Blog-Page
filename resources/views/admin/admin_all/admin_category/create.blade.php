@extends('admin.admin_all.admin_layout.layout')

@section('content')
<div class="container">
    <a class="btn btn-success" href="{{url('admin/category')}}">Back To Category</a>
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0"> 
            
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-10">
                    <div class="p-5">
                        <div class="text-center">
                            <p class="h4 text-gray-900 mb-4">Admin Category Create</p>
                        </div>
                        <form class="user" action="{{url('/admin/category')}}" method="POST" enctype="multipart/form-data">
                          @csrf
                                <div class="form-group">
                                    <input type="text" name="name" value="{{old('name')}}" class="form-control form-control-user @error ('name') is-invalid @else is-valid @enderror" id="exampleFirstName"
                                        placeholder="Enter Your Name">
                                </div>
                                                     
                            <button value="submit" type="submit" class="btn btn-primary btn-user btn-block">
                                Submit
                            </button>

                        </form>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection