<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>perpustakaan</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png')}}">

      <!-- CSS here -->
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css')}}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper-bundle.css')}}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css')}}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css')}}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome.min.css')}}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css')}}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.css')}}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/spacing.css')}}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css')}}">
   </head>
   <body>

      <!-- preloader -->
      <div id="preloader">
         <div class="preloader">
             <span></span>
             <span></span>
         </div>
     </div>
     <!-- preloader end  -->

      <!-- Scroll-top -->
         <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
         </button>
      <!-- Scroll-top-end-->

      <!-- header-area-start -->
      <header>

        <header class="top-header">
            <nav class="navbar navbar-expand align-items-center gap-4 bg-dark">
                <img
                src="{{ asset('assets/img/smk assalaam.png')}}"
                height="100">
                <p style="color: aliceblue"><h2>perpus smk assalaam.</h2></p>
            </a>
                <div class="search-bar flex-grow-1">
                    <div class="position-relative">
                        {{-- <div class="search-popup p-3">
                            <div class="card rounded-4 overflow-hidden">
                                <div class="card-body search-content">
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <ul class="navbar-nav gap-1 nav-right-links align-items-center ">
                    <li class="nav-item dropdown">
                        <div class="dropdown-menu dropdown-notify dropdown-menu-end shadow">
                            <div class="notify-list">
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown ">
                        <a href="javascrpt:;" class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                            <img src="https://placehold.co/110x110/png" class="rounded-circle p-1 border" width="45" height="45" alt="">
                        </a>
                        <div class="dropdown-menu dropdown-user dropdown-menu-end shadow">
                            <a class="dropdown-item  gap-2 py-2" href="javascript:;">
                                <div class="text-center">
                                    <img src="https://placehold.co/110x110/png" class="rounded-circle p-1 shadow mb-3" width="90" height="90" alt="">
                                    <h5 class="user-name mb-0 fw-bold">Hello {{Auth::user()->name}}</h5>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            @auth
                            @if(auth()->user()->isAdmin)
                            <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="">
                                <i class="material-icons-outlined">admin_panel_settings</i>Admin Dashboard
                            </a>
                            @endif
                            @endauth
                            <a class="dropdown-item d-flex align-items-center gap-5 py-2" href="{{ route('home')}}">
                                <i class="material-icons-outlined">dashboard</i></a>
                             <a class="dropdown-item d-flex align-items-center gap-5 py-2" href="{{ route('profile')}}">
                                <i class="material-icons-outlined">profile</i></a>
                            <hr class="dropdown-divider">
                            <a class="dropdown-item d-flex align-items-center gap-5 py-2" href="{{ route('login') }}"
                             onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="material-icons-outlined">logout</i></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>

            </nav>
        </header>

         <div class="header-top space-bg">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                  </div>
               </div>
            </div>
         </div>

         <div class="main-menu-area mt-20 d-none d-xl-block">
            <div class="for-megamenu p-relative">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-xl-2 col-lg-3">
                        <div class="cat-menu__category p-relative">
                           <a class="tp-cat-toggle" href="#" role="button"><i class="fal fa-bars"></i>Categories</a>
                           <div class="category-menu category-menu-off">
                              <ul class="cat-menu__list">
                                 <li><a href="shop.html"><i class="fal fa-user"></i> senang</a></li>
                                 <li><a href="shop.html"><i class="fal fa-shoe-prints"></i> sedih</a></li>
                                 <li><a href="shop.html"><i class="fal fa-smile"></i> perjuangan</a></li>
                                 <li><a href="shop.html"><i class="fal fa-futbol"></i> percintaan</a></li>
                                 <li><a href="shop.html"><i class="fal fa-crown"></i> horror</a></li>
                                 <li><a href="shop.html"><i class="fal fa-gift"></i> comedy</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-7 col-lg-6">
                        <div class="main-menu">
                           <nav id="mobile-menu">
                              <ul>
                                 <li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-3">
                        <div class="menu-contact">
                           <ul>
                              <li>
                                 <div class="menu-contact__item">
                                    <div class="menu-contact__icon">
                                       <i
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- header-area-end -->

      <!-- header-xl-sticky-area -->

      <!-- header-xl-sticky-end -->

      <!-- header-md-lg-area -->
      <!-- header-md-lg-area -->

      <!-- sidebar-menu-area -->

      <div class="body-overlay"></div>
      <!-- sidebar-menu-area-end -->

      <!-- header-cart-start -->
      <div class="tpcartinfo tp-cart-info-area p-relative">
      <button class="tpcart__close"><i class="fal fa-times"></i></button>
      <div class="tpcart">
         <h4 class="tpcart__title">Your Cart</h4>
         <div class="tpcart__product">
            <div class="tpcart__product-list">
               <ul>
                @foreach ($buku as $data)
                <div class="modal fade" id="detailModal{{ $data->id }}" tabindex="-1"
                    aria-labelledby="detailModalLabel{{ $data->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="detailModalLabel{{ $data->id }}">
                                    {{ $data->judul }}</h5>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

               </ul>
            </div>

         </div>

      </div>
      </div>
      <div class="cartbody-overlay"></div>
      <!-- header-cart-end -->

      <!-- main-area-start -->
      <main>

         <!-- slider-area-start -->
         <section class="slider-area pb-25">
            <div class="container">
               <div class="row justify-content-xl-end">
                  <div class="col-xl-9 col-xxl-7 col-lg-9">
                     <div class="tp-slider-area p-relative">
                        <div class="swiper-container slider-active">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                 <div class="tp-slide-item">

                                    <div class="tp-slide-item__img">
                                       <img src="{{ asset('frontend/assets/img/slider/banner-1.jpg')}}" alt="">
                                    </div>
                                 </div>
                                </div>
                           </div>
                        </div>
                        <div class="slider-pagination"></div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-xxl-3 col-lg-3">
                     <div class="row">
                        <div class="col-lg-12 col-md-6">
                           <div class="tpslider-banner tp-slider-sm-banner mb-30">
                              <a href="shop-details.html">
                                 <div class="tpslider-banner__img">
                                    <img src="{{ asset('/images/buku/' . $data->foto ) }}" class="img-fluid mb-3" style="height: 250px"
                                    alt="{{ $data->judul }}">
                                    <div class="tpslider-banner__content">
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                           <div class="tpslider-banner">
                              <a href="shop-details.html">
                                 <div class="tpslider-banner__img">
                                    <img src="{{ asset('/images/buku/' . $data->foto) }}" class="img-fluid mb-3" style="height: 250px"
                                    alt="{{ $data->judul }}">
                                    <div class="tpslider-banner__content">
                                       <span class="tpslider-banner__sub-title">Popular</span>
                                       <h4 class="tpslider-banner__title">Energy with our <br> newest collection</h4>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <div class="container-fluid pt-5">
            <div class="container">
                <div class="text-center pb-2">
                    <p class="section-title px-5">
                        <span class="px-2">Buku Terbaru</span>
                    </p>
                    <h1 class="mb-4">Buku</h1>
                </div>
                <div class="row">
                    @php
                    $limitedbuku = $buku ->take(4)
                    @endphp
                    @foreach ($limitedbuku as $data )
                    <div class="col-lg-3 mb-5">
                        <div class="card border-0 bg-light shadow-sm pb-2">
                            <a href="{{ url('show' , $data->id) }}" >
                                <img src="{{ asset('images/buku/' . $data->foto) }}" alt="" class="card-img-top" alt="..." width="50" height="350">
                            </a>
                            <div class="card-body text-center">
                                <h4 class="card-title">{{$data->judul}}</h4>
                                <p class="card-text">
                                    {{-- {{$data->deskripsi}} --}}
                                </p>
                            </div>
                            <a href="{{ url('show' , $data->id) }}" class="btn btn-primary px-4 mx-auto mb-4" >Lihat Detail</a>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
         <!-- slider-area-end -->

         <!-- category-area-start -->

         <!-- category-area-end -->

         <!-- product-area-start -->

         <!-- product-area-end -->

         <!-- deal-product-area-start -->

         <!-- deal-product-area-end -->

         <!-- shop-area-start -->

         <!-- shop-area-end -->

      </main>
      <!-- main-area-end -->

      <!-- footer-area-start -->
      <footer>
         <div class="footer-area theme-bg pt-65">
            <div class="container">
               <div class="main-footer pb-15 mb-30">
                  <div class="row">
                     <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-widget footer-col-1 mb-40">
                           <div class="footer-logo mb-30">
                              <a href="index.html"><img src="{{ asset('assets/img/smk assalaam.png')}}" alt="logo" height="150" width="200"></a>
                           </div>
                           <div class="footer-content">
                              <p>perpustakaan smk assalaam bandung <br> menyediakan berbagai macam buku <br> dan juga berbagai macam kategori buku <br> selamat membaca.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="footer-widget footer-col-2 ml-30 mb-40">
                           <h4 class="footer-widget__title mb-30">Information</h4>
                           <div class="footer-widget__links">
                              <ul>
                                 <li><a href="#">Custom Service</a></li>
                                 <li><a href="#">FAQs</a></li>
                                 <li><a href="track.html">Ordering Tracking</a></li>
                                 <li><a href="contact.html">Contacts</a></li>
                                 <li><a href="#">Events</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="footer-widget footer-col-3 mb-40">
                           <h4 class="footer-widget__title mb-30">My Account</h4>
                           <div class="footer-widget__links">
                              <ul>
                                 <li><a href="#">Delivery Information</a></li>
                                 <li><a href="#">Privacy Policy</a></li>
                                 <li><a href="#">Discount</a></li>
                                 <li><a href="#">Custom Service</a></li>
                                 <li><a href="#">Terms & Condition</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-5 col-md-5 col-sm-5">
                        <div class="footer-widget footer-col-4 mb-40">
                           <h4 class="footer-widget__title mb-30">Social Network</h4>
                           <div class="footer-widget__links">
                              <ul>
                                <li><a href="#"><i class="fab fa-dribbble"></i>https://smkassalaambandung</a></li>
                                 <li><a href="#"><i class="fab fa-facebook-f"></i>smk assalaam bandung</a></li>
                                 <li><a href="#"><i class="fab fa-twitter"></i>smk asslaam bandung</a></li>
                                 <li><a href="#"><i class="fab fa-behance"></i>smk assalaam bandung</a></li>
                                 <li><a href="#"><i class="fab fa-youtube"></i>smk assalaam bandung</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
      </footer>
      <!-- footer-area-end -->



      <!-- JS here -->
      <script src="{{ asset('frontend/assets/js/jquery.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/waypoints.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/swiper-bundle.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/slick.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/magnific-popup.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/nice-select.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/counterup.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/wow.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/isotope-pkgd.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/imagesloaded-pkgd.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/countdown.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/ajax-form.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/meanmenu.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/jquery.knob.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/main.js')}}"></script>
   </body>
</html>
