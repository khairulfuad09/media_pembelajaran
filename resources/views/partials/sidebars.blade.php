<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <a href="/">
                <h3>NeuroLearn</h3>
            </a>
        </div>


        {{--
Request::is('skm_*') ? 'active' : ''
→ Menambahkan kelas active jika halaman saat ini adalah bagian dari Sistem Koordinasi Manusia.

aria-expanded="{{ Request::is('skm_*') ? 'true' : 'false' }}"
→ Memastikan dropdown tetap terbuka jika ada di halaman terkait.

class="collapse list-unstyled pageSubmenu {{ Request::is('skm_*') ? 'show' : '' }}"
→ Dropdown tetap terbuka saat submenu salah satu halaman aktif.
 --}}

        <ul class="list-unstyled components">
            <p>Kumpulan Materi</p>
            <li class="{{ Request::is('skm_*') ? 'active' : '' }}">
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="{{ Request::is('skm_*') ? 'true' : 'false' }}"
                    class="dropdown-toggle dtp">Sistem
                    Koordinasi Manusia</a>
                <ul class="collapse list-unstyled pageSubmenu {{ Request::is('skm_*') ? 'show' : '' }}">
                    <li>
                        <a href="/skm_stimulasi"
                            class="{{ Request::is('skm_stimulasi') ? 'active' : '' }}">Stimulasi</a>
                    </li>
                    <li>
                        <a href="/skm_identifikasiMasalah"
                            class="{{ Request::is('skm_identifikasiMasalah') ? 'active' : '' }}">Identifikasi
                            Masalah</a>
                    </li>
                    <li>
                        <a href="/skm_pengumpulanData"
                            class="{{ Request::is('skm_pengumpulanData') ? 'active' : '' }}">Pengumpulan Data</a>
                    </li>
                    <li>
                        <a href="/skm_pengolahanData"
                            class="{{ Request::is('skm_pengolahanData') ? 'active' : '' }}">Pengolahan Data</a>
                    </li>
                    <li>
                        <a href="/skm_verifikasi"
                            class="{{ Request::is('skm_verifikasi') ? 'active' : '' }}">Verifikasi</a>
                    </li>
                    <li>
                        <a href="/skm_kesimpulan"
                            class="{{ Request::is('skm_kesimpulan') ? 'active' : '' }}">Kesimpulan</a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::is('AIM_*') ? 'active' : '' }}">
                <a href="#pageSubmenu" data-toggle="collapse"
                    aria-expanded="{{ Request::is('AIM_*') ? 'true' : 'false' }}" class="dropdown-toggle dtp">Alat
                    Indra Manusia</a>
                <ul class="collapse list-unstyled pageSubmenu {{ Request::is('AIM_*') ? 'show' : '' }}">
                    <li>
                        <a href="/AIM_Stimulasi"
                            class="{{ Request::is('AIM_Stimulasi') ? 'active' : '' }}">Stimulasi</a>
                    </li>
                    <li>
                        <a href="/AIM_identifikasiMasalah"
                            class="{{ Request::is('AIM_identifikasiMasalah') ? 'active' : '' }}">Identifikasi
                            Masalah</a>
                    </li>
                    <li>
                        <a href="/AIM_pengumpulanData"
                            class="{{ Request::is('AIM_pengumpulanData') ? 'active' : '' }}">Pengumpulan Data</a>
                    </li>
                    <li>
                        <a href="/AIM_pengolahanData"
                            class="{{ Request::is('AIM_pengolahanData') ? 'active' : '' }}">Pengolahan Data</a>
                    </li>
                    <li>
                        <a href="/AIM_verifikasi"
                            class="{{ Request::is('AIM_verifikasi') ? 'active' : '' }}">Verifikasi</a>
                    </li>
                    <li>
                        <a href="/AIM_kesimpulan"
                            class="{{ Request::is('AIM_kesimpulan') ? 'active' : '' }}">Kesimpulan</a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::is('Hormon_*') ? 'active' : '' }}">
                <a href="#pageSubmenu" data-toggle="collapse"
                    aria-expanded="{{ Request::is('Hormon_*') ? 'true' : 'false' }}" class="dropdown-toggle dtp">Hormon
                    Manusia</a>
                <ul class="collapse list-unstyled pageSubmenu {{ Request::is('Hormon_*') ? 'show' : '' }}">
                    <li>
                        <a href="/Hormon_Stimulasi"
                            class="{{ Request::is('Hormon_Stimulasi') ? 'active' : '' }}">Stimulasi</a>
                    </li>
                    <li>
                        <a href="/Hormon_identifikasiMasalah"
                            class="{{ Request::is('Hormon_identifikasiMasalah') ? 'active' : '' }}">Identifikasi
                            Masalah</a>
                    </li>
                    <li>
                        <a href="/Hormon_pengumpulanData"
                            class="{{ Request::is('Hormon_pengumpulanData') ? 'active' : '' }}">Pengumpulan Data</a>
                    </li>
                    <li>
                        <a href="/Hormon_pengolahanData"
                            class="{{ Request::is('Hormon_pengolahanData') ? 'active' : '' }}">Pengolahan Data</a>
                    </li>
                    <li>
                        <a href="/Hormon_verifikasi"
                            class="{{ Request::is('Hormon_verifikasi') ? 'active' : '' }}">Verifikasi</a>
                    </li>
                    <li>
                        <a href="/Hormon_kesimpulan"
                            class="{{ Request::is('Hormon_kesimpulan') ? 'active' : '' }}">Kesimpulan</a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::is('Homeostasis_*') ? 'active' : '' }}">
                <a href="#pageSubmenu" data-toggle="collapse"
                    aria-expanded="{{ Request::is('Homeostasis_*') ? 'true' : 'false' }}"
                    class="dropdown-toggle dtp">Homeostasis</a>
                <ul class="collapse list-unstyled pageSubmenu {{ Request::is('Homeostasis_*') ? 'show' : '' }}">
                    <li>
                        <a href="/Homeostasis_Stimulasi"
                            class="{{ Request::is('Homeostasis_Stimulasi') ? 'active' : '' }}">Stimulasi</a>
                    </li>
                    <li>
                        <a href="/Homeostasis_identifikasiMasalah"
                            class="{{ Request::is('Homeostasis_identifikasiMasalah') ? 'active' : '' }}">Identifikasi
                            Masalah</a>
                    </li>
                    <li>
                        <a href="/Homeostasis_pengumpulanData"
                            class="{{ Request::is('Homeostasis_pengumpulanData') ? 'active' : '' }}">Pengumpulan
                            Data</a>
                    </li>
                    <li>
                        <a href="/Homeostasis_pengolahanData"
                            class="{{ Request::is('Homeostasis_pengolahanData') ? 'active' : '' }}">Pengolahan Data</a>
                    </li>
                    <li>
                        <a href="/Homeostasis_verifikasi"
                            class="{{ Request::is('Homeostasis_verifikasi') ? 'active' : '' }}">Verifikasi</a>
                    </li>
                    <li>
                        <a href="/Homeostasis_kesimpulan"
                            class="{{ Request::is('Homeostasis_kesimpulan') ? 'active' : '' }}">Kesimpulan</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- Page Content  -->
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span>Sidebar</span>
                </button>

                <button class="btn btn-dark d-inline-block d-lg-none ml-auto dtp" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <svg class="svg-inline--fa fa-align-justify fa-w-14" aria-hidden="true" data-prefix="fas"
                        data-icon="align-justify" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 448 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M0 84V44c0-8.837 7.163-16 16-16h416c8.837 0 16 7.163 16 16v40c0 8.837-7.163 16-16 16H16c-8.837 0-16-7.163-16-16zm16 144h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 256h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0-128h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z">
                        </path>
                    </svg>
                    {{-- <i class="fas fa-align-justify"></i> --}}
                </button>

                <div class="collapse navbar-collapse pageSubmenu" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ms-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Halaman Utama</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Informasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
