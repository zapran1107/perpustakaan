<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-primary"><i class="fas fa-search-dollar me-3"></i>PERPUSTAKAAN ASSALAAM</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>

            @guest
            <div class="d-flex justify-content-end mb-4">
                <a class="btn btn-light rounded-pill py-2 px-2 px-md-3 me-1 mt-3" href="{{ route('login') }}">Login</a>
                <a class="btn btn-primary rounded-pill py-2 px-2 px-md-3 ms-1 mt-3" href="{{ route('register') }}">Register</a>
            </div>

            @endguest

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

            @auth
                   <li class="nav-item dropdown" style="list-style: none">
                <a href="javascrpt:;" class=" dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                    <img src="https://placehold.co/110x110/png" class="rounded-circle p-1 border" width="45"
                        height="45" alt="">
                </a>
                <div class="dropdown-menu dropdown-user dropdown-menu-end shadow">
                    <a class="dropdown-item  gap-2 py-2" href="javascript:;">
                        <div class="text-center">
                            <img src="https://placehold.co/110x110/png" class="rounded-circle p-1 shadow mb-3"
                                width="90" height="90" alt="">
                            <h5 class="user-name mb-0 fw-bold">Hello
                                {{Auth::user()->name}}
                            </h5>
                        </div>
                    </a>
                    @auth
                        @if (auth()->user()->isAdmin)
                        @endif
                    @endauth
                    <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="{{ url('admin/buku') }}">
                        Dashboard</a>
                    <hr class="dropdown-divider">
                    <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="{{ route('login') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                       Logout</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            @endauth


        </div>
    </nav>

    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item">
            <img src="{{ asset('User/assets/img/carousel-1.jpg') }}" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row gy-0 gx-5">
                        <div class="col-lg-0 col-xl-5"></div>
                        <div class="col-xl-7 animated fadeInLeft">
                            <div class="text-sm-center text-md-end">
                                <h4 class="text-primary text-uppercase fw-bold mb-4">Selamat Datang Di Perpustakaan Smk
                                    Assalaam</h4>
                                <h1 class="display-4 text-uppercase text-white mb-4">Ayo Membaca Agar Pemikiran kita
                                    Lebih Terbuka</h1>
                                <p class="mb-5 fs-5">Membaca buku sangat baik sebagai latihan otak dan pikiran. Membaca dapat membantu menjaga otak agar selalu menjalankan fungsinya secara sempurna.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-carousel-item">
            <img src="{{ asset('User/assets/img/carousel-2.jpg') }}" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-12 animated fadeInUp">
                            <div class="text-center">
                                <h4 class="text-primary text-uppercase fw-bold mb-4">Selamat Datang di Perpustakaan Smk
                                    Assalaam</h4>
                                <h1 class="display-4 text-uppercase text-white mb-4">Luangkan Sedikit Waktu mu Untuk
                                    Membaca</h1>
                                <p class="mb-5 fs-5">Membaca buku sangat baik sebagai latihan otak dan pikiran. Membaca dapat membantu menjaga otak agar selalu menjalankan fungsinya secara sempurna. Saat membaca, otak dituntut untuk berpikir, menganalisis berbagai masalah, mencari jalan keluar dan solusi hingga menemukan hal-hal baru.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
</div>
