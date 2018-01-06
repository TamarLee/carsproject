<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/main_styles.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
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
          <span class="arrow"><img src="arrow.svg"></span>
        </a>

      </div>
    </div> 
    <!-- endCarousel -->

    <!-- newWeb -->
    <section class="new-website py-5">
      <h2 class="text-center text-uppercase ">The corner garage for collector cars</h2>
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
              </a>
            </div>
          </div>
        @endforeach
      </div>
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
      <div class="col-8 offset-2 col-md-10 offset-md-1 map-info">
        <div class="row">
          <div class="col-md-4 lmao">
            <h3 class="text-uppercase jk pt-5">contact information</h3>
            <div class="socials text-center">
            <h3 class="jk text-center">click to <section class="d-block">view</section></h3>
              <ul class="">
              <li><a href="#" class="fa fa-google-plus"></a></li>
              <li><a href="#" class="fa fa-facebook"></a></li>
              <li><a href="#" class="fa fa-twitter"></a></li>
            </ul>
            </div>
          </div>
          <div class="col-md-8">
            <h2 class="text-uppercase jk pt-5">get in touch</h2>
          <form class="p-5">
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="name">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="email">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="subject">
                  </div>
                  <div class="form-group">
                    <textarea class="form-control textarea" rows="4" placeholder="text" style="overflow:hidden;"></textarea>
                  </div>

              </div>
              <div class="col-md-6">
          <div class="d-inline pr-4">
            <input type="radio" id="radio" name="optradio">
            <label for="radio" class="px-2">&nbsp;&nbsp;male</label>
          </div>
          <div class="d-inline pr-4">
            <input type="radio" id="radio2" name="optradio">
          <label for="radio2" class="px-2">&nbsp;&nbsp;female</label>
          </div>

          <div class="xbox">
            <p class="jk">Sign up for newsletter:</p>
          <input type="checkbox" id="checkbox" name="smh">
          <label for="checkbox" class="d-block">recieve dogs</label>
          <input type="checkbox" id="checkbox1" name="smh">
          <label for="checkbox1" class="d-block">recieve cats</label>
          <input type="checkbox" id="checkbox2" name="smh">
          <label for="checkbox2" class="d-block">recieve zebras</label>
          <input type="checkbox" id="checkbox3" name="smh">
          <label for="checkbox3" class="d-block">recieve vampires</label>
          </div>
          
              </div>
            </div>
            <inut type="submit" class="btn btn-primary btn-black float-right mb-4">send</input>
        </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- mapEnd -->

    <!-- foooter -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <hr class="w-100">
          <div class="col-8 offset-2 col-md-10 offset-md-1">
            <p class="d-inline">&copy; copyright 2018</p>
            <p class="d-inline float-right">created by: Temo chkhaidze & Tamar mekhrishvili</p>
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