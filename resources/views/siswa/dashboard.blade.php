@extends('template.main')
@section('container')
    <div class="container">
        <h2>Progress Siswa</h2>
        {{-- @dd($progressData) --}}

        @foreach ($progressData as $data)
            <div class="card my-3">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span><strong>{{ $data['chapter']->name }}</strong></span>
                    <span>{{ $data['completed'] }}/{{ $data['total'] }} selesai ({{ $data['percentage'] }}%)</span>
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
                </div>
            </div>
        @endforeach
    </div>
@endsection
{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        const buttons = document.querySelectorAll('[data-bs-toggle="collapse"]');
        console.log(buttons);

        buttons.forEach(button => {
            button.addEventListener('click', function() {
                const targetId = this.getAttribute('data-bs-target');
                const collapseEl = document.querySelector(targetId);

                if (collapseEl.classList.contains('show')) {
                    collapseEl.classList.remove('show');
                } else {
                    collapseEl.classList.add('show');
                }
            });
        });
    });
</script> --}}
