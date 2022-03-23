@extends('admin.admin_all.admin_layout.layout')

@section('content')
    <div class="container">
        <a class="btn btn-success" href="{{ url('admin/post') }}">Back To Post</a>
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">

                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-10">
                        <div class="p-5">
                            <div class="text-center">

                                @if ($post->id)
                                    <p class="h4 text-gray-900 mb-4"> Admin Post Edit </p>
                                @else
                                    <p class="h4 text-gray-900 mb-4">Admin Post Create</p>
                                @endif

                            </div>
                            <form  action="{{ url('admin/post/'.$post->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                @if ($post->id)
                                    @method('put')
                                @endif
                                <div class="form-group">
                                    <input type="text" name="title" value="{{ old('title', $post->title) }}"
                                        class="form-control form-control-user @error('title') is-invalid @else is-valid @enderror"
                                        id="exampleTitle" placeholder="Enter Your Title">
                                </div>


                                <div class="form-group">
                                    <input type="text" name="status" value="{{ old('status', $post->status) }}"
                                        class="form-control form-control-user @error('status') is-invalid @else is-valid @enderror"
                                        id="exampleInputstatus" placeholder="Enter Your Status">
                                        
                                </div>
                                
                                <div class="form-group">
                                    <select name="category_id" class="form-control @error ('category_id') is-invalid @enderror " >
                                        <option value="">select category</option>
                                        
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}" @if ($category->id == old('category_id')) selected @endif>{{$category->name}}</option>
                                        @endforeach
                                        
                                    </select>
                                </div>

                                <div class="form-group">
                                    <textarea type="text" rows="1" name="sort_desc"
                                        class="form-control form-control-user @error('sort_desc') is-invalid @else is-valid @enderror"
                                        id="exampleSortDescription"
                                        placeholder="Sort Description">{{ old('sort_desc', $post->sort_desc) }}</textarea>
                                </div>

                                <div class="form-group">
                                    <textarea type="text" rows="3" name="long_desc"
                                        class="form-control form-control-user @error('long_desc') is-invalid @else is-valid @enderror"
                                        id="exampleSortDescription"
                                        placeholder="Long Description">{{ old('long_desc', $post->long_desc) }}</textarea>
                                </div>

                                @if ($post->image)
                                    <img src="{{ $post->image }}" alt="" width="100px">
                                @endif

                                <div class="form-group">
                                    <input type="file" name="image"
                                        class="form-control form-control-user @error('image') is-invalid @else is-valid @enderror"
                                        id="exampleSortDescription" placeholder="Enter Your Image">
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Submit
                                </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
