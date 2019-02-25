<!DOCTYPE html>
<html lang="pl">

<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="GhostShell.eu">
    <meta name="keywords" content="ghostshell">
    <!-- PAGE TITLE -->
    <title>{{$title}}</title>
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <!-- ALL GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <!-- FONT AWESOME CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/fonts/font-awesome.min.css')}}">
    <!-- OWL CAROSEL CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/owlcarousel/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/owlcarousel/css/owl.theme.css')}}">
    <!-- MAGNIFIC CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/magnific-popup.css')}}">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/animate.min.css')}}">
    <!-- MAIN STYLE CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
    <!-- RESPONSIVE CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/responsive.css')}}">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- START PRELOADER -->
<div class="preloader">
    <div class="status">
        <div class="status-mes"></div>
    </div>
</div>
<!-- / END PRELOADER -->

<!-- START HOMEPAGE DESIGN AREA -->
@yield('header')
<!-- / END HOMEPAGE DESIGN AREA -->

<!-- START ABOUT DESIGN AREA -->
@yield('about')
<!-- / END ABOUT DESIGN AREA -->

<!-- START SERVICES DESIGN AREA -->
@yield('services')
<!-- / END SERVICES DESIGN AREA -->

<!-- START WORK DESIGN AREA -->
@yield('work')
<!-- / END START WORK DESIGN AREA -->

<!-- START TESTIMONIAL DESIGN AREA -->
@yield('testimonial')
<!-- / END TESTIMONIAL DESIGN AREA -->

<!-- START CONTACT DESIGN AREA -->
@yield('contact')
<!-- / END CONTACT DESIGN AREA -->

<!-- START FOOTER DESIGN AREA -->
@yield('foter')
<!-- / END FOOTER DESIGN AREA -->

<!-- LATEST JQUERY -->
<script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
<!-- BOOTSTRAP JS -->
<script src="{{URL::asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- OWL CAROUSEL JS  -->
<script src="{{URL::asset('assets/owlcarousel/js/owl.carousel.min.js')}}"></script>
<!-- MIXITUP JS -->
<script src="{{URL::asset('assets/js/jquery.mixitup.js')}}"></script>
<!-- PARALLAX JS -->
<script src="{{URL::asset('assets/js/jquery.stellar.min.js')}}"></script>
<!-- MAGNIFICANT JS -->
<script src="{{URL::asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- WOW JS -->
<script src="{{URL::asset('assets/js/wow.min.js')}}"></script>
<!-- CONTACT FORM JS -->
<script src="{{URL::asset('assets/js/form-contact.js')}}"></script>
<!-- scripts js -->
<script src="{{URL::asset('assets/js/scripts.js')}}"></script>
</body>

</html>