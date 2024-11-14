<!doctype html>
<html class="no-js" lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AptioTech | {{ $titre }}</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('') }}assets/images/favicon.png">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('') }}assets/css/plugins/all.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/plugins/flaticon.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('') }}assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/plugins/aos.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/plugins/animate.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/plugins/meanmenu.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/plugins/magnific-popup.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('') }}assets/css/style.css">

</head>

<body>
    <div class="main-wrapper">
        <!-- preloader start -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_four"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_one"></div>
                </div>
            </div>
        </div>
        <!-- preloader end -->

       {{-- Header --}}
       @include('layouts.header')

        <div class="body-overlay"></div>

        @yield('content')

       {{-- Footer --}}
       @include('layouts.footer')

    </div>

   {{-- Scripts --}}
   @include('layouts.scripts')

</body>

</html>
