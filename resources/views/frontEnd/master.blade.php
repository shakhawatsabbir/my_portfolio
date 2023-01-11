
<!DOCTYPE html>
<html lang="zxx">


<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('frontEndAsset')}}/assets/image/Picsart_22-12-25_03-34-16-506.png" type="{{asset('frontEndAsset')}}/assets/image/x-icon">
    <link rel="icon" href="{{asset('frontEndAsset')}}/assets/image/Picsart_22-12-25_03-34-16-506.png" type="{{asset('frontEndAsset')}}/assets/image/x-icon">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontEndAsset')}}/assets/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontEndAsset')}}/assets/css/pe-helper.css">
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/assets/css/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontEndAsset')}}/assets/css/all.min.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&amp;family=Poppins:wght@700;900&amp;display=swap" rel="stylesheet">

    <!-- CSS -->
    <link href="{{asset('frontEndAsset')}}/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/assets/css/leaflet.css">
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/assets/css/aos.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontEndAsset')}}/assets/css/style.css">

    <title>Shaka | Portfolio </title>
</head>
<body data-bs-spy="scroll" data-bs-target="#site-navbar">

<!-- PRE LOADER -->
<div class="preloader js-preloader flex-center">
    <div class="dots">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>
</div>

@yield('content')

<!-- SITE FOOTER -->
@include('frontEnd.include.footer')
 <!-- .site-footer -->

<script src="{{asset('frontEndAsset')}}/assets/js/jquery.js"></script>
<script src="{{asset('frontEndAsset')}}/assets/js/popper.min.js"></script>
<script src="{{asset('frontEndAsset')}}/assets/js/bootstrap.min.js"></script>
<script src="{{asset('frontEndAsset')}}/assets/js/imagesloaded.pkgd.min.js"></script>
<script src="{{asset('frontEndAsset')}}/assets/js/isotope.pkgd.min.js"></script>
<script src="{{asset('frontEndAsset')}}/assets/js/swiper-bundle.min.js"></script>
<script src="{{asset('frontEndAsset')}}/assets/js/leaflet.js"></script>
<script src="{{asset('frontEndAsset')}}/assets/js/jquery.waypoints.min.js"></script>
<script src="{{asset('frontEndAsset')}}/assets/js/jquery.counterup.min.js"></script>
<script src="{{asset('frontEndAsset')}}/assets/js/aos.js"></script>
<script src="{{asset('frontEndAsset')}}/assets/js/jquery.preloadinator.min.js"></script>
<script src="{{asset('frontEndAsset')}}/assets/js/vanilla-tilt.min.js"></script>
<script src="{{asset('frontEndAsset')}}/assets/js/script.js"></script>




</body>

</html>
