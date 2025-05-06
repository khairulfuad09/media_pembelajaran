<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Landing Page</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    {{-- <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    {{-- <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet"> --}}
    {{-- <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> --}}

    <!-- Main CSS File -->
    <link href="css/main.css" rel="stylesheet">
    <link href="css/main2.css" rel="stylesheet">

</head>

<body class="index-page">

    <header id="header" class="header fixed-top">

        <div class="branding d-flex align-items-cente">

            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="/" class="logo d-flex align-items-center">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <!-- <img src="assets/img/logo.png" alt=""> -->
                    <h1 class="sitename text-white">NeuroLearn</h1>
                    <span>.</span>
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="/" class="active">Halaman Utama<br></a></li>
                        <li><a href="#about">Informasi</a></li>
                        <li class="dropdown"><a href="#"><span>Materi</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li class="dropdown"><a href="/skm_stimulasi"><span>Sistem Koordinasi Manusia</span>
                                        <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                    <ul>
                                        <li><a href="/skm_stimulasi">Stimulasi</a></li>
                                        <li><a href="/skm_identifikasiMasalah">Identifikasi Masalah</a></li>
                                        <li><a href="/skm_pengumpulanData">Pengumpulan Data</a></li>
                                        <li><a href="/skm_pengolahanData">Pengolahan Data</a></li>
                                        <li><a href="/skm_verifikasi">Verifikasi</a></li>
                                        <li><a href="/skm_kesimpulan">Kesimpulan</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="/AIM_Stimulasi"><span>Alat Indra Manusia</span>
                                        <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                    <ul>
                                        <li><a href="/AIM_Stimulasi">Stimulasi</a></li>
                                        <li><a href="/AIM_identifikasiMasalah">Identifikasi Masalah</a></li>
                                        <li><a href="/AIM_pengumpulanData">Pengumpulan Data</a></li>
                                        <li><a href="/AIM_pengolahanData">Pengolahan Data</a></li>
                                        <li><a href="/AIM_verifikasi">Verifikasi</a></li>
                                        <li><a href="/AIM_kesimpulan">Kesimpulan</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="/Hormon_Stimulasi"><span>Hormon Manusia</span>
                                        <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                    <ul>
                                        <li><a href="/Hormon_Stimulasi">Stimulasi</a></li>
                                        <li><a href="/Hormon_identifikasiMasalah">Identifikasi Masalah</a></li>
                                        <li><a href="/Hormon_pengumpulanData">Pengumpulan Data</a></li>
                                        <li><a href="/Hormon_pengolahanData">Pengolahan Data</a></li>
                                        <li><a href="/Hormon_verifikasi">Verifikasi</a></li>
                                        <li><a href="/Hormon_kesimpulan">Kesimpulan</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="/Homeostasis_Stimulasi"><span>Homeostasis</span>
                                        <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                    <ul>
                                        <li><a href="/Homeostasis_Stimulasi">Stimulasi</a></li>
                                        <li><a href="#">Identifikasi Masalah</a></li>
                                        <li><a href="#">Pengumpulan Data</a></li>
                                        <li><a href="#">Pengolahan Data</a></li>
                                        <li><a href="#">Verifikasi</a></li>
                                        <li><a href="/Homeostasis_kesimpulan">Kesimpulan</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#contact">Kontak</a></li>
                        @guest
                            <li><a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    href="/masuk_siswa">Masuk</a></li>
                            <li><a class="" href="/daftar_siswa">Daftar</a></li>
                        @endguest
                        @auth
                            @if (Auth::user()->role === 'siswa')
                                <li>
                                    <form action="{{ route('keluar') }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Keluar</button>
                                    </form>
                                </li>
                            @endif
                        @endauth
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

            </div>

        </div>

    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section accent-background">

            <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-5 justify-content-between">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h2><span>Selamat Datang di </span><span class="accent">NeuroLearn</span></h2>
                        <p>Disini kalian akan mempelajari terkait Sistem Koordinasi Manusia, Alat Indra Manusia, Hormon,
                            dan Homeostasis</p>
                        <div class="d-flex">
                            <a href="#about" class="btn-get-started">Mari Belajar!</a>
                        </div>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2">
                        <img src="img/hero-img.svg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>

            <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200">
                <div class="container position-relative">
                    <div class="row gy-4 mt-5">

                        <div class="col-xl-3 col-md-6">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-easel"></i></div>
                                <h4 class="title"><a href="/skm_stimulasi" class="stretched-link">Sistem Koordinasi
                                        Manusia</a></h4>
                            </div>
                        </div><!--End Icon Box -->

                        <div class="col-xl-3 col-md-6">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-gem"></i></div>
                                <h4 class="title"><a href="/AIM_Stimulasi" class="stretched-link">Alat Indra
                                        Manusia</a>
                                </h4>
                            </div>
                        </div><!--End Icon Box -->

                        <div class="col-xl-3 col-md-6">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-geo-alt"></i></div>
                                <h4 class="title"><a href="/Hormon_Stimulasi" class="stretched-link">Hormon</a></h4>
                            </div>
                        </div><!--End Icon Box -->

                        <div class="col-xl-3 col-md-6">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-command"></i></div>
                                <h4 class="title"><a href="/Homeostasis_Stimulasi"
                                        class="stretched-link">Homeostasis</a></h4>
                            </div>
                        </div><!--End Icon Box -->

                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->


        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Pengantar Materi</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item  position-relative">
                            <div>
                                <img src="img/neuron motorik.png" alt="Gambar Bulat" class="circle-image">
                            </div>
                            <h3>Sistem Koordinasi Manusia</h3>
                            <p>Sistem saraf memiliki tanggung jawab atas kontrol dan koordinasi (mengelola) pada semua
                                bagian tubuh manusia. Fungsi dari sistem saraf untuk menerima dan merspon sinyal
                                rangsangan dari dalam ataupun luar tubuh. Sistem saraf tersusun oleh...</p>
                            <a href="/skm_stimulasi" class="readmore stretched-link">Pelajari lebih lanjut<i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item  position-relative">
                            <div>
                                <img src="img/mata.png" alt="Gambar Bulat" class="circle-image">
                            </div>
                            <h3>Alat Indra Manusia</h3>
                            <p>Pernahkan kamu memperhatikan bagaimana kita bisa melihat, mendengar, mencium suatu bau,
                                bahkan merasakan makanan, ataupun merasakan sebuah sentuhan? Menurut kamu, apa penyebab
                                sehingga kita bisa merasakan semua hal tersebut? Lalu apa saja fungsi dari kelima alat
                                indra pada kehidupan...</p>
                            <a href="/AIM_Stimulasi" class="readmore stretched-link">Pelajari lebih lanjut<i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Service Item -->




                </div>

            </div>

        </section><!-- /Services Section -->


    </main>

    <footer id="footer" class="footer accent-background">

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">NeuroLearn</strong>
            </p>
        </div>

    </footer>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Top -->


    <!-- Preloader -->
    {{-- <div id="preloader"></div> --}}

    <!-- Vendor JS Files -->
    {{-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script> --}}

    <!-- Main JS File -->
    <script src="js/main.js"></script>



</body>

</html>
