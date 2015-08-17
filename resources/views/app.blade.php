<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Home</title>
     <meta charset="utf-8">
     <link rel="icon" href="/img/favicon.ico">
     <link rel="shortcut icon" href="/img/favicon.ico" />
     <link rel="stylesheet" href="/css/style.css">
     <link rel="stylesheet" href="/css/slider.css">
     <link rel="stylesheet" href="/css/twitter-bootstrap/bootstrap.min.css">
     <link rel="stylesheet" href="/css/main.css">
     <script src="/js/jquery.js"></script>
     <script src="/js/jquery-migrate-1.1.1.js"></script>
     <script src="/js/superfish.js"></script>
     <script src="/js/jquery.equalheights.js"></script>
     <script src="/js/jquery.easing.1.3.js"></script>
     <script src="/js/tms-0.4.1.js"></script>
     <script>
      $(window).load(function(){
      $('.slider')._TMS({
              show:0,
              pauseOnHover:false,
              prevBu:'.prev',
              nextBu:'.next',
              playBu:false,
              duration:800,
              preset:'fade',
              pagination:true,//'.pagination',true,'<ul></ul>'
              pagNums:false,
              slideshow:8000,
              numStatus:false,
              banners:false,
          waitBannerAnimation:false,
        progressBar:false
      })
      });
     </script>
     <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/img/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
         </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
      <script src="/js/html5shiv.js"></script>
      <link rel="stylesheet" media="screen" href="/css/ie.css">

    <![endif]-->
     </head>
     <body  class="page1">
<!--==============================header=================================-->
 <header>
  <div class="container_12">
    <div class="grid_12">
    <h1><a href="/"><img src="/img/logo.png" alt="Sara  &amp;  Robert Personal Wedding Page"></a> </h1>
         <div class="menu_block">
           <nav  class="" >
                <ul class="sf-menu">
                    @if (Auth::guest())
                       <li><a href="{{ url('/auth/login') }}">Login</a></li>
                       <li><a href="{{ url('/auth/register') }}">Register</a></li>
                    @else
                       {!!\App\Navigation::build(Auth::user())!!}
                    @endif
                 </ul>
           </nav>
           <div class="clear"></div>
           </div>
           <div class="clear"></div>
      </div>
    </div>
</header>
<!--==============================content================================-->
    <div style="padding: 10px">
        @yield('content')
    </div>

<!--==============================footer=================================-->

<footer>
  <div class="container_12">
    <div class="grid_12">
      <div class="socials">
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
      </div>
     <p><a href="/" class="footer_logo"><img src="/img/footer_logo.png"  alt=""></a>  &copy; 2013 | <a href="#">Privacy Policy</a> | Website  designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a></p>
    @yield('js')
    </div>
    <div class="clear"></div>
  </div>
</footer>
</body>
</html>