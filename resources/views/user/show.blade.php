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
         <div class="header-top space-bg">
            <div class="container">
               <div class="row">
                  <div class="col-12">
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
      <div class="tpsideinfo">

         <div class="tpsideinfo__nabtab">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
               <li class="nav-item" role="presentation">
                 <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Menu</button>
               </li>
               <li class="nav-item" role="presentation">
                 <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Categories</button>
               </li>
             </ul>
             <div class="tab-content" id="pills-tabContent">
               <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                  <div class="mobile-menu"></div>
               </div>
               <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                  </div>
               </div>
             </div>
         </div>

         <div class="tpsideinfo__wishlist-link">

         </div>
      </div>
      <div class="body-overlay"></div>
      <!-- sidebar-menu-area-end -->

      <!-- header-cart-start -->
      <div class="tpcartinfo tp-cart-info-area p-relative">
      {{-- <button class="tpcart__close"><i class="fal fa-times"></i></button> --}}
      <div class="tpcart">
         <h4 class="tpcart__title">Your Cart</h4>
         <div class="tpcart__product">
            <div class="tpcart__product-list">
               <ul>
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
                                       <img src="{{ asset('/images/buku/' . $buku->foto ) }}" style="width: 250px">
                                    </div>
                                 </div>
                                </div>
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
                    <div class="container-fluid pt-5" style="margin-top: 50px ">
                        <div class="container pb-3">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 pb-1">
                                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4">
                                        <div class="p-4 mt-5">
                                            <h4>Buku {{$buku->judul}}</h4>
                                            <p class="m-0'">
                                                Buku{{$buku->judul}} lengkap. Buku {{$buku->judul}} yang ditulis oleh {{$buku->penuli->nama_penulis}}. Informasi selengkapnya mengenai Buku {{$buku->judul}} ada bawah ini.
                                            </p>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6 pb-1">
                                                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4">
                                                        <img src="{{ asset('images/buku/' . $buku->foto) }}" alt="" class="card-img-top" class="card-img-top" width="50" height="450">
                                                    </div>
                                                </div>
                                                <div class="des col-lg-8 col-md-6 pb-1">
                                                    <p>Judul : {{$buku->judul}}</p>
                                                    <p>Penulis : {{$buku->penuli->nama_penulis}}</p>
                                                    <p>Penerbit : {{$buku->penerbit->nama_penerbit}}</p>
                                                    <p>Kategori : {{$buku->kategori->nama_kategori}}</p>
                                                    <p>Jumlah : {{$buku->jumlah}}</p>
                                                    <p>Sinopsis : {{$buku->deskripsi}}</p>
                                                </div>
                                            </div>
                                            <a href="{{route('AssalaamPerpustakaan')}}" class="btn btn-primary px-4 float-end mb-4 mr-5">Kembali</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-8">

                                {{-- <p><strong>foto : </strong> {{ $buku->foto }}</p> --}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
         <!-- slider-area-end -->

         <!-- category-area-start -->

         <!-- category-area-end -->

         <!-- product-area-start -->
         <section class="product-area pt-95 pb-70">


               </div>
               <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                     <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                     </div>
                  </div>
                  <div class="tab-pane fade" id="nav-sale" role="tabpanel" aria-labelledby="nav-sale-tab">
                     <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                        <div class="col">
                           <div class="tpproduct pb-15 mb-30">
                              <div class="tpproduct__thumb p-relative">
                                 <a href="shop-details-2.html">
                                    <img src="{{ asset('frontend/assets/img/product/home-one/product-17.jpg')}}" alt="product-thumb">
                                    <img class="product-thumb-secondary" src="{{ asset('frontend/assets/img/product/home-one/product-18.jpg')}}" alt="">
                                 </a>
                                 <div class="tpproduct__thumb-action">
                                    <a class="comphare" href="#"><i class="fal fa-exchange"></i></a>
                                    <a class="quckview" href="#"><i class="fal fa-eye"></i></a>
                                    <a class="wishlist" href="wishlist.html"><i class="fal fa-heart"></i></a>
                                 </div>
                              </div>
                              <div class="tpproduct__content">
                                 <h3 class="tpproduct__title"><a href="shop-details-2.html">Miklonda Co. Crafted Candles</a></h3>
                                 <div class="tpproduct__priceinfo p-relative">
                                    <div class="tpproduct__priceinfo-list">
                                       <span>$31.00</span>
                                       <span class="tpproduct__priceinfo-list-oldprice">$39.00</span>
                                    </div>
                                    <div class="tpproduct__cart">
                                       <a href="cart.html"><i class="fal fa-shopping-cart"></i>Add To Cart</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col">
                           <div class="tpproduct pb-15 mb-30">
                              <div class="tpproduct__thumb p-relative">
                                 <a href="shop-details-2.html">
                                    <img src="{{ asset('frontend/assets/img/product/home-one/product-19.jpg')}}" alt="product-thumb">
                                    <img class="product-thumb-secondary" src="{{ asset('frontend/assets/img/product/home-one/product-20.jpg')}}" alt="">
                                 </a>
                                 <div class="tpproduct__thumb-action">
                                    <a class="comphare" href="#"><i class="fal fa-exchange"></i></a>
                                    <a class="quckview" href="#"><i class="fal fa-eye"></i></a>
                                    <a class="wishlist" href="wishlist.html"><i class="fal fa-heart"></i></a>
                                 </div>
                              </div>
                              <div class="tpproduct__content">
                                 <h3 class="tpproduct__title"><a href="shop-details.html">Pinkol Enormous Granite Bottle</a></h3>
                                 <div class="tpproduct__priceinfo p-relative">
                                    <div class="tpproduct__priceinfo-list">
                                       <span>$31.00</span>
                                    </div>
                                    <div class="tpproduct__cart">
                                       <a href="cart.html"><i class="fal fa-shopping-cart"></i>Add To Cart</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col">
                           <div class="tpproduct pb-15 mb-30">
                              <div class="tpproduct__thumb p-relative">
                                 <a href="shop-details-2.html">
                                    <img src="{{ asset('frontend/assets/img/product/home-one/product-1.jpg')}}" alt="product-thumb">
                                    <img class="product-thumb-secondary" src="{{ asset('frontend/assets/img/product/home-one/product-2.jpg')}}" alt="">
                                 </a>
                                 <div class="tpproduct__thumb-action">
                                    <a class="comphare" href="#"><i class="fal fa-exchange"></i></a>
                                    <a class="quckview" href="#"><i class="fal fa-eye"></i></a>
                                    <a class="wishlist" href="wishlist.html"><i class="fal fa-heart"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        </div>
         </section>
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
                              <a href="index.html"><img src="{{ asset('frontend/assets/img/logo/logo.png')}}" alt="logo"></a>
                           </div>
                           <div class="footer-content">
                              <p>Elegant pink origami design three <br> dimensional view and decoration co-exist. <br> Great for adding a decorative touch to <br> any room’s decor.</p>
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
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="footer-widget footer-col-4 mb-40">
                           <h4 class="footer-widget__title mb-30">Social Network</h4>
                           <div class="footer-widget__links">
                              <ul>
                                 <li><a href="#"><i class="fab fa-facebook-f"></i>Facebook</a></li>
                                 <li><a href="#"><i class="fab fa-dribbble"></i>Dribbble</a></li>
                                 <li><a href="#"><i class="fab fa-twitter"></i>Twitter</a></li>
                                 <li><a href="#"><i class="fab fa-behance"></i>Behance</a></li>
                                 <li><a href="#"><i class="fab fa-youtube"></i>Youtube</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-4">
                        <div class="footer-widget footer-col-5 mb-40">
                           <h4 class="footer-widget__title mb-30">Get Newsletter</h4>
                           <p>Get on the list and get 10% off your first order!</p>
                           <div class="footer-widget__newsletter">
                              <form action="#">
                                 <input type="email" placeholder="Enter email address">
                                 <button class="footer-widget__fw-news-btn tpsecondary-btn">Subscribe Now<i class="fal fa-long-arrow-right"></i></button>
                              </form>
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
