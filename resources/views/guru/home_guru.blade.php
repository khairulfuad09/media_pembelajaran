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
                        <form action="{{ route('guru.indexProgressHalGuru') }}" method="GET" class="mb-3">
                            <input type="text" name="search" class="form-control" placeholder="Cari nama siswa..."
                                value="{{ request('search') }}">
                            <button type="submit" class="btn btn-primary mt-2">Cari</button>
                        </form>
                        <div class="card-body p-0">
                            <table class="table mb-0 table-bordered table-striped">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Nama</th>
                                        <th>jumlah tahapan</th>
                                        <th>sudah selesai</th>
                                        <th>persentase</th>
                                        <th>aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @dd($progress_siswa) --}}
                                    @foreach ($progress_siswa as $index => $psiswa)
                                        {{-- @dd($psiswa) --}}
                                        @php
                                            $total = $psiswa->progress->count();
                                            $selesai = $psiswa->progress->where('is_complete', true)->count();
                                            $persen = $total > 0 ? round(($selesai / $total) * 100) : 0;
                                        @endphp <tr>
                                            <td>{{ $psiswa->name }}</td>
                                            <td>{{ $total }}</td>
                                            <td>{{ $selesai }}</td>
                                            <td>{{ $persen }}%</td>
                                            <td>
                                                <button class="btn btn-info btn-sm" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseDetail{{ $index }}">Detail</button>
                                            </td>
                                        </tr>
                                        <tr class="collapse" id="collapseDetail{{ $index }}">
                                            <td colspan="5" class="bg-light">
                                                <strong>Progress Detail:</strong>
                                                <table class="table table-sm table-bordered mt-2">
                                                    <thead>
                                                        <tr>
                                                            <th>Subbab</th>
                                                            <th>Latihan</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($psiswa->progress as $progress)
                                                            <tr>
                                                                <td>{{ $progress->chapter->title ?? '-' }}</td>
                                                                <td>{{ $progress->exercise->title ?? '-' }}</td>
                                                                <td>
                                                                    @if ($progress->is_complete)
                                                                        <span class="badge bg-success">Selesai</span>
                                                                    @else
                                                                        <span class="badge bg-secondary">Belum</span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{ $progress_siswa->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
