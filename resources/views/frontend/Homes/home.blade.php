@extends('frontend.layout.layout')

@section('content')
        <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text">
        <div class="container-fluid">
          <div class="owl-banner owl-carousel">
            <div class="item">
              <img src="frontend_asset/assets/images/banner-item-01.jpg" alt="">
              <div class="item-content">
                <div class="main-content">
                  <div class="meta-category">
                    <span>Fashion</span>
                  </div>
                  <h4>Morbi dapibus condimentum</h4>
                  <ul class="post-info">
                    <li><a >Mahmadul</a></li>
                    <li><a >May 12, 2022</a></li>
                    <li><a >12 Comments</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="frontend_asset/assets/images/banner-item-02.jpg" alt="">
              <div class="item-content">
                <div class="main-content">
                  <div class="meta-category">
                    <span>Nature</span>
                  </div>
                  <h4>Donec porttitor augue at velit</h4>
                  <ul class="post-info">
                    <li><a >Mahmadul</a></li>
                    <li><a >May 12, 2022</a></li>
                    <li><a >12 Comments</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="frontend_asset/assets/images/banner-item-03.jpg" alt="">
              <div class="item-content">
                <div class="main-content">
                  <div class="meta-category">
                    <span>Lifestyle</span>
                  </div>
                  <h4>Best HTML Templates on TemplateMo</h4>
                  <ul class="post-info">
                    <li><a >Mahmadul</a></li>
                    <li><a >May 12, 2022</a></li>
                    <li><a >12 Comments</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="frontend_asset/assets/images/banner-item-04.jpg" alt="">
              <div class="item-content">
                <div class="main-content">
                  <div class="meta-category">
                    <span>Fashion</span>
                  </div>
                  <h4>Responsive and Mobile Ready Layouts</h4>
                  <ul class="post-info">
                    <li><a >Mahmadul</a></li>
                    <li><a >May 12, 2022</a></li>
                    <li><a >12 Comments</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="frontend_asset/assets/images/banner-item-05.jpg" alt="">
              <div class="item-content">
                <div class="main-content">
                  <div class="meta-category">
                    <span>Nature</span>
                  </div>
                  <h4>Cras congue sed augue id ullamcorper</h4>
                  <ul class="post-info">
                    <li><a >Mahmadul</a></li>
                    <li><a >May 12, 2022</a></li>
                    <li><a >12 Comments</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="frontend_asset/assets/images/banner-item-06.jpg" alt="">
              <div class="item-content">
                <div class="main-content">
                  <div class="meta-category">
                    <span>Lifestyle</span>
                  </div>
                  <h4>Suspendisse nec aliquet ligula</h4>
                  <ul class="post-info">
                    <li><a >Mahmadul</a></li>
                    <li><a >May 12, 2022</a></li>
                    <li><a >12 Comments</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Banner Ends Here -->
  

  
  
      <section class="blog-posts">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="all-blog-posts">
                <div class="row">
                    @foreach ($pages as $page)

                    
                  <div class="col-lg-12">
                    <div class="blog-post">
                      <div class="blog-thumb">
                        <div class="embed-responsive embed-responsive-16by9">
                            @if ($page->slug)
                            <iframe class="embed-responsive-item" src="{{$page->slug}}"></iframe>
                            @endif
    
                          </div>
                      </div>
                      <div class="down-content">
                        <span>{{$page->category->name}}</span>
                        <a href="post-details.html"><h4>{{$page->status}}</h4></a>
                        <ul class="post-info">
                          <li><a>Mahmadul</a></li>
                          <li><a href="#">{{$page->created_at}}</a></li>
                          <li><a href="#">Comments</a></li>
                        </ul>
                        <p>Stand Blog is a free HTML CSS template for your CMS theme. You can easily adapt or customize it for any kind of CMS or website builder. You are allowed to use it for your business. You are NOT allowed to re-distribute the template ZIP file on any template collection site for the download purpose. <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">Contact TemplateMo</a> for more info. Thank you.</p>
                        <div class="post-options">
                          <div class="row">
                            <div class="col-6">
                              <ul class="post-tags">
                                <li><i class="fa fa-tags"></i></li>
                                <li><a>Beauty</a>,</li>
                                <li><a>Nature</a></li>
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
                    </div>
                  </div>

                                          
                  @endforeach
                  
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
                          @foreach ($posts as $post)

                        <ul>
                            
                          <li><a href="{{route('post')}}">
                            <h5>{{$post->status}}</h5>
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
                          @foreach ($categories as $category)
                              
                          
                        <ul>
                          <li><a>- {{$category->name}}</a></li>
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