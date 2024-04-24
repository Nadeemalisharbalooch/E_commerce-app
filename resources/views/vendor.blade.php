@extends('layouts.app')

@section('content')
<
  <!-- theme meta -->
  <meta name="theme-name" content="" />

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
            <div class="app-brand">
              <a href="#">
                <img src="{{asset('asset/auth/images/logo.png')}}">
                <span class="brand-name">Admin Panel</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-left" data-simplebar style="height: 100%;">
              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                

                
                  <li
                   class="active"
                   >
                    <a class="sidenav-item-link" href="">
                      <i class="mdi mdi-briefcase-account-outline"></i>
                      <span class="nav-text">Admin Dashboard</span>
                    </a>
                  </li>
                

                

                
                  <li
                   >
                    <a class="sidenav-item-link" href="">
                      <i class="mdi mdi-chart-line"></i>
                      <span class="nav-text">Auth Dashboard</span>
                    </a>
                  </li>
                

                

                
                  <li class="section-title">
                    Apps
                  </li>
                

                

                
                  <li
                   >
                    <a class="sidenav-item-link" href="{{url('category')}}">
                      <i class="mdi mdi-wechat"></i>
                      <span class="nav-text">category</span>
                    </a>
                  </li>
                

   <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#email"
                      aria-expanded="false" aria-controls="email">
                      <i class="mdi mdi-email"></i>
                      <span class="nav-text">Posts</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="email"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="{{url('create')}}">
                                <span class="nav-text">Create post</span>
                                
                              </a>
                            </li>
                            <li >
                              <a class="sidenav-item-link" href="{{url('post')}}">
                                <span class="nav-text">Posts </span>
                                
                              </a>
                            </li>
                       
                      </div>
                    </ul>
                 
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#customization"
                      aria-expanded="false" aria-controls="customization">
                      <i class="mdi mdi-square-edit-outline"></i>
                      <span class="nav-text">User</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="customization"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                       
                            <li >
                              <a class="sidenav-item-link" href="navbar-customization.html">
                                <span class="nav-text">Navbar</span>
                                
                              </a>
                            </li>
                          
                            <li >
                              <a class="sidenav-item-link" href="sidebar-customization.html">
                                <span class="nav-text">Sidebar</span>
                                
                              </a>
                            </li>
                          
                            <li >
                              <a class="sidenav-item-link" href="styling.html">
                                <span class="nav-text">Styling</span>
                                
                              </a>
                            </li>
                          
                      </div>
                    </ul>
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


      <!-- ====================================
      ——— PAGE WRAPPER
      ===================================== -->
  
          <!-- content will be here -->
      
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
                  

@endsection
