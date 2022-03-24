<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Stand CSS Blog by TemplateMo</title>

    <!-- Bootstrap core CSS -->
    <link href="frontend_asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/asset/style.css">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="frontend_asset/assets/css/fontawesome.css">
    <link rel="stylesheet" href="frontend_asset/assets/css/templatemo-stand-blog.css">
    <link rel="stylesheet" href="frontend_asset/assets/css/owl.css">
<!--

TemplateMo 551 Stand Blog

https://templatemo.com/tm-551-stand-blog

-->
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand"><h2>Stand Blog<em>.</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="{{Route('about')}}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{Route('page')}}">Blog Page</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{Route('post')}}">Post Details</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{Route('contact')}}">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

@yield('content')

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-icons">
              <li><a href="https://www.facebook.com">Facebook</a></li>
              <li><a href="https://www.twitter.com">Twitter</a></li>
              <li><a href="https://www.behance.com">Behance</a></li>
              <li><a href="https://www.linkdin.com">Linkedin</a></li>
              <li><a href="https://www.dribble.com">Dribble</a></li>
            </ul>
          </div>
          <div class="col-lg-12">
            <div class="copyright-text">
              <p>Copyright 2020 Stand Blog Co.
                    
                 | Design: <a rel="nofollow" href="https://templatemo.com" target="_parent">TemplateMo</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="frontend_asset/vendor/jquery/jquery.min.js"></script>
    <script src="frontend_asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="frontend_asset/assets/js/custom.js"></script>
    <script src="frontend_asset/assets/js/owl.js"></script>
    <script src="frontend_asset/assets/js/slick.js"></script>
    <script src="frontend_asset/assets/js/isotope.js"></script>
    <script src="frontend_asset/assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>