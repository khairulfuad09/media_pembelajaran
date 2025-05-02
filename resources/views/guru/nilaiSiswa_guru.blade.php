@extends('template.main_admin')

@section('container')
    <div class="content-wrapper">
        <div class="container mt-4">
            <h2 class="text-center mb-4">Data Nilai Siswa</h2>

            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-bordered mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Rata-rata Nilai</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $dataSiswa = [
                                    [
                                        'nama' => 'Ahmad Rizki',
                                        'email' => 'rizki@mail.com',
                                        'gender' => 'Laki-laki',
                                        'rata' => 84,
                                        'detail' => [
                                            ['subbab' => 'Sistem Saraf', 'latihan' => 'Latihan 1', 'nilai' => 85],
                                            ['subbab' => 'Hormon', 'latihan' => 'Latihan 2', 'nilai' => 83],
                                        ],
                                    ],
                                    [
                                        'nama' => 'Nadia Lestari',
                                        'email' => 'nadia@mail.com',
                                        'gender' => 'Perempuan',
                                        'rata' => 92,
                                        'detail' => [
                                            ['subbab' => 'Sistem Saraf', 'latihan' => 'Latihan 1', 'nilai' => 90],
                                            ['subbab' => 'Hormon', 'latihan' => 'Latihan 2', 'nilai' => 94],
                                        ],
                                    ],
                                ];
                            @endphp

                            @foreach ($dataSiswa as $index => $siswa)
                                <tr>
                                    <td>{{ $siswa['nama'] }}</td>
                                    <td>{{ $siswa['email'] }}</td>
                                    <td>{{ $siswa['gender'] }}</td>
                                    <td>{{ $siswa['rata'] }}</td>
                                    <td>
                                        <button class="btn btn-info btn-sm" data-bs-toggle="collapse"
                                            data-bs-target="#detailNilai{{ $index }}">Detail</button>
                                    </td>
                                </tr>
                                <tr class="collapse" id="detailNilai{{ $index }}">
                                    <td colspan="5" class="bg-light">
                                        <strong>Detail Nilai latihan:</strong>
                                        <table class="table table-bordered mt-2">
                                            <thead class="table-secondary">
                                                <tr>
                                                    <th>Subbab</th>
                                                    <th>Latihan</th>
                                                    <th>Nilai</th>
                                                    <th>aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($siswa['detail'] as $nilai)
                                                    <tr>
                                                        <td>{{ $nilai['subbab'] }}</td>
                                                        <td>{{ $nilai['latihan'] }}</td>
                                                        <td>{{ $nilai['nilai'] }}</td>
                                                        <td>
                                                            <button class="btn btn-warning btn-sm" disabled>perbarui
                                                                nilai</button>
                                                            <button class="btn btn-danger btn-sm" disabled>Hapus</button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                        <strong>Detail Nilai quiz:</strong>
                                        <table class="table table-bordered mt-2">
                                            <thead class="table-secondary">
                                                <tr>
                                                    <th>Subbab</th>
                                                    <th>bagian</th>
                                                    <th>jawaban essay (jika ada)</th>
                                                    <th>nilai</th>
                                                    <th>aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <button class="btn btn-warning btn-sm" disabled>perbarui
                                                            nilai</button>
                                                        <button class="btn btn-danger btn-sm" disabled>Hapus</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
