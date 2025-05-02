@extends('template.main_admin')
@section('container')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Siswa</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Data Siswa</a></li>
                            <li class="breadcrumb-item active"></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah Siswa
                </button>
                <div class="row">
                    <div class="card p-3 mt-4">
                        <h4>Data Siswa</h4>

                        <table id="guruTable" class="table table-bordered table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Alamat</th>
                                    <th>No. Telepon</th>
                                    <th>tanggal lahir</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siswas as $index => $siswa)
                                    <tr>
                                        <td>{{ $siswa->name }}</td>
                                        <td>{{ $siswa->email }}</td>
                                        <td>{{ $siswa->profile->gender ?? '-' }}</td>
                                        <td>{{ $siswa->profile->alamat ?? '-' }}</td>
                                        <td>{{ $siswa->profile->phone ?? '-' }}</td>
                                        <td>{{ $siswa->profile->tanggal_lahir ?? '-' }}</td>
                                        <td>
                                            <button class="btn btn-warning btn-sm" data-bs-toggle="collapse"
                                                data-bs-target="#collapseEdit{{ $index }}">Edit</button>
                                            <form action="{{ route('hapus.siswa', $siswa->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm"
                                                    onclick="confirm('Yakin ingin menghapus?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <!-- Baris Collapse -->
                                    <tr class="collapse" id="collapseEdit{{ $index }}">
                                        <td colspan="8">
                                            <form method="POST" action="{{ route('update.siswa', $siswa->id) }}">
                                                @csrf
                                                @method('PUT')
                                                <div class="row">
                                                    <div class="col-md-6 mb-2">
                                                        <label>Nama</label>
                                                        <input type="text" class="form-control" name="name"
                                                            value="{{ $siswa->name }}">
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control" name="email"
                                                            value="{{ $siswa->email }}">
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label>Password Baru</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Kosongkan jika tidak ingin mengganti"
                                                            name="password">
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label>Gender</label>
                                                        <select class="form-control" name="gender">
                                                            <option
                                                                {{ $siswa->profile->gender == 'Laki-laki' ? 'selected' : '' }}>
                                                                Laki-laki</option>
                                                            <option
                                                                {{ $siswa->profile->gender == 'Perempuan' ? 'selected' : '' }}>
                                                                Perempuan</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label>Alamat</label>
                                                        <input type="text" class="form-control"
                                                            value="{{ $siswa->profile->alamat ?? '' }}" name="alamat">
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label>No. Telepon</label>
                                                        <input type="text" class="form-control"
                                                            value="{{ $siswa->profile->phone ?? '' }}" name="phone">
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label>tanggal lahir</label>
                                                        <input type="date" class="form-control"
                                                            value="{{ $siswa->profile->tanggal_lahir ?? '' }}"
                                                            name="ttl">
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-success mt-2">Simpan
                                                    Perubahan</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    @endsection
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('tambah.siswa') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTambahGuruLabel">Tambah Siswa</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name">Nama</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="gender">Gender</label>
                                <select name="gender" class="form-control" required>
                                    <option value="">Pilih</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="phone">No. Telepon</label>
                                <input type="text" name="phone" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="ttl">tanggal lahir</label>
                                <input type="date" name="ttl" class="form-control">
                            </div>

                            <input type="hidden" name="role" value="siswa">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
