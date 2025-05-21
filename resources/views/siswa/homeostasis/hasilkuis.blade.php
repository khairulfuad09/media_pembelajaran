<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Kuis</title>
    <!-- Link ke Bootstrap CSS untuk styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <!-- Konten Kuis -->
        <div class="alert alert-success text-center">
            <h2>Kuis Selesai</h2>
            <h3>Nilai Anda: {{ session('nilai') }}</h3>
            <p>Jawaban benar: {{ session('benar') }} dari {{ session('total') }} soal</p>
            <a href="/skm_stimulasi"><button class="btn btn-secondary" onclick="">Next</button></a>
        </div>
    </div>

    <!-- Link ke Bootstrap JS untuk interaktivitas -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
