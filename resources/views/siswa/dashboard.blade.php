@extends('template.main')
@section('title', 'Dashboard')
@section('container')
    <div class="container">
        <h2>Progress Siswa</h2>
        {{-- @dd(Auth::user()->progress->count()) --}}
        <div class="alert alert-info" role="alert">
            <strong>ℹ️ Penjelasan:</strong> Progress dihitung dari jumlah tahapan yang sudah diselesaikan siswa dibagi total
            tahapan, kemudian dikalikan 100%.
            Contoh: jika sudah selesai 6 dari 7 tahapan, maka progress = (6 ÷ 7) × 100% ≈ 86%.
            Setiap tahapan bernilai sama besar, dan akan ditandai ✔️ Selesai jika sudah dikerjakan, atau ❌ Belum jika belum
            dikerjakan.
        </div>

        <div class="alert alert-warning" role="alert">
            <strong>🔒 Catatan:</strong> Evaluasi baru bisa diakses setelah semua subbab pada materi tersebut
            telah selesai dikerjakan.
        </div>


        @foreach ($progressData as $data)
            <div class="card my-3">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span><strong>{{ $data['chapter']->name }}</strong></span>
                    <span>(subbab {{ $data['chapter']->title }}) {{ $data['completed'] }}/{{ $data['total'] }} selesai
                        ({{ $data['percentage'] }}%)</span>
                    <button class="btn btn-sm btn-primary" data-bs-toggle="collapse"
                        data-bs-target="#chapter{{ $data['chapter']->id }}">
                        Detail
                    </button>
                </div>

                <div id="chapter{{ $data['chapter']->id }}" class="collapse">
                    <ul class="list-group list-group-flush">
                        @foreach ($data['exercises'] as $exercise)
                            <li class="list-group-item d-flex justify-content-between">
                                <span>{{ $exercise->exercise->title ?? 'Exercise ' . $exercise->exercise_id }}</span>
                                @if ($exercise->is_complete)
                                    <span class="text-success">✔️ Selesai</span>
                                @else
                                    <span class="text-danger">❌ Belum</span>
                                @endif
                            </li>
                        @endforeach

                    </ul>
                    <div class="card-footer text-end mt-2">
                        @if (strtolower($data['chapter']->title) !== 'evaluasi')
                            <a href="{{ $data['route'][$loop->index] }}" class="btn btn-success">
                                📖 Mulai Belajar
                            </a>
                        @endif

                        @if ($loop->last)
                            @php
                                $filtered = collect($progressData)->filter(function ($item) {
                                    return strtolower($item['chapter']->title) !== 'evaluasi';
                                });
                                $total_subbab = $filtered->sum('total');
                                $total_selesai = $filtered->sum('completed');
                            @endphp

                            @if ($total_selesai == $total_subbab)
                                <a href="{{ url('/evaluasi') }}" class="btn btn-warning ms-2">
                                    📝 Mulai Evaluasi
                                </a>
                            @else
                                <button class="btn btn-secondary ms-2"
                                    onclick="alert('Selesaikan semua subbab terlebih dahulu untuk membuka evaluasi')"
                                    disabled>
                                    📝 Mulai Evaluasi (Terkunci)
                                </button>
                            @endif
                        @endif
                    </div>


                </div>
            </div>
        @endforeach
    </div>
@endsection
