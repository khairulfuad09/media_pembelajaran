@extends('template.main_admin')
@section('container')
    <div class="content-wrapper">
        <div class="container mt-4">
            <h2 class="text-center mb-4">Dashboard Guru</h2>

            <div class="row">
                <!-- ====================== PROFIL GURU (KIRI) ===================== -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-primary text-white">Profil Guru</div>
                        <div class="card-body">
                            <p><strong>Nama:</strong> Guru Contoh</p>
                            <p><strong>Email:</strong> guru@example.com</p>
                            <p><strong>Gender:</strong> Laki-laki</p>
                            <p><strong>Alamat:</strong> Jl. Pendidikan No. 123</p>
                            <p><strong>Telepon:</strong> 081234567890</p>
                        </div>
                    </div>
                </div>

                <!-- ====================== NILAI SISWA (KANAN) ===================== -->
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-success text-white">Nilai Siswa</div>
                        <div class="card-body p-0">
                            <table class="table mb-0 table-bordered table-striped">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Nama</th>
                                        <th>Subbab</th>
                                        <th>Latihan</th>
                                        <th>Nilai</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $nilaiSiswa = [
                                            [
                                                'nama' => 'Ahmad Rizki',
                                                'subbab' => 'Sistem Saraf',
                                                'latihan' => 'Latihan 1',
                                                'nilai' => 85,
                                                'detail' => 'Menjawab 8 dari 10 soal dengan benar.',
                                            ],
                                            [
                                                'nama' => 'Nadia Lestari',
                                                'subbab' => 'Sistem Saraf',
                                                'latihan' => 'Latihan 1',
                                                'nilai' => 90,
                                                'detail' => 'Sangat baik, hanya satu jawaban salah.',
                                            ],
                                            [
                                                'nama' => 'Putra Wijaya',
                                                'subbab' => 'Hormon',
                                                'latihan' => 'Latihan 2',
                                                'nilai' => 78,
                                                'detail' => 'Kurang pada soal definisi hormon.',
                                            ],
                                            [
                                                'nama' => 'Sari Amelia',
                                                'subbab' => 'Alat Indra',
                                                'latihan' => 'Latihan 1',
                                                'nilai' => 92,
                                                'detail' => 'Sempurna! Semua jawaban benar.',
                                            ],
                                        ];
                                    @endphp

                                    @foreach ($nilaiSiswa as $index => $siswa)
                                        <tr>
                                            <td>{{ $siswa['nama'] }}</td>
                                            <td>{{ $siswa['subbab'] }}</td>
                                            <td>{{ $siswa['latihan'] }}</td>
                                            <td>{{ $siswa['nilai'] }}</td>
                                            <td>
                                                <button class="btn btn-info btn-sm" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseDetail{{ $index }}">Detail</button>
                                            </td>
                                        </tr>
                                        <tr class="collapse" id="collapseDetail{{ $index }}">
                                            <td colspan="5" class="bg-light">
                                                <strong>Catatan Guru:</strong> {{ $siswa['detail'] }}
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
