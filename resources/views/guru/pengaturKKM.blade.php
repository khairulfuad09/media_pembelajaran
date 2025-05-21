@extends('template.main_admin')

@section('container')
    <div class="content-wrapper">
        <div class="container mt-4">
            <h3>Pengaturan KKM (Tanpa Database)</h3>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            {{-- <form action="#" method="POST" class="row g-3">
                @csrf
                <div class="col-md-6">
                    <label for="subject_id" class="form-label">Mata Pelajaran</label>
                    <select name="subject_id" class="form-control" required>
                        <option value="">Pilih Mapel</option>
                        @foreach ($chapter as $chp => $c_kkm)
                            <option value="{{ $c_kkm->id }}">{{ $c_kkm->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="kkm" class="form-label">Nilai KKM</label>
                    <input type="number" name="kkm" class="form-control" min="0" max="100" required>
                </div>
                <div class="col-md-2 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary w-100">Simpan</button>
                </div>
            </form> --}}

            <hr>

            <h4>Daftar KKM</h4>
            <table class="table table-bordered mt-3">
                <thead class="table-dark">
                    <tr>
                        <th>Mata Pelajaran</th>
                        <th>KKM</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($chapter as $chp => $c_kkm)
                        <tr>
                            <form action="{{ route('update.kkm', $c_kkm->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <td>{{ $c_kkm->title }}</td>
                                <td><input type="number" name="kkm" class="form-control" min="0" max="100"
                                        value="{{ $c_kkm->kkm }}" required></td>
                                <td>
                                    <button type="submit" class="btn btn-primary w-100">Simpan</button>
                                </td>
                            </form>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
