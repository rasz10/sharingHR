<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <title>{{$title}}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/templatemo-eduwell-style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/lightbox.css')}}">
<!--

TemplateMo 573 EduWell

https://templatemo.com/tm-573-eduwell

-->
<style type="text/css">
  .header-areax.header-sticky {
      min-height: 80px;
  }
  .header-areax {
    background-image: url(../images/header-bg.png);
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    position: absolute;
    height: 110px;
    top: 0;
    left: 0;
    right: 0;
    z-index: 100;
    -webkit-transition: all .5s ease 0s;
    -moz-transition: all .5s ease 0s;
    -o-transition: all .5s ease 0s;
    transition: all .5s ease 0s;
}
.fa-edit{
  font-size: 26px;
  color: #dd8eda;
}
.fa-trash{
  font-size: 26px;
  color: #ff3a7b;
}
</style>
  </head>

<body>


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky" style="background-size: none;">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.html" class="logo">
                          Sharing<em>HR</em>
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                        @if(session('username'))
                          <li class="has-sub">
                              <a href="javascript:void(0)">Hai, {{session('username')}}</a>
                              <ul class="sub-menu">
                                  <li><a href="/beranda">Beranda</a></li>
                                  <li><a href="/kodeakses">Kode Akses</a></li>
                                  <li><a href="/logout">Logout</a></li>
                              </ul>
                          </li>
                        @else
                          <li class="scroll-to-section"><a href="/login">Login</a></li> 
                        @endif
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->


  <section class="contact-us" id="contact-section" style="padding-top: 0px;margin-top: 110px;">
    <div class="container">
      <div class="row">

        @yield('content')
        
        <div class="col-lg-12">
          <p class="copyright">Copyright © 2022 PT Asuransi Umum Bumiputera Muda 1967. All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="{{URL::asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{URL::asset('assets/js/isotope.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/owl-carousel.js')}}"></script>
    <script src="{{URL::asset('assets/js/lightbox.js')}}"></script>
    <script src="{{URL::asset('assets/js/tabs.js')}}"></script>
    <script src="{{URL::asset('assets/js/video.js')}}"></script>
    <script src="{{URL::asset('assets/js/slick-slider.js')}}"></script>
    <script src="{{URL::asset('assets/js/custom.js')}}"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</html>