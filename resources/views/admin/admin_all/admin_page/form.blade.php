@extends('admin.admin_all.admin_layout.layout')

@section('content')
<div class="container">
    <a class="btn btn-success" href="{{url('admin/page')}}">Back To Page</a>
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0"> 
            
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-10">
                    <div class="p-5">
                        <div class="text-center">
                               
                                @if ($page->id)
                                    <p class="h4 text-gray-900 mb-4"> Admin Page Edit </p>
                                @else
                                    <p class="h4 text-gray-900 mb-4">Admin Page Create</p>
                                @endif
                            
                        </div>
                        <form class="user" action="{{url('/admin/page/'.$page->id)}}" method="POST" enctype="multipart/form-data">
                          @csrf
                          
                          @if ($page->id)
                            @method('put')
                          @endif
                                <div class="form-group">
                                    <input type="text" name="name" value="{{old('name', $page->name)}}" class="form-control form-control-user @error ('name') is-invalid @else is-valid @enderror" id="exampleFirstName"
                                        placeholder="Enter Your Name">
                                </div>
                                
                                <div class="form-group">
                                    <select name="category_id" class="form-control  @error ('category_id') is-invalid @else is-valid @enderror">
                                        <option value="">--Category Choice</option>
                                        
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}} @if ($category->id == old('category_id')) selected @endif ">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" name="slug" value="{{old('slug', $page->slug)}}" class="form-control form-control-user @error ('slug') is-invalid @else is-valid @enderror" id="exampleslug"
                                        placeholder="Enter Your slug">
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" name="status" value="{{old('status', $page->status)}}" class="form-control form-control-user @error ('title') is-invalid @else is-valid @enderror" id="exampleInputstatus"
                                        placeholder="Enter Your Status">
                                </div>
                                
                                <div class="form-group">
                                    <textarea type="text" rows="3" name="description" class="form-control form-control-user @error ('description') is-invalid @else is-valid @enderror" id="exampleSortDescription"
                                        placeholder="Description">{{old('description', $page->description)}}</textarea>
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