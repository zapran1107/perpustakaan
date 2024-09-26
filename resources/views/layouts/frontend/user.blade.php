<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Perpustakaan Smk Assalaam</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <link rel="icon" href="{{asset('frontend/assets/img/smk assalaam.png') }}"/>

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="{{asset ('User/assets/https://fonts.googleapis.com')}}">
        <link rel="preconnect" href="{{asset ('User/assets/https://fonts.gstatic.com')}}" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap " rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="{{asset ('User/assets/https://use.fontawesome.com/releases/v5.15.4/css/all.css')}}"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="{{asset ('User/assets/lib/animate/animate.min.css')}}"/>
        <link href="{{asset ('User/assets/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
        <link href="{{asset ('User/assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset ('User/assets/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset ('User/assets/css/style.css')}}" rel="stylesheet">
    </head>

    <body style="overflow-x: hidden">

        <!-- Spinner Start -->
        {{-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> --}}
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
       @include('include.frontend.header')
        <!-- Navbar & Hero End -->

        <main class="main-wrapper">
            <div class="main-content">
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </main>

        @include('include.frontend.footer')

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset ('User/assets/lib/wow/wow.min.js')}}"></script>
        <script src="{{asset ('User/assets/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset ('User/assets/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset ('User/assets/lib/counterup/counterup.min.js')}}"></script>
        <script src="{{asset ('User/assets/lib/lightbox/js/lightbox.min.js')}}"></script>
        <script src="{{asset ('User/assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>


        <!-- Template Javascript -->
        <script src="{{asset ('User/assets/js/main.js')}}"></script>
    </body>

</html>
