
@extends('layouts.frontend.user')
@section('content')

<!-- Class Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <h1 class="mb-4 mt-5">Buku Yang Paling Banyak Dipinjam</h1>
        </div>
        <div class="row">
            @php
            $limitedbuku = $buku ->take(4)
            @endphp
            @foreach ($limitedbuku as $data )
            <div class="col-lg-3 mb-5">
                <div class="card border-0 bg-light shadow-sm pb-2">
                    <a href="{{ url('show' , $data->id) }}">
                        <img src="{{ asset('images/buku/' . $data->foto) }}" alt="" class="card-img-top" alt="..." width="50" height="350">
                    </a>
                    <div class="card-body text-center">
                        <h4 class="card-title">{{$data->judul}}</h4>
                        <p class="card-text">
                            {{-- {{$data->deskripsi}} --}}
                        </p>
                    </div>
                    <a href="{{ url('user/show' , $data->id) }}" type="button" class="btn btn-primary px-4 mx-auto mb-4">Lihat Detail</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Class End -->

<!-- FAQs Start -->
<div class="container-fluid faq-section pb-5">
    <div class="container pb-5 overflow-hidden">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Profile</h4>
            <h1 class="display-5 mb-4">Tentang Smk Assalaam</h1>
            {{-- <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic. --}}
            </p>
        </div>
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="accordion accordion-flush bg-light rounded p-5" id="accordionFlushSection">
                    <div class="accordion-item rounded-top">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed rounded-top" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            tentang smk assalaam
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushSection">
                            <div class="accordion-body">SMK Assalaam adalah bagian dari Yayasan Assalaam yang mempersiapkan siswa untuk siap kerja dengan keterampilan & profesional di bidang industri (sekolah berbasis industri) dan kewirausahaan.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            perpustakaan smk assalaam
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushSection">
                            <div class="accordion-body">Perpustakaan smk assalaam di buat untuk memudahkan para siswa siswi dan guru guru yang ingin membaca maupun meminjam buku </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Keunggulan Smk Assalaam?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushSection">
                            <div class="accordion-body">Program pembelajaran disusun berdasarkan standar Nasional dan dikembangkan berdasarkan kebutuhan industri serta  bekerjasama dengan DU/DI (Dunia Usaha/Dunia Industri)
                                Menghasilkan lulusan yang siap bekerja,memiliki mentalitas kerja yang tangguh, dan memiliki keterampilan ganda (jurusan otomotif : Mobil + Motor, jurusan  RPL : programer + teknisi)
                                Tenaga pendidik berasal dari lulusan perguruan-perguruan tinggi terkemuka, dan pelaku Industri
                                Setiap pelajaran praktek/paket keahlian dilaksanakan dengan menggunakan sistem blok, dengan 3 guru pengajar.
                                Ujian Kompetensi diselenggarakan secara mandiri, menggunakan kendaraan dan alat yang mutakhir .
                                Pengembangan karakter dibentuk atas dasar ajaran ISLAM sebagai fondasi utama dalam berbagai aktivitas siswa.
                                Dibukanya layanan Bursa Kerja Khusus yang menyediakan pelatihan tambahan siswa untuk siap bekerja dan penyaluran lulusan ke dunia kerja
                                Memiliki unit produksi SMK Assalaam yang menjadi laboratorium langsung bagi siswa dalam mengembangkan keterampilan kejuruannya.
                                Sarana dan prasarana pembelajaran yang lengkap dan terkini</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                            Pendirian Smk Assalaam
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushSection">
                            <div class="accordion-body">smk assalaam berdiri dan di resmikan pada tanggal 2 Mei 2009 pada tahun tersebut smk ini baru membuka 1 kopetensi keahlian , yaitu teknik kendaraan ringan.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                            unit pendidikan
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushSection">
                            <div class="accordion-body">TPQ , PG TK, SD, MTS, SMP, SMA, SMK</div>
                        </div>
                    </div>
                    <div class="accordion-item rounded-bottom">
                        <h2 class="accordion-header" id="flush-headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                            Web smk assalaam
                            </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushSection">
                            <div class="accordion-body">https://smkassalaambandung.sch.id</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="bg-primary rounded">
                    <img src="{{asset ('User/assets/img/about-2.png')}}" class="img-fluid w-100" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQs End -->

@endsection
