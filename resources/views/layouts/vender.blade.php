  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
  <link href="{{asset('auth/plugins/material/css/materialdesignicons.min.css')}}" rel="stylesheet" />
  <link href="{{asset('auth/plugins/simplebar/simplebar.css')}}" rel="stylesheet" />
 <!-- java -->

  <!-- PLUGINS CSS STYLE -->
  <link href="{{asset('auth/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
  
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
  
  <link href="{{asset('auth/plugins/toaster/toastr.min.css')}}" rel="stylesheet" />
  
  <!-- MONO CSS -->
  <link id="main-css-href" rel="stylesheet" href="{{asset('auth/css/style.css')}}" />

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <!-- FAVICON -->
  <link href="{{asset('auth/images/favicon.png')}}" rel="shortcut icon" />

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="{{asset('auth/plugins/nprogress/nprogress.js')}}"></script>
</head>


  <body class="navbar-fixed sidebar-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    

    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">
      
      
        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        <aside class="left-sidebar sidebar-dark" id="left-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
          
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-left" data-simplebar style="height: 100%;">
              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                
                
                  <li
                   class="active"
                   >
                    <a class="sidenav-item-link" href="">
                     
                      <span class="nav-text">vendor Dashboard</span>
                    </a>
                  </li>
                
                  <li>
                   
                    <a class="sidenav-item-link" href="{{url('vendordashboard')}}">
                      
                      <span class="nav-text">Dashboard</span>
                    </a>
                  </li>
                  <li class="section-title">
                    Apps
                  </li>
          
                
                  <li >
                    <a class="sidenav-item-link" href="{{url('showallproducts')}}">
                     
                      <span class="nav-text">PRODUCTS</span>
                    </a>
                  </li>
                  <li >
                    <a class="sidenav-item-link" href="{{url('vendorcreate')}}">
                
                      <span class="nav-text">create Product</span>
                    </a>
                  </li>
                  <li >
                    <a class="sidenav-item-link" href="{{url('vendororder')}}">
                
                      <span class="nav-text">orders</span>
                    </a>
                  </li>
                 
                  <li >
                    <a class="sidenav-item-link" href="#">
                
                      <span class="nav-text">update products</span>
                    </a>
                  </li>

            <li  class="has-sub" >
            
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="{{url('show')}}" data-toggle="collapse" data-target="#customization"
                      aria-expanded="false" aria-controls="customization">
              
                    </a>
                  
                  </li>
          
              </ul>

            </div>

            <div class="sidebar-footer">
              <div class="sidebar-footer-content">
                <ul class="d-flex">
                  <li>
                    <a href="user-account-settings.html" data-toggle="tooltip" title="Profile settings"><i class="mdi mdi-settings"></i></a></li>
                  <li>
                    <a href="#" data-toggle="tooltip" title="No chat messages"><i class="mdi mdi-chat-processing"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </aside>

        <div class="page-wrapper">

<!-- Header -->
<header class="main-header" id="header">
  <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
    <!-- Sidebar toggle button -->
    <button id="sidebar-toggler" class="sidebar-toggle">
      <span class="sr-only">Toggle navigation</span>
    </button>

    <span class="page-title">dashboard</span>

    <div class="navbar-right ">

      <!-- search form -->
    

      <ul class="nav navbar-nav">
        <!-- Offcanvas -->
        

        <!-- User Account -->
        <li class="dropdown user-menu">
          <button class="dropdown-toggle nav-link" data-toggle="dropdown">
            <img src="{{'assets/images/'.auth::user()->images}}" class="user-image rounded-circle" alt="User Image" />
            <span class="d-none d-lg-inline-block">{{auth::user()->name}}</span>
          </button>
          <ul class="dropdown-menu dropdowuser-profn-menu-right">
            <li>
            <a href="{{url('userEdit')}}">
    <img src="{{'../assets/images/'.auth::user()->images}}" class="user-image rounded-circle" alt="User profile" />
</a>
   
                <span class="nav-text">{{auth::user()->name}}</span>
              </a>
            </li>
            <li>
              <a class="dropdown-link-item" href="email-inbox.html">
                <i class="mdi mdi-email-outline"></i>
                <span class="nav-text">Message</span>
                <span class="badge badge-pill badge-primary">24</span>
              </a>
            </li>
            <li>
              <a class="dropdown-link-item" href="user-activities.html">
                <i class="mdi mdi-diamond-stone"></i>
                <span class="nav-text">Activitise</span></a>
            </li>
            <li>
              <a class="dropdown-link-item" href="user-account-settings.html">
                <i class="mdi mdi-settings"></i>
                <span class="nav-text">Account Setting</span>
              </a>
            </li>

            <li class="dropdown-footer">
             <form  id="logout-form" action="{{route('logout')}}" method="post">
             <a id="logout-button" class="dropdown-link-item" href="javascript:void(0)"> <i class="mdi mdi-logout"></i> Log Out </a>
               @csrf
            </form>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>

      <!-- ====================================
      ——— PAGE WRAPPER
      ===================================== -->
  
          <!-- content will be here -->
          @yield('content')
          <footer class="footer mt-auto">
            <div class="copyright bg-white">
              <p>
                &copy; <span id="copy-year"></span> Copyright 2023 By Nadeem ali shar <a class="text-primary" href="" target="_blank" ></a>.
              </p>
            </div>
            <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById("copy-year").innerHTML = year;
            </script>
          </footer>
      </div>
    </div>
       <script src="{{asset('auth/plugins/jquery/jquery.min.js')}}"></script>
       <script src="{{asset('auth/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
       <script src="{{asset('auth/plugins/simplebar/simplebar.min.js')}}"></script>
       <script src="{{asset('auth/https://unpkg.com/hotkeys-js/dist/hotkeys.min.js')}}"></script>
       <script src="{{asset('auth/plugins/apexcharts/apexcharts.js')}}"></script>
       <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script> 
       <script src="{{asset('auth/plugins/toaster/toastr.min.js')}}"></script>      
          @yield('script')
                  
<script>
  $(document).ready(function(){
    $('#logout-button').click(function(){
      $('#logout-form').submit();
    });
  });

</script>