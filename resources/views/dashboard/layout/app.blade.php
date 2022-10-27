
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Trocode</title>

    <meta name="description" content="Trocode - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Trocode - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Trocode">
    <meta property="og:description" content="Trocode - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Stylesheets -->
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('client/assets/js/plugins/highlightjs/styles/atom-one-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/js/plugins/magnific-popup/magnific-popup.css') }}">

    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ asset('client/assets/css/dashmix.min.css') }}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/xwork.min.css"> -->
    <link rel="stylesheet" id="css-theme" href="{{ asset('client/assets/css/themes/xmodern.min.css') }}">
    <!-- END Stylesheets -->
</head>
<body>
<!-- Page Container -->

<div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed page-header-dark main-content-boxed">
    <!-- Side Overlay-->
    <aside id="side-overlay">
        <!-- Side Header -->
        <div class="bg-primary">
            <div class="content-header">
                <div class="fs-lg fw-light text-white">
                    <i class="fa fa-users me-1"></i> People
                </div>

                <!-- Close Side Overlay -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="ms-auto text-white" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
                    <i class="fa fa-times-circle"></i>
                </a>
                <!-- END Close Side Overlay -->
            </div>
        </div>
        <!-- END Side Header -->

    </aside>
    <!-- END Side Overlay -->

    <!-- Sidebar -->
    <!--
      Sidebar Mini Mode - Display Helper classes

      Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
      Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
        If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

      Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
      Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
      Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
    -->
    <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header (mini Sidebar mode) -->
        <div class="smini-visible-block">
            <div class="content-header bg-primary">
                <!-- Logo -->
                <a class="fw-semibold text-white tracking-wide" href="index.html">
                    D<span class="opacity-75">x</span>
                </a>
                <!-- END Logo -->
            </div>
        </div>
        <!-- END Side Header (mini Sidebar mode) -->

        <!-- Side Header (normal Sidebar mode) -->
        <div class="smini-hidden">
            <div class="content-header justify-content-lg-center bg-primary">
                <!-- Logo -->
                <a class="fw-semibold text-white tracking-wide" href="index.html">
                    Dash<span class="opacity-75">mix</span>
                    <span class="fw-normal">Social</span>
                </a>
                <!-- END Logo -->

                <!-- Options -->
                <div class="d-lg-none">
                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times-circle"></i>
                    </button>
                    <!-- END Close Sidebar -->
                </div>
                <!-- END Options -->
            </div>
        </div>
        <!-- END Side Header (normal Sidebar mode) -->

        <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">
            <!-- User Info -->
            <div class="smini-hidden">
                <div class="content-side content-side-full bg-black-10 d-flex align-items-center">
                    <a class="img-link d-inline-block" href="javascript:void(0)">
                        <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{ asset(auth()->user()->avatar) }}" alt="">
                    </a>
                    <div class="ms-3">
                        <a class="fw-semibold text-dual" href="javascript:void(0)">{{ auth()->user()->name }}</a>
                        <div class="fs-sm text-dual">Bal <span style="font-weight: bolder" class="text text-success">${{ auth()->user()->balance ? : "0.00" }}</span></div>
                    </div>
                </div>
            </div>
            <!-- END User Info -->

            <!-- Side Navigation -->
            <div class="content-side">
                <ul class="nav-main">
                    <li class="nav-main-item">
                        <a class="nav-main-link active" href="{{ route('user.dashboard') }}">
                            <i class="nav-main-link-icon fa fa-user-circle"></i>
                            <span class="nav-main-link-name">Home</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="">
                            <i class="nav-main-link-icon fa fa-bell"></i>
                            <span class="nav-main-link-name">Campaigns</span>
                            <span class="nav-main-link-badge badge rounded-pill bg-info">6</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{ route('user.deposits') }}">
                            <i class="nav-main-link-icon fa fa-money-bill"></i>
                            <span class="nav-main-link-name">Add Fund</span>
                        </a>
                    </li>
                    <li class="nav-main-heading">Profile</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="">
                            <i class="nav-main-link-icon fa fa-tools"></i>
                            <span class="nav-main-link-name">Setting</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="db_social.html">
                            <i class="nav-main-link-icon fa fa-user-circle"></i>
                            <span class="nav-main-link-name">My Profile</span>
                        </a>
                    </li>


                    <li class="nav-main-heading">Homepage</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_dashboard_all.html">
                            <i class="nav-main-link-icon fa fa-arrow-left"></i>
                            <span class="nav-main-link-name">Go Back</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END Side Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->
    </nav>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div>
                <!-- Toggle Sidebar -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="sidebar_toggle">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
                <!-- END Toggle Sidebar -->


            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn btn-alt-secondary dropdown-toggle" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="d-none d-sm-inline me-1">{{ auth()->user()->name }}</span>
                    <span class="badge rounded-pill bg-success">PRO</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown" style="">
                    <div class="rounded-top fw-semibold text-white text-center bg-image" style="background-image: url('client/assets/media/photos/photo16.jpg');">
                        <div class="p-3">
                            <img class="img-avatar img-avatar-thumb" src="{{ asset(auth()->user()->avatar) }}" alt="">
                        </div>
                        <div class="p-3 bg-primary-dark-op">
                            <a class="text-white fw-semibold" href="">{{ auth()->user()->name }}</a>
                            <div class="text-white-75">{{ auth()->user()->email }}</div>
                        </div>
                    </div>
                    <div class="p-2">
                        <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
                            Profile
                            <i class="fa fa-fw fa-user-circle opacity-50 ms-1"></i>
                        </a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
                            Top Up
                            <i class="fab fa-fw fa-paypal opacity-50 ms-1"></i>
                        </a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item d-flex justify-content-between align-items-center" href="op_auth_signin.html">
                            Log Out
                            <i class="fa fa-fw fa-sign-out-alt text-danger ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- END Right Section -->
        </div>
        <!-- END Header Content -->



        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-primary-darker">
            <div class="content-header">
                <div class="w-100 text-center">
                    <i class="fa fa-fw fa-2x fa-sun fa-spin text-white"></i>
                </div>
            </div>
        </div>
        <!-- END Header Loader -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">


        <!-- Page Content -->
        @yield('content')
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="bg-body-light">
        <div class="content py-0">
            <div class="row fs-sm">
                <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-end">
                    Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                </div>
                <div class="col-sm-6 order-sm-1 text-center text-sm-start">
                    <a class="fw-semibold" href="https://1.envato.market/r6y" target="_blank">Trocode 5.1</a> &copy; <span data-toggle="year-copy"></span>
                </div>
            </div>
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->

<!--
  Dashmix JS

  Core libraries and functionality
  webpack is putting everything together at assets/_js/main/app.js
-->
<script src="{{ asset('client/assets/js/dashmix.app.min.js') }}"></script>

<!-- jQuery (required for Magnific Popup Plugin) -->
<script src="{{ asset('client/assets/js/lib/jquery.min.js') }}"></script>

<!-- Page JS Plugins -->
<script src="{{ asset('client/assets/js/plugins/highlightjs/highlight.pack.min.js') }}"></script>
<script src="{{ asset('client/assets/js/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

<!-- Page JS Helpers (Highlight.js + Magnific Popup Plugins) -->
<script>Dashmix.helpersOnLoad(['js-highlightjs', 'jq-magnific-popup']);</script>
</body>
</html>
