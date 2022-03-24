@extends('frontend.layout.layout')

@section('content')
        <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
        <section class="page-heading">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="text-content">
                  <h4>Recent Posts</h4>
                  <h2>Our Recent Blog Entries</h2>
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
                      <a href="https://templatemo.com/tm-551-stand-blog" target="_parent">Download Now!</a>
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
                    @foreach ($pages as $page)
                  <div class="col-lg-6">
                    <div class="blog-post">
                        
                      <div style="width: 350px" class="blog-thumb">
                        <div class="embed-responsive embed-responsive-21by9">
                            @if ($page->slug)
                            <iframe class="embed-responsive-item" src="{{$page->slug}}"></iframe>
                            @endif
    
                          </div>
                      </div>
                      <div class="down-content">
                        <span>{{$page->category->name}}</span>
                        <a><h4>{{$page->name}}</h4></a>
                        <ul class="post-info">
                          <li><b>Mahamdul</b></li>
                          <li><b>Publish: {{$page->created_at}}</b></li>
                          <li><a>12 Comments</a></li>
                        </ul>
                        <p>{{$page->status}}</p>
                        <div class="post-options">
                          <div class="row">
                            <div class="col-lg-12">
                              <ul class="post-tags">
                                <li><i class="fa fa-tags"></i></li>
                                <li><a href="#">Best Templates</a>,</li>
                                <li><a href="#">TemplateMo</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                  @endforeach
                  <div class="col-lg-12">
                    <ul class="page-numbers">
                      <li><a >1</a></li>
                      <li class="active"><a>2</a></li>
                      <li><a >3</a></li>
                      <li><a ><i class="fa fa-angle-double-right"></i></a></li>
                    </ul>
                  </div>
                  
                </div>
                
              </div>
            </div>
            <div class="col-lg-4">
              <div class="sidebar">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="sidebar-item search">
                      <form id="search_form" name="gs" method="GET" action="#">
                        <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
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
                            <li><a href="{{ Route('post') }}">
                                <b>{{ $post->title }}</b>
                                <h5>{{ $post->sort_desc }}</h5>
                                <span>{{$post->created_at}}</span>
                              </a></li>
                            @endforeach
                          
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="sidebar-item categories">
                      <div class="sidebar-heading">
                        <h2>Categories</h2>
                      </div>
                      <div class="content">
                        <ul>
                            @foreach ($categories as $category)
                                <li><b>- {{$category->name}}</b></li>
                            @endforeach

                          
                        </ul>
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