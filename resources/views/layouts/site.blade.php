<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="{{asset('assets/front/img/favicon.ico')}}" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        {{-- <link href="{{asset('assets/front/css/bootstrap.min.css')}}" rel="stylesheet"> --}}
        <link href="{{asset('assets/front/css/all.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/front/lib/flaticon/font/flaticon.css')}}" rel="stylesheet">
        <link href="{{asset('assets/front/lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/front/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('assets/front/css/style.css')}}" rel="stylesheet">
        
        <link href="{{asset('assets/front/css/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/front/css/owl.theme.default.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/front/css/custom.css')}}" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
       @include('front.include.topbar')
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        @include('front.include.navbar')
        <!-- Nav Bar End -->


      @yield('content')

        <!-- Footer Start -->
      @include('front.include.footer')
        <!-- Footer End -->
        
        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        {{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> --}}
        {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script> --}}
        <script src="{{asset('assets/front/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/front/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/front/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('assets/front/lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/front/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('assets/front/lib/counterup/counterup.min.js')}}"></script>
        <script src="{{asset('assets/front/lib/parallax/parallax.min.js')}}"></script>
        
        <!-- Contact Javascript File -->
        <script src="{{asset('assets/front/mail/jqBootstrapValidation.min.js')}}"></script>
        <script src="{{asset('assets/front/mail/contact.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{asset('assets/front/js/main.js')}}"></script>
        <script src="{{asset('assets/front/js/owl.carousel.min.js')}}"></script>
        <script>
          
        </script>
    </body>
</html>
