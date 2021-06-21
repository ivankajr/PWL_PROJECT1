@extends('main')

@section('tittle', 'homeKlinik')

@section('page-wrapper')
<div id="home" class="parallax first-section wow fadeIn" data-stellar-background-ratio="0.4" style="background-image:url('assets/images/slider-bg.png');">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="text-contant">
                                    <h2>
                                        <span class="center"><span class="icon"><img src="assets/images/icon-logo.png" alt="#" /></span></span>
                                        <a href="assets/css/style.css" class="typewrite" data-period="2000" data-type='[ "Selamat Datang di Klinik Hewan", "Tugas Proyek 1", "Politeknik Negeri Malang" ]'>
                                            <span class="wrap"></span>
                                        </a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </div>
                <!-- end section -->
                <div id="time-table" class="time-table-section">
                    <div class="container">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="service-time one" style="background:#2895f1;">
                                    <span class="info-icon"><i class="fa fa-ambulance" aria-hidden="true"></i></span>
                                    <h3>Emergency </h3>
                                    <p>Penanganan Keadaan Darurat yang Diperlukan Untuk Hewan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="service-time middle" style="background:#0071d1;">
                                    <span class="info-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                    <h3>Jam kerja</h3>
                                    <div class="time-table-section">
                                        <ul>
                                            <li><span class="left">Senin - kamis</span><span class="right">8.00 – 18.00</span></li>
                                            <li><span class="left">Jumat</span><span class="right">13.00 – 18.00</span></li>
                                            <li><span class="left">Sabtu</span><span class="right">8.00 – 16.00</span></li>
                                            <li><span class="left">Minggu</span><span class="right">8.00 – 13.00</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="service-time three" style="background:#0060b1;">
                                    <span class="info-icon"><i class="fa fa-hospital-o" aria-hidden="true"></i></span>
                                    <h3>Clinic House</h3>
                                    <p>kenyamanan Tempat untuk Perawatan Hewan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="about" class="section wow fadeIn">
                    <div class="container">
                        <div class="heading">
                            <span class="icon-logo"><img src="assets/images/icon-logo.png" alt="#"></span>
                            <h2>spesialis klinik hewan</h2>
                        </div>
                        <!-- end title -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="message-box">
                                    <h4>Apa yang kami Lakukan?</h4>
                                    <h2>Dokter Hewan</h2>
                                    <p class="lead">Dokter hewan bertugas mencegah, memeriksa, mengobati, dan melakukan perawatan pada hewan dari penyakit. Jenis hewan yang ditangani bisa hewan besar (sapi, kuda, kambing, kerbau, babi), hewan kecil (anjing, kucing), unggas (ayam, itik, angsa, puyuh), hewan eksotik (ular, hamster, kura-kura, iguana), satwa liar (reptil, primata), satwa harapan (rusa, kelinci), satwa akuatik (ikan), ataupun hewan laboratorium (rodensia). Kalau ada hewan yang terluka, mengalami patah tulang, maka dokter hewan akan melakukan operasi.</p>

                                </div>
                                <!-- end messagebox -->
                            </div>
                            <!-- end col -->
                            <div class="col-md-6">
                                <div class="post-media wow fadeIn">
                                    <img src="assets/images/about_03.jpg" alt="" class="img-responsive">

                                </div>
                                <!-- end media -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </div>
                @endsection
