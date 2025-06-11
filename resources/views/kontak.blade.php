<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<<<<<<< HEAD
    <title>Halaman Kontak</title>
=======
    <title>Kontak Kami</title>
>>>>>>> e88827a4784e2fbee89519eb31e8f499845ee8cc
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .instagram-btn {
            background-color: #E1306C;
            color: white;
        }

        .instagram-btn:hover {
            background-color: #c7265c;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Hubungi Kami</h2>
        <div class="row">

            <!-- Form Kontak -->
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" placeholder="Nama Anda">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email Anda">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea class="form-control" id="message" rows="5" placeholder="Tulis pesan Anda..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>

            <!-- Info Kontak -->
            <div class="col-md-6">
                <h5>Informasi Kontak</h5>
                <ul class="list-unstyled">
                    <li><strong>Alamat:</strong> Jl. Pendidikan No. 123, Banjarmasin</li>
                    <li><strong>Email:</strong> info@sekolahku.sch.id</li>
                    <li><strong>Telepon:</strong> (0511) 123-456</li>
                    <li>
                        <strong>Instagram:</strong>
                        <br>
                        <a href="https://www.instagram.com/username_anda" target="_blank"
                            class="btn instagram-btn mt-2">
                            Kunjungi Instagram Kami
                        </a>
                    </li>
                </ul>

                <!-- Peta Lokasi (Opsional) -->
                <div class="mt-3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12..." width="100%" height="250"
                        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
