
      <!DOCTYPE html>
  
      <!--
      // WEBSITE: https://themefisher.com
      // TWITTER: https://twitter.com/themefisher
      // FACEBOOK: https://www.facebook.com/themefisher
      // GITHUB: https://github.com/themefisher/
      -->

      <html lang="zxx">
      <head>

        <!-- ** Basic Page Needs ** -->
        <meta charset="utf-8">
        <title>{{'title'}}</title>

        <!-- ** Mobile Specific Metas ** -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Agency HTML Template">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
        <meta name="author" content="Themefisher">
        <meta name="generator" content="Themefisher Html5 Agency Template v1.0">
        <!-- bootstrap.min css -->
        <link rel="stylesheet" href="{{asset('site/plugins/bootstrap/bootstrap.min.css')}}">
        <!-- Icon Font Css -->
        <link rel="stylesheet" href="{{asset('site/plugins/themify/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('site/plugins/fontawesome/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('site/plugins/magnific-popup/magnific-popup.css')}}">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{asset('site/plugins/slick/slick.css')}}">
        <link rel="stylesheet" href="{{asset('site/plugins/slick/slick-theme.css')}}">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="{{asset('site/css/style.css')}}">
        <!--Favicon-->
        <link rel="icon" href="{{asset('site/images/favicon.png')}}" type="image/x-icon">
        <!-- datatable -->
        <link href="{{asset('auth/plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css')}}" rel="stylesheet" />
      </head>
      <style>
        .product-container {
        display: flex;
        flex-wrap: wrap;
      }
      .card {
        flex: 0 0 33.33%; /* Each card will take up one-third of the container width */
        padding: 10px; /* Add some padding between cards */
      }

          .pagination .render-link {
              font-size: 14px;
          }


         
.custom-img {
    width: 200px; /* Adjust the width as desired */
    height: auto; /* Automatically adjust the height based on the aspect ratio */
}

      </style>
      <body>

      <!-- Header Start -->


      <nav class="navbar navbar-expand-lg navbar-light bg-danger white">
        <a class="navbar-brand" href="{{ route('home') }}">Shopping</a> 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Laptops</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Mobiles</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Watches</a>
            </li> 
            
          </ul>
          <a href="{{url('cart')}}"><i class="fas fa-shopping-cart mr-5">
        <sup style="color: black"> </sup>
      </i></a>
          <div class="navbar-nav">
            <form class="form-inline my-2 my-lg-0" action="{{ url('product.search') }}" method="get">
              <input class="form-control mr-sm-2 custom-width" name="query" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 btn-sm my-sm-0 text-white" type="submit">Search</button>
              <div class="navbar-nav">
            <li class="nav-item dropdown text-white ml-5">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v"></i>
              </a>
              <div class="dropdown-menu text-white" aria-labelledby="navbarDropdown">
              <form  id="logout-form" action="{{route('logout')}}" method="post">
             <a id="logout-button" class="dropdown-link-item" href="javascript:void(0)"> Log Out </a>
               @csrf
            </form>
              </div>
            </li>  
          </div>
            </form>
          </div>

          <div class="navbar-nav">
            <a class="nav-link text-white" href="#">

            </a>
          </div>
        </div>
      </nav>

      <!-- Header Close -->

      @yield('content')

      <footer class="footer section">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="widget">
                <h4 class="text-capitalize mb-4">Company</h4> 
                <ul class="list-unstyled footer-menu lh-35">
                  <li><a href="about.html">Terms & Conditions</a></li>
                  <li><a href="about.html">Privacy Policy</a></li>
                  <li><a href="cobtact.html">Support</a></li>
                  <li><a href="cobtact.html">FAQ</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
              <div class="widget">
                <h4 class="text-capitalize mb-4">Quick Links</h4>

                <ul class="list-unstyled footer-menu lh-35">
                  <li><a href="">About</a></li>
                  <li><a href="service.html">Services</a></li>
                  <li><a href="blog-grid.html">Blogs</a></li>
                  <li><a href="">viewContact</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mx-auto">
              <div class="widget">
                <h4 class="text-capitalize mb-4">Subscribe Us</h4>
                <p>Subscribe to get latest news article and resources </p>

                <form action="#" class="sub-form">
                  <input type="text" class="form-control mb-3" placeholder="Subscribe Now ...">
                  <a href="#" class="btn btn-main btn-small">subscribe</a>
                </form>
              </div>
            </div>

            <div class="col-lg-3 col-sm-6">
              <div class="widget">
                <div class="logo mb-4">
                  <h3></span></h3>
                </div>
                <h6><a href="mailto:support@gmail.com">nadeemkhanshar50@gmail.com</a></h6>
                <a href="tel:+23-345-67890"><span class="text-color h4">+923022613382</span></a>
              </div>
            </div>
          </div>

          <div class="footer-btm pt-4">
            <div class="row">
              <div class="col-lg-6">
                <div class="copyright">
                  Copyright &copy; 2023, Designed &amp; Developed by <a href=""
                    >Nadeem ali shar</a>
                </div>
              </div>
              <div class="col-lg-6 text-left text-lg-right">
                <ul class="list-inline footer-socials">
                  <li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i class="fab fa-facebook-f mr-2"></i>Facebook</a></li>
                  <li class="list-inline-item"><a href="https://twitter.com/themefisher"><i class="fab fa-twitter mr-2"></i>Twitter</a></li>
                  <li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i class="fab fa-pinterest-p mr-2 "></i>Pinterest</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>

      <!--Scroll to top-->
      <div id="scroll-to-top" class="scroll-to-top">
        <span class="icon fa fa-angle-up"></span>
      </div>
      <!-- 
      Essential Scripts
      =====================================-->
      <!-- Main jQuery -->
      <script src="{{asset('site/plugins/jquery/jquery.min.js')}}"></script>
      <!-- Bootstrap 4.3.1 -->
      <script src="{{asset('site/plugins/bootstrap/bootstrap.min.js')}}"></script>
      <!--  Magnific Popup-->
      <script src="{{asset('site/plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
      <!-- Slick Slider -->
      <script src="{{asset('site/plugins/slick/slick.min.js')}}"></script>
      <!-- Counterup -->
      <script src="{{asset('site/plugins/counterup/jquery.waypoints.min.js')}}"></script>
      <script src="{{asset('site/plugins/counterup/jquery.counterup.min.js')}}"></script>

      <!-- Google Map -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>

      <script src="{{asset('site/plugins/google-map/map.js')}}" defer></script>


      @yield('script')
      <script src="{{asset('site/js/script.js')}}"></script>
      

<!-- Corrected version with jQuery included -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $('#logout-button').click(function(){
      $('#logout-form').submit();
    });
  });
</script>


      </body>
      </html>


