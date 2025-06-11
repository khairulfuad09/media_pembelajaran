@extends('template.main_admin')
@section('title', 'Nilai Siswa')

@section('container')
    {{-- @dd($nilai_siswa) --}}
    <div class="content-wrapper">
        <div class="container mt-4">
            <h2 class="text-center mb-4">Data Nilai Siswa</h2>

            <form method="GET" action="{{ route('guru.nilaiSiswa') }}">
                <input type="text" name="search" placeholder="Cari nama siswa..." value="{{ request('search') }}">
                <select name="kelas" onchange="this.form.submit()" class="border rounded px-3 py-1">
                    <option value="">Semua Kelas</option>
                    <option value="9A" {{ request('kelas') == '9A' ? 'selected' : '' }}>9A</option>
                    <option value="9B" {{ request('kelas') == '9B' ? 'selected' : '' }}>9B</option>
                    <option value="9C" {{ request('kelas') == '9C' ? 'selected' : '' }}>9C</option>
                    <option value="9D" {{ request('kelas') == '9D' ? 'selected' : '' }}>9D</option>
                </select>
                <button type="submit">Cari</button>
            </form>
            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-bordered mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th>Nama</th>
                                <th>NISN</th>
                                <th>Kelas</th>
                                <th>Gender</th>
                                <th>Rata-rata Nilai</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($nilai_siswa as $index => $nsiswa)
                                {{-- tr pertama --}}
                                <tr>
                                    <td>{{ $nsiswa->name }}</td>
                                    <td>{{ $nsiswa->NISN_NIP }}</td>
                                    <td>{{ $nsiswa->kelas }}</td>
                                    <td>{{ $nsiswa->profile->gender }}</td>
                                    <td>
                                        @php
                                            $totalNilai = 0;
                                            $jumlahNilai = 0;

                                            foreach ($nsiswa->grades as $grade) {
                                                $totalNilai += $grade->nilai;
                                                $jumlahNilai++;
                                            }

                                            foreach ($nsiswa->essays as $essay) {
                                                $totalNilai += $essay->nilai;
                                                $jumlahNilai++;
                                            }

                                            $rataRata =
                                                $jumlahNilai > 0 ? number_format($totalNilai / $jumlahNilai, 2) : '0';
                                        @endphp

                                        {{ $rataRata }}
                                    </td>
                                    <td>
                                        <button class="btn btn-info btn-sm" data-bs-toggle="collapse"
                                            data-bs-target="#detailNilai{{ $nsiswa->id }}">Detail</button>
                                    </td>
                                </tr>
                                {{-- tr kedua --}}
                                <tr class="collapse" id="detailNilai{{ $nsiswa->id }}">
                                    <td colspan="5" class="bg-light">
                                        <strong>Detail Kuis latihan:</strong>
                                        <table class="table table-bordered mt-2">
                                            <thead class="table-secondary">
                                                <tr>
                                                    <th>Subbab</th>
                                                    <th>bagian</th>
                                                    <th>Nilai</th>
                                                    <th>keterangan</th>
                                                    <th>aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($nsiswa->grades as $grade)
                                                    <tr>
                                                        <td>{{ $grade->chapter->title ?? '-' }}</td>
                                                        <td>{{ $grade->exercise->title ?? '-' }}</td>
                                                        <td>{{ $grade->nilai ?? '-' }}</td>
                                                        <td>
                                                            @if (isset($grade->nilai) && isset($grade->chapter->kkm))
                                                                @if ($grade->nilai >= $grade->chapter->kkm)
                                                                    Memenuhi KKM
                                                                @else
                                                                    Tidak Memenuhi KKM
                                                                @endif
                                                            @else
                                                                -
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-warning btn-sm btn-beri-nilai"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#nilaiKuisModal-{{ $grade->id }}">perbarui
                                                                nilai</button>
                                                            <button class="btn btn-danger btn-sm" disabled>Hapus</button>
                                                        </td>
                                                    </tr>
                                                    <div class="modal fade" id="nilaiKuisModal-{{ $grade->id }}"
                                                        tabindex="-1" aria-labelledby="nilaiModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <form id="formNilai" method="POST"
                                                                action="{{ route('beri.nilaiKuis', $grade->id) }}">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="nilaiModalLabel">Berikan
                                                                            Nilai</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <input type="hidden" name="">
                                                                        <input type="number" name="nilai" id="nilaiInput"
                                                                            class="form-control" min="0"
                                                                            max="100" required
                                                                            value="{{ $grade->nilai }}">
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Batal</button>
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Simpan Nilai</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </tbody>
                                        </table>

                                        <strong>Detail Nilai jawaban essay:</strong>
                                        <table class="table table-bordered mt-2">
                                            <thead class="table-secondary">
                                                <tr>
                                                    <th>Subbab</th>
                                                    <th>bagian</th>
                                                    <th>jawaban essay (jika ada)</th>
                                                    <th>nilai</th>
                                                    <th>keterangan</th>
                                                    <th>aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- @dd($nsiswa->essays) --}}
                                                @foreach ($nsiswa->essays as $essay)
                                                    <tr>
                                                        <td>{{ $essay->chapter->title ?? '-' }}</td>
                                                        <td>{{ $essay->exercise->title ?? '-' }}</td>
                                                        <td>{{ $essay->jawaban ?? '-' }}</td>
                                                        <td>{{ $essay->nilai ?? '-' }}</td>
                                                        <td>
                                                            @if (isset($essay->nilai) && isset($essay->chapter->kkm))
                                                                @if ($essay->nilai >= $essay->chapter->kkm)
                                                                    Memenuhi KKM
                                                                @else
                                                                    Tidak Memenuhi KKM
                                                                @endif
                                                            @else
                                                                -
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-warning btn-sm btn-beri-nilai"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#nilaiModal-{{ $essay->id }}">beri
                                                                nilai</button>
                                                            <button class="btn btn-danger btn-sm" disabled>Hapus</button>
                                                        </td>
                                                    </tr>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="nilaiModal-{{ $essay->id }}"
                                                        tabindex="-1" aria-labelledby="nilaiModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <form id="formNilai" method="POST"
                                                                action="{{ route('beri.nilaiSKM', $essay->id) }}">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="nilaiModalLabel">Berikan
                                                                            Nilai essay</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <input type="hidden" name="">
                                                                        <input type="number" name="nilai" id="nilaiInput"
                                                                            class="form-control" min="0"
                                                                            max="100" required
                                                                            value="{{ $essay->nilai }}">
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Batal</button>
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Simpan Nilai</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
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
        </div>
        <!-- Link navigasi pagination -->
        {{ $nilai_siswa->links() }}
    </div>
@endsection
