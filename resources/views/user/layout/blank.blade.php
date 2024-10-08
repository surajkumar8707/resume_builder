<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ public_asset('assets/user/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ public_asset('assets/user/img/favicon.png') }}">
    <title>
        Soft UI Dashboard by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ public_asset('assets/user/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ public_asset('assets/user/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ public_asset('assets/user/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ public_asset('assets/user/css/soft-ui-dashboard.css?v=1.0.7') }}" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="{{ url('') }}" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="">
    <!-- End Navbar -->
    @yield('content')
    <!--   Core JS Files   -->
    <script src="{{ public_asset('assets/user/js/core/popper.min.js') }}"></script>
    <script src="{{ public_asset('assets/user/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ public_asset('assets/user/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ public_asset('assets/user/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
