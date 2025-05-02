
jQuery(document).ready(function ($) {
    // console.log("jQuery Loaded!"); // Debugging
    $('#sidebarCollapse').on('click', function () {
        // console.log("Button clicked!"); // Debugging
        $('#sidebar').toggleClass('active');
    });
});


document.addEventListener("DOMContentLoaded", function () {
    var dropdowns = document.querySelectorAll('.dtp');

    dropdowns.forEach(dropdown => {
        dropdown.addEventListener('click', function (event) {
            event.preventDefault(); // Mencegah default action dari anchor
            var submenu = this.nextElementSibling; // Ambil submenu yang ada setelah dropdown
            // Tutup semua submenu sebelum membuka yang baru
            console.log(document.querySelectorAll('.pageSubmenu'));
            document.querySelectorAll('.pageSubmenu').forEach(sub => {
                if (sub !== submenu) {
                    sub.classList.remove('show');
                }
            });

            // Tampilkan/sembunyikan submenu terkait
            if (submenu) {
                submenu.classList.toggle('show');
            }

            // Mencegah event bubbling agar event tidak menyebar ke document
            event.stopPropagation();
        });
    });

    // Menutup dropdown jika klik di luar elemen .dtp
    document.addEventListener('click', function () {
        document.querySelectorAll('.pageSubmenu').forEach(sub => {
            sub.classList.remove('show'); // Tutup semua dropdown
        });
    });
});

