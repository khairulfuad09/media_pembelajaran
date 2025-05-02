@extends('template.main_admin')
@section('container')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Guru</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Data Guru</a></li>
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
                    Tambah Guru
                </button>
                <div class="row">
                    <div class="card p-3 mt-4">
                        <h4>Data Guru</h4>

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
                                @foreach ($gurus as $index => $guru)
                                    <tr>
                                        <td>{{ $guru->name }}</td>
                                        <td>{{ $guru->email }}</td>
                                        <td>{{ $guru->profile->gender ?? '-' }}</td>
                                        <td>{{ $guru->profile->alamat ?? '-' }}</td>
                                        <td>{{ $guru->profile->phone ?? '-' }}</td>
                                        <td>{{ $guru->profile->tanggal_lahir ?? '-' }}</td>
                                        <td>
                                            <button class="btn btn-warning btn-sm" data-bs-toggle="collapse"
                                                data-bs-target="#collapseEdit{{ $index }}">Edit</button>
                                            <form action="{{ route('hapus.guru', $guru->id) }}" method="POST"
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
                                        <td colspan="7">
                                            <form method="POST" action="{{ route('update.guru', $guru->id) }}">
                                                @csrf
                                                @method('PUT')
                                                <div class="row">
                                                    <div class="col-md-6 mb-2">
                                                        <label>Nama</label>
                                                        <input type="text" class="form-control" name="name"
                                                            value="{{ $guru->name }}">
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control" name="email"
                                                            value="{{ $guru->email }}">
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
                                                                {{ $guru->profile->gender == 'Laki-laki' ? 'selected' : '' }}>
                                                                Laki-laki</option>
                                                            <option
                                                                {{ $guru->profile->gender == 'Perempuan' ? 'selected' : '' }}>
                                                                Perempuan</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label>Alamat</label>
                                                        <input type="text" class="form-control"
                                                            value="{{ $guru->profile->alamat ?? '' }}" name="alamat">
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label>No. Telepon</label>
                                                        <input type="text" class="form-control"
                                                            value="{{ $guru->profile->phone ?? '' }}" name="phone">
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label>tanggal lahir</label>
                                                        <input type="date" class="form-control"
                                                            value="{{ $guru->profile->tanggal_lahir ?? '' }}"
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
                <form action="{{ route('tambah.guru') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTambahGuruLabel">Tambah Guru</h5>
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
                                <label for="address">Alamat</label>
                                <input type="text" name="address" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="phone">No. Telepon</label>
                                <input type="text" name="phone" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="ttl">tanggal lahir</label>
                                <input type="date" name="ttl" class="form-control">
                            </div>

                            <input type="hidden" name="role" value="guru">
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
