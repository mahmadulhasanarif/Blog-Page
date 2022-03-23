@extends('frontend.layout.layout')

@section('content')
    <div class="heading-page header-text">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>Post Page</h4>
                            <h2>Single blog post</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Banner Ends Here -->

    <section class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-content">
                        <div class="row">
                            <div class="col-lg-8">
                                <span>Stand Blog HTML5 Template</span>
                                <h4>Creative HTML Template For Bloggers!</h4>
                            </div>
                            <div class="col-lg-4">
                                <div class="main-button">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-posts grid-system">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="all-blog-posts">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="blog-post">
                                    @foreach ($posts as $post)
                                    <div class="blog-thumb">
                                            <img src="{{Storage::url($post->image)}}" width="200px" alt="">
                                    </div>
                                    <div class="down-content">
                                        <span>{{$post->category->name}}</span>
                                        <a href="post-details.html">
                                            <h4>Aenean pulvinar gravida sem nec</h4>
                                        </a>
                                        <ul class="post-info">
                                                <li>Admin</li>
                                                <li>Published: {{$post->created_at}}</li>
                                            </ul>
                                        <p>{{$post->long_desc}}</p>
                                        <div class="post-options">
                                            <div class="row">
                                                <div class="col-6">
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-tags"></i></li>
                                                        <li>Best Templates,</li>
                                                        <li> TemplateMo </li>
                                                    </ul>
                                                </div>
                                                <div class="col-6">
                                                    <ul class="post-share">
                                                        <li><i class="fa fa-share-alt"></i></li>
                                                        <li><a href="https://www.facebook.com">Facebook</a>,</li>
                                                        <li><a href="https://www.twitter.com"> Twitter</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            
                            {{-- comment --}}
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sidebar-item search">
                                    <form id="search_form" name="gs" method="GET" action="#">
                                        <input type="text" name="q" class="searchText" placeholder="type to search..."
                                            autocomplete="on">
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="sidebar-item recent-posts">
                                    <div class="sidebar-heading">
                                        <h2>Recent Posts</h2>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            @foreach ($posts as $post)
                                            <li><a>
                                                <h5>{{$post->status}}</h5>
                                                <span>{{$post->created_at}}</span>
                                            </a></li>
                                            @endforeach
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            {{-- Category show --}}
                            
                            <div class="col-lg-12">
                                <div class="sidebar-item categories">
                                    <div class="sidebar-heading">
                                        <h2>Categories</h2>
                                    </div>
                                    <div class="content">
                                        @foreach ($categories as $category)
                                        <ul>
                                            <li><b>- {{$category->name}}</b></li>
                                   
                                        </ul>
                                        @endforeach
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                                <div class="sidebar-item tags">
                                    <div class="sidebar-heading">
                                        <h2>Tag Clouds</h2>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            <li><a >Lifestyle</a></li>
                                            <li><a >Creative</a></li>
                                            <li><a >HTML5</a></li>
                                            <li><a >Inspiration</a></li>
                                            <li><a >Motivation</a></li>
                                            <li><a >PSD</a></li>
                                            <li><a >Responsive</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
