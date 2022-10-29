<!doctype html>
<html lang="en" dir="ltr">

    <head>

        <!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keywords" content="Insta Device Fixer">
    
        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('/assets/img/favicon.png')}}" />
    
        <!-- TITLE -->
        <title>Insta Device Fixer </title>
    
        <!-- BOOTSTRAP CSS -->
        <link id="style" href="{{URL::asset('assets/dashboard/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    
        <!-- STYLE CSS -->
        <link href="{{URL::asset('assets/dashboard/css/style.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('assets/dashboard/css/dark-style.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('assets/dashboard/css/transparent-style.css')}}" rel="stylesheet">
        <link href="{{URL::asset('assets/dashboard/css/skin-modes.css')}}" rel="stylesheet" />
    
        <!--- FONT-ICONS CSS -->
        <link href="{{URL::asset('assets/dashboard/css/icons.css')}}" rel="stylesheet" />
    
        <!-- COLOR SKIN CSS -->
        <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{URL::asset('assets/dashboard/colors/color1.css')}}" />

        <!-- JQUERY JS -->
        <script src="{{URL::asset('assets/dashboard/js/jquery.min.js')}}"></script>
    
    </head>

<body class="app sidebar-mini ltr light-mode">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{URL::asset('/assets/dashboard/images/loader.svg')}}" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
            <div class="app-header header sticky">
                <div class="container-fluid main-container">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal " href="{{url('/')}}">
                            <img src="{{URL::asset('/assets/brand/logo-text.png')}}" class="header-brand-img desktop-logo" alt="logo" >
                            <img src="{{URL::asset('/assets/brand/logo-text.png')}}" class="header-brand-img light-logo1" alt="logo" style="max-width: 220px">
                        </a>
                        <!-- LOGO -->
                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <div class="dropdown d-none">
                                <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                                    <i class="fe fe-search"></i>
                                </a>
                                <div class="dropdown-menu header-search dropdown-menu-start">
                                    <div class="input-group w-100 p-2">
                                        <input type="text" class="form-control" placeholder="Search....">
                                        <div class="input-group-text btn btn-primary">
                                            <i class="fe fe-search" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- SEARCH -->
                            <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                            </button>
                            
                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex order-lg-2">
                                        <div class="dropdown d-lg-none d-flex">
                                            <a href="javascript:void(0)" class="nav-link icon d-none" data-bs-toggle="dropdown">
                                                <i class="fe fe-search"></i>
                                            </a>
                                            <div class="dropdown-menu header-search dropdown-menu-start">
                                                <div class="input-group w-100 p-2">
                                                    <input type="text" class="form-control" placeholder="Search....">
                                                    <div class="input-group-text btn btn-primary">
                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="dropdown d-flex profile-1">
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                                <img src="{{URL::asset('assets/dashboard/images/users/21.jpg')}}" alt="profile-user"
                                                    class="avatar  profile-user brround cover-image">
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading">
                                                    <div class="text-center">
                                                        {{-- <h5 class="text-dark mb-0 fs-14 fw-semibold">{{Auth()->user()->name}}</h5> --}}
                                                    </div>
                                                </div>
                                                <div class="dropdown-divider m-0"></div>
                                                <div class="dropdown-divider m-0"></div>
                                                <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">                                    
                        
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                    <i class="dropdown-icon fe fe-alert-circle"></i>  {{ __('Sign out') }} 
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="/">
                            <img src="{{URL::asset('assets/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
                            <img src="{{URL::asset('assets/brand/logo.png')}}" class="header-brand-img toggle-logo" alt="logo">
                            <img src="{{URL::asset('assets/brand/logo.png')}}" class="header-brand-img light-logo" alt="logo">
                            <img src="{{URL::asset('assets/brand/logo-text.png')}}" class="header-brand-img light-logo1" alt="logo">
                        </a>
                        <!-- LOGO -->
                    </div>
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg></div>
                        <ul class="side-menu">
                            <li class="sub-category">
                                <h3>Main</h3>
                            </li>
                            <li class="slide">
                                {{-- <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ url('/admin/dashboard')}}"><i
                                        class="side-menu__icon fe fe-home"></i><span
                                        class="side-menu__label">Dashboard</span></a> --}}
                            </li>
                            <li class="sub-category">
                                <h3>Manage website</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-user"></i><span
                                        class="side-menu__label">Users</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li><a href="{{url('/admin/users/')}}" class="slide-item">Users</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                                width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <!--/APP-SIDEBAR-->
            </div>

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">
                    {{ $slot }}
                    {{-- @yield('content') --}}
                </div>
            </div>
            <!--app-content close-->

        </div>

        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        Copyright &copy;<span id="year"></span> <a href="{{url('/')}}"> Insta Device Fixer&#174;</a> All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->

    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

       <!-- BOOTSTRAP JS -->
       <script src="{{URL::asset('assets/dashboard/plugins/bootstrap/js/popper.min.js')}}"></script>
       <script src="{{URL::asset('assets/dashboard/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

       <!-- SPARKLINE JS-->
        <script src="{{URL::asset('assets/dashboard/js/jquery.sparkline.min.js')}}"></script>

        <!-- Sticky js -->
        <script src="{{URL::asset('assets/dashboard/js/sticky.js')}}"></script>
   
       <!-- Perfect SCROLLBAR JS-->
       <script src="{{URL::asset('assets/dashboard/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
       <script src="{{URL::asset('assets/dashboard/plugins/p-scroll/pscroll.js')}}"></script>
       <script src="{{URL::asset('assets/dashboard/plugins/p-scroll/pscroll-1.js')}}"></script>
   
       <!-- SIDE-MENU JS-->
       <script src="{{URL::asset('assets/dashboard/plugins/sidemenu/sidemenu.js')}}"></script>
   
       <!-- CUSTOM JS -->
       <script src="{{URL::asset('assets/dashboard/js/custom.js')}}"></script>
</body>

</html>