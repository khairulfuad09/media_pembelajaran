<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    {{-- <!-- vendor css --> bootstrap 5 --}}
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="css/main.css" rel="stylesheet">
    <link href="css/main2.css" rel="stylesheet">
    <link href="css/saya.css" rel="stylesheet">
    <link href="css/partials/sidebars.css" rel="stylesheet">
    <link href="css/siswa/sistemKoordinasiManusia/kesimpulan.css" rel="stylesheet">
    @yield('css')
</head>

<body>

    @include('partials.sidebars')

    @yield('container')

    @include('partials.endsidebar')
    @include('partials.footer')

    <!-- Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/siswa/sistemKoordinasiManusia/kesimpulan.js') }}"></script>
    <script src="{{ asset('js/partials/sidebars.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    @yield('js')

    <!-- jQuery (Diperlukan oleh Bootstrap 4, tapi tidak Bootstrap 5) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tesseract.js/4.0.2/tesseract.min.js"></script>

    {{-- <script src="js/bootstrap/bootstrap.bundle.min.js"></script> --}}
</body>

</html>
