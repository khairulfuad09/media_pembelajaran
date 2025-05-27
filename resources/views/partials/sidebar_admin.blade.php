    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/guru_home" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/kontak" class="nav-link">Kontak</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">

                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8"> --}}
                @if (Auth::user()->role === 'guru')
                    <span class="brand-text font-weight-light">Guru</span>
                @elseif (Auth::user()->role === 'admin')
                    <span class="brand-text font-weight-light">Admin</span>
                @endif
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user profil (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    {{-- <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div> --}}
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        @if (Auth::user()->role === 'admin')
                            <li class="nav-item">
                                <a href="/admin_home" class="nav-link active">
                                    <!-- tambahkan class active untuk aktif -->
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        Dashboard
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item"><!-- tambahkan clas menu-open untuk membuka -->
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        User
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/user_guru" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Guru</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/user_siswa" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Siswa</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            {{-- untuk membuka li tambahkan class  menu-open --}}
                        @elseif (Auth::user()->role === 'guru')
                            {{-- <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-copy"></i>
                                    <p>
                                        Siswa
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/guru_home" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Home</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/guru_nilai_siswa" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Nilai Siswa</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/guru_daftarSiswa" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Daftar Siswa</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/guru_kkm" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>kkm</p>
                                        </a>
                                    </li>
                                </ul>
                            </li> --}}
                            <li class="nav-item">
                                <a href="/guru_home" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Home</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/guru_nilai_siswa" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Nilai Siswa</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/guru_daftarSiswa" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Daftar Siswa</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/guru_kkm" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>kkm</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                {{-- <a href="{{ route('keluar') }}" class="nav-link active">
                                    <!-- tambahkan class active untuk aktif -->
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        keluar
                                    </p> --}}
                                <form action="{{ route('keluar') }}" method="post">
                                    @csrf
                                    <button type="submit" class="nav-link">Keluar</button>
                                </form>
                                {{-- </a> --}}
                            </li>
                        @endif
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
