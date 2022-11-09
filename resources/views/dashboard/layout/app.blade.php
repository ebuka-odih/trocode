
<!doctype html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Link Of CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/iconsax.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/metismenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/simplebar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/calendar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jbox.all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/editor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/loaders.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/sidebar-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.svg">
    <!-- Title -->
    <title>Trocode</title>
    <style>
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% {  transform: rotate(359deg); }
        }
        #circle {
            animation: spin 2s linear infinite;

        }
    </style>
</head>

<body class="body-bg-f8faff">
<!-- Start Preloader Area -->
<div class="preloader">
    <h2 style="font-weight: bolder; color: #2883dd">Trocode</h2>
    <img id="circle" height="50" width="50" src="{{ asset('img/spin.svg') }}" alt="main-logo">
</div>
<!-- End Preloader Area -->

<!-- Start All Section Area -->
<div class="all-section-area">
    <!-- Start Header Area -->
    <div class="header-area header-style-two">
        <div class="container-fluid">
            <div class="header-content-wrapper">
                <div class="header-content d-flex justify-content-between align-items-center">
                    <div class="header-left-content d-flex">
                        <div class="responsive-burger-menu d-block d-lg-none">
                            <span class="top-bar"></span>
                            <span class="middle-bar"></span>
                            <span class="bottom-bar"></span>
                        </div>

                        <div class="main-logo">
                            <a href="{{ route('index') }}">
                                <h2 style="font-weight: bolder; color: #2883dd">Trocode</h2>
{{--                                <img src="{{ asset('assets/images/main-logo.svg') }}" alt="main-logo">--}}
                            </a>
                        </div>


                        <div class="option-item for-mobile-devices d-block d-lg-none">

                            <i class="close-btn ri-close-line"></i>

                            <div class="search-overlay search-popup">
                                <div class='search-box'>
                                    <form class="search-form">
                                        <input class="search-input" name="search" placeholder="Search" type="text">

                                        <button class="search-button" type="submit">
                                            <i class="ri-search-line"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="header-right-content d-flex align-items-center">
                        <div class="header-right-option">
                            <a href="#" class="dropdown-item fullscreen-btn" id="fullscreen-button">
                                <img src="{{ asset('assets/images/icon/maximize.svg') }}" alt="maximize">
                            </a>
                        </div>


                        <div class="header-right-option dropdown profile-nav-item pt-0 pb-0">
                            <a class="dropdown-item dropdown-toggle avatar d-flex align-items-center" href="#" id="navbarDropdown-4" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('img/avatar.svg') }}" alt="avatar">
                                <div class="d-none d-lg-block d-md-block">
                                    <h3>{{ auth()->user()->name }}</h3>
{{--                                    <span></span>--}}
                                </div>
                            </a>

                            <div class="dropdown-menu">
                                <div class="dropdown-header d-flex flex-column align-items-center">
                                    <div class="figure mb-3">
                                        <img src="{{ asset('img/avatar.svg') }}" class="rounded-circle" alt="avatar">
                                    </div>

                                    <div class="info text-center">
                                        <span class="name">{{ auth()->user()->name }}</span>

                                    </div>
                                </div>

                                <div class="dropdown-wrap">
                                    <ul class="profile-nav p-0 pt-3">
                                        <li class="nav-item">
                                            <a href="profile.html" class="nav-link">
                                                <i class="ri-user-line"></i>
                                                <span>Profile</span>
                                            </a>
                                        </li>


                                        <li class="nav-item">
                                            <a href="edit-profile.html" class="nav-link">
                                                <i class="ri-settings-5-line"></i>
                                                <span>Settings</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown-footer">
                                    <ul class="profile-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                <i class="ri-login-circle-line"></i>
                                                {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Area -->

    <!-- Start Sidebar Area -->
    <nav class="side-menu-area">
        <nav class="sidebar-nav" data-simplebar>
            <ul id="sidebar-menu" class="sidebar-menu">
                <li class="mm-active">
                    <a href="#" class=" box-style d-flex align-items-center">
                        <div class="icon">
                            <img src="{{ asset('assets/images/icon/element.svg') }}" alt="element">
                        </div>
                        <span class="menu-title">Dashboards</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.campaigns') }}" class="box-style d-flex align-items-center">
                        <div class="icon">
                            <img src="{{ asset('assets/images/icon/diagram.svg') }}" alt="messages">
                        </div>
                        <span class="menu-title">Campaigns</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('user.deposits') }}" class="box-style d-flex align-items-center">
                        <div class="icon">
                            <img src="{{ asset('assets/images/icon/fatrows.svg') }}" alt="calendar">
                        </div>
                        <span class="menu-title">Add Fund</span>
                    </a>
                </li>
                <hr>
{{--                <li class="nav-main-heading">Profile</li>--}}

                <li>
                    <a href="chat.html" class="box-style d-flex align-items-center">
                        <div class="icon">
                            <img src="{{ asset('assets/images/icon/setting.svg') }}" alt="messages">
                        </div>
                        <span class="menu-title">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="chat.html" class="box-style d-flex align-items-center">
                        <div class="icon">
                            <img src="{{ asset('assets/images/icon/profile-2user.svg') }}" alt="profile-2user">
                        </div>
                        <span class="menu-title">My Profile</span>
                    </a>
                </li>


            </ul>
        </nav>
    </nav>
    <!-- End Sidebar Area -->

    <!-- Start Main Content Area -->
   @yield('content')
    <!-- End Main Content Area -->
</div>
<!-- End All Section Area -->

<!-- Start Template Sidebar Area -->
<div class="template-sidebar-area">
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight">
        <div class="offcanvas-header">
            <a href="index.html">
                <img src="assets/images/main-logo.svg" alt="main-logo">
            </a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul>
                <li>
                    <a class="default-btn btn active" target="_blank" href="#">
                        Buy Now
                    </a>
                </li>
                <li>
                    <a class="default-btn btn" target="_blank" href="https://themeforest.net/user/envytheme/portfolio">
                        Our Portfolio
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Template Sidebar Area -->

<!-- Start Go Top Area -->
<div class="go-top">
    <i class="ri-arrow-up-s-fill"></i>
    <i class="ri-arrow-up-s-fill"></i>
</div>
<!-- End Go Top Area -->

<!-- Jquery Min JS -->
<script data-cfasync="false" src="https://templates.envytheme.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/metismenu.min.js') }}"></script>
<script src="{{ asset('assets/js/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/js/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/js/apexcharts/hr-management.js') }}"></script>
<script src="{{ asset('assets/js/geticons.js') }}"></script>
<script src="{{ asset('assets/js/calendar.js') }}"></script>
<script src="{{ asset('assets/js/calendar.min.js') }}"></script>
<script src="{{ asset('assets/js/editor.js') }}"></script>
<script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
<script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
<script src="{{ asset('assets/js/ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

<!-- Mirrored from templates.envytheme.com/joxi/default/hr-management.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Nov 2022 03:23:29 GMT -->
</html>


