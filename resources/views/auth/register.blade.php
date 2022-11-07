
<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.envytheme.com/joxi/default/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Nov 2022 03:23:18 GMT -->
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
</head>

<body class="body-bg-f8faff">
<!-- Start Preloader Area -->
<div class="preloader">
    <h2 style="font-weight: bolder; color: #2883dd">Trocode</h2>
    <img id="circle" height="50" width="50" src="{{ asset('img/spin.svg') }}" alt="main-logo">
</div>
<!-- End Preloader Area -->

<!-- Start Account Area -->
<div class="account-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="account-content">
                    <div class="account-header">
                        <a href="{{ route('index') }}">
                            <h2 style="font-weight: bolder; color: #2883dd">Trocode</h2>
                            {{--                            <img src="assets/images/main-logo.svg" alt="main-logo">--}}
                        </a>
                        <hr>
                        <h3>Register</h3>
                    </div>
                    <form class="account-wrap" action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-group mb-24 icon">
                            <input type="text" name="name" class="form-control" placeholder="Email">
                            <img src="{{ asset('assets/images/icon/user-square.svg') }}" alt="user-square">
                        </div>
                        <div class="form-group mb-24 icon">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                            <img src="{{ asset('assets/images/icon/sms.svg') }}" alt="sms">
                        </div>
                        <div class="form-group mb-24 icon">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                            <img src="{{ asset('assets/images/icon/key.svg') }}" alt="key">
                        </div>
                        <div class="form-group mb-24 icon">
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Password">
                            <img src="{{ asset('assets/images/icon/key.svg') }}" alt="key">
                        </div>
                        <div class="form-group mb-24">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    I agree <a href="terms.html">Terms &amp; Policy</a>
                                </label>
                            </div>
                        </div>
                        <div class="form-group mb-24">
                            <button type="submit" class="default-btn">Registration</button>
                        </div>
                        <div class="form-group mb-24">
                            <p class="account">Already Have An Account? <a href="login">Log In</a></p>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Account Area -->


<!-- Start Go Top Area -->
<div class="go-top">
    <i class="ri-arrow-up-s-fill"></i>
    <i class="ri-arrow-up-s-fill"></i>
</div>
<!-- End Go Top Area -->

<!-- Jquery Min JS -->

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

<!-- Mirrored from templates.envytheme.com/joxi/default/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Nov 2022 03:23:20 GMT -->
</html>
