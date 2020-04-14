<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TUNTAS - Landing Page </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS-->
     <link rel="stylesheet" href="{{asset('asset/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cardo:400,400i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <!-- Lightbox-->
    <link rel="stylesheet" href="{{asset('asset/vendor/lightbox2/css/lightbox.min.css')}}">
    <!-- Font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Parallax-->
    <link rel="stylesheet" href="{{asset('asset/vendor/onepage-scroll/onepage-scroll.css')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('asset/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('asset/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('asset/favicon.png')}}">
  </head>

  <body>
  <body>
    <div class="main">
      <section class="bg-cover bg-center hero">
        <div class="dark-overlay"></div>
        <div class="position-relative z-index-1">
          <div class="container text-center text-white">
            <p class="font-italic lead">hello, Selamat datang..</p>
            <h1 class="text-uppercase my-4" >TUNTAS</h1 >
            <p class="font-italic lead">I am a nice scrolling template prepared for portfolio, telling stories and short presentations.</p>
            <p class="font-italic lead">I have best results with nice pictures on the background or nice colours.</p>
            <a href="{{ url('/masuk') }}" class="btn" id="buttona">MULAI</a>
          </div>
        </div>
        <div class="scroll-btn link-scroll"><i class="fas fa-angle-dpouble-down"></i></div>
      </section>
      <section id="1">
        <div class="d-flex h-100 align-items-center">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6 mb-4 mb-lg-0">
                <header class="text-center">
                  <h2 class="text-uppercase lined">Tentang</h2>
                </header>
                <p class="lead">TUNTAS ( Tuntutan Masyarakat )</p>
                <p>Impossible considered invitation him men instrument saw celebrated unpleasant. Put rest and must set kind next many near nay. He exquisite continued explained middleton am. Voice hours young woody has she think equal. Estate moment he at on wonder at season little. Six garden result summer set family esteem nay estate. End admiration mrs unreserved discovered comparison especially invitation.</p>
                <p>Delightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving. He or entrance humoured likewise moderate. Much nor game son say feel. Fat make met can must form into gate. Me we offending prevailed discovery.</p>
              </div>
              <div class="col-lg-6"><img src= "{{asset('asset/img/about.jpg')}}" alt="..." class="img-fluid rounded-circle d-block mx-auto"></div>
            </div>
          </div>
        </div>
      </section>
      <section class="bg-gray">
        <div class="d-flex h-100 align-items-center">
          <div class="container">
            <header class="mb-5 text-center">
              <h2 class="text-uppercase lined">Services</h2>
            </header>
            <div class="row text-center">
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="icon mb-3"><i class="fas fa-desktop"></i></div>
                <h4 class="text-uppercase lined lined-compact">Web design</h4>
                <p class="text-mted">Fifth abundantly made Give sixth hath. Cattle creature i be don't them.</p>
              </div>
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="icon mb-3"><i class="fas fa-print"></i></div>
                <h4 class="text-uppercase lined lined-compact">Print</h4>
                <p class="text-mted">Advantage old had otherwise sincerity dependent additions. It in adapted natural.</p>
              </div>
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="icon mb-3"><i class="fas fa-globe-americas"></i></div>
                <h4 class="text-uppercase lined lined-compact">SEO and SEM</h4>
                <p class="text-mted">Am terminated it excellence invitation projection as. She graceful shy.</p>
              </div>
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="icon mb-3"><i class="far fa-lightbulb"></i></div>
                <h4 class="text-uppercase lined lined-compact">consulting</h4>
                <p class="text-mted">Fifth abundantly made Give sixth hath. Cattle creature i be don't them.</p>
              </div>
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="icon mb-3"><i class="far fa-envelope"></i></div>
                <h4 class="text-uppercase lined lined-compact">Email marketing</h4>
                <p class="text-mted">Advantage old had otherwise sincerity dependent additions. It in adapted natural.</p>
              </div>
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="icon mb-3"><i class="fas fa-user"></i></div>
                <h4 class="text-uppercase lined lined-compact">UI &amp; UX</h4>
                <p class="text-mted">Am terminated it excellence invitation projection as. She graceful shy.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="d-flex h-100 align-items-center">
          <div class="container">
            <header class="text-center mb-5">
              <h2 class="text-uppercase lined">Skenario Pelaporan</h2>
            </header>
            <div class="row">
              <div class="col-lg-12 text-center">
                <p>Berikut ini adalah langkah-langkah dalam melakukan pelaporan</p>
              </div>
              <div class="col-lg-4 col-md-6 mb-4"><a href="{{asset('asset/img/portfolio-1.jpg')}}" data-lightbox="image-1" data-title="My caption" class="d-block mb-1"><img src="{{asset('asset/img/portfolio-1.jpg')}}" alt="..." class="img-fluid d-block mx-auto"></a></div>
              <div class="col-lg-4 col-md-6 mb-4"><a href="{{asset('asset/img/portfolio-2.jpg')}}" data-lightbox="image-1" data-title="My caption" class="d-block mb-1"><img src="{{asset('asset/img/portfolio-2.jpg')}}" alt="..." class="img-fluid d-block mx-auto"></a></div>
              <div class="col-lg-4 col-md-6 mb-4"><a href="{{asset('asset/img/portfolio-3.jpg')}}" data-lightbox="image-1" data-title="My caption" class="d-block mb-1"><img src="{{asset('asset/img/portfolio-3.jpg')}}" alt="..." class="img-fluid d-block mx-auto"></a></div>
              <div class="col-lg-4 col-md-6 mb-4"><a href="{{asset('asset/img/portfolio-4.jpg')}}" data-lightbox="image-1" data-title="My caption" class="d-block mb-1"><img src="{{asset('asset/img/portfolio-4.jpg')}}" alt="..." class="img-fluid d-block mx-auto"></a></div>
              <div class="col-lg-4 col-md-6 mb-4"><a href="{{asset('asset/img/portfolio-5.jpg')}}" data-lightbox="image-1" data-title="My caption" class="d-block mb-1"><img src="{{asset('asset/img/portfolio-5.jpg')}}" alt="..." class="img-fluid d-block mx-auto"></a></div>
              <div class="col-lg-4 col-md-6 mb-4"><a href="{{asset('asset/img/portfolio-6.jpg')}}" data-lightbox="image-1" data-title="My caption" class="d-block mb-1"><img src="{{asset('asset/img/portfolio-6.jpg')}}" alt="..." class="img-fluid d-block mx-auto"></a></div>
            </div>
          </div>
        </div>
            <footer class="py-5 mt-5">
                <div class="col-lg-6 text-center text-lg-right">
                  <p class="font-italic mb-0 text-gray">&copy;yomi farel</a></p>
                </div>
              </div>
            </footer>
          </div>
        </div>
      </section>
    </div>
 
    <!-- JavaScript files-->

  <script src="{{asset('asset/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('asset/vendor/onepage-scroll/jquery.onepage-scroll.min.js')}}"></script>
  <script src="{{asset('asset/vendor/lightbox2/js/lightbox.min.js')}}"></script>
  <script src="{{asset('asset/js/front.js')}}"></script>



  </body>
</html>
