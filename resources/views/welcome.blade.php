@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/main_styles.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Italianno|Lato:400,700|Raleway:400,700,900" rel="stylesheet">
    
    <title>CARS</title>
    
  </head>
  <body>
    <a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><i class="fa fa-bars"></i></a>
    <div id="sidebar-wrapper">
            <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
        <ul class="sidebar-nav">
            @foreach ($menu as  $value)
            <li><a href="{{$value->link}}">{{$value->title}}</a>
            </li>
            @endforeach
        </ul>
    </div>
            <a class="navbar-brand" href="#">AUṪO</a>
        
    <!-- carousel -->
     
    <div class="">
      
      <div id="main-slider" class="carousel slide" data-ride="carousel">
        
        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            @foreach ($slider as  $value)
            <img src="{{$value->image}}" class="d-block img-fluid" alt="wq">

            <div class="carousel-caption d-none d-md-block">
              <h3 class="text-uppercase">{{$value->date}}</h3>
              <p class="">{{$value->description}}</p>
            </div>
            @endforeach
          </div>
           
        </div>
       
        <a href="#main-slider" class="carousel-control-prev" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#main-slider" class="carousel-control-next" data-slide="next">
          <span class="arrow"><img src="img/arrow.svg"></span>
        </a>

      </div>
      
    </div>

    <!-- endCarousel -->
    <!-- newWeb -->
    <section class="new-website py-5">
      <h2 class="text-center text-uppercase">The corner garage for collector cars</h2>
    </section>
    <!-- endWeb -->
    <!-- imgs-->
    <div class="container pb-5">
      <div class="row">
        @foreach ($service as  $value)
        <div class="col-md-4 col-12 text-center mb-4 mb-md-0">
          <div class="image-links">
            <a href="{{$value->link}}">
              <img src="{{$value->image}}" class="image-fluid">
              <p>{{$value->title}}</p>
            </a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <div class="container-fluid margin-bottom">
      <img src="img/background.svg">
    </div>
    <!-- imgs end -->
    <!-- map -->
  <div class="container mb-5">
    <section class="map-section">
      <div class="container map-height reset-padding">
        <iframe class="margin-top-bottom" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2978.1362824355556!2d44.78283021484294!3d41.71757797923522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404472d4fa5b02d7%3A0xced15c2c7992ceb5!2sGeoLab!5e0!3m2!1sen!2sge!4v1508590724822" width="100%" height="800px" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </section>
    <div class="row">
      <div class="col-8 offset-2 col-md-8 offset-md-2 map-info pt-4">
        
      </div>
    </div>
  </div>
  <!-- mapEnd -->

    <!-- foooter -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <hr class="w-100">
          <div class="col-8 offset-2 col-md-8 offset-md-2">
            <p class="d-inline">&copy; copyright 2017</p>
            <p class="d-inline float-right">Front-end: Temo Chkhaidze<br> Back-end: Tamar Mekhrishvili</p>
          </div>
        </div>
      </div>
    </footer>


    <script src="js/jquery.slim.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script>
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>
  </body>
</html>