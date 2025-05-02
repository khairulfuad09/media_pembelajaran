function togglePassword(index, realPassword) {
    const pwElement = document.getElementById('pw-' + index);
    if (pwElement.innerText === '********') {
        pwElement.innerText = realPassword;
    } else {
        pwElement.innerText = '********';
    }
}
document.addEventListener('DOMContentLoaded', function () {
    const currentUrl = window.location.pathname;

    // Reset semua aktif dan menu terbuka
    document.querySelectorAll('.nav-sidebar .nav-link').forEach(link => {
        link.classList.remove('active');
    });

    document.querySelectorAll('.nav-sidebar .nav-item').forEach(item => {
        item.classList.remove('menu-open');
    });

    // Cari link yang cocok dengan URL saat ini
    document.querySelectorAll('.nav-sidebar a').forEach(link => {
        const linkUrl = link.getAttribute('href');

        if (linkUrl && currentUrl === linkUrl) {
            // Tandai link anak sebagai aktif
            link.classList.add('active');

            // Dapatkan <li class="nav-item">
            const navItem = link.closest('.nav-item');

            if (navItem) {
                navItem.classList.add('menu-open');

                // Jika link ini berada di dalam nav-treeview (submenu)
                if (link.closest('.nav-treeview')) {
                    // Ambil menu parent di atasnya
                    const parentNav = navItem.closest('.nav-item.menu-open');
                    if (parentNav) {
                        parentNav.classList.add('menu-open');

                        // Tambahkan class active ke parent <a>
                        const parentLink = parentNav.querySelector('.nav-link');
                        if (parentLink) {
                            parentLink.classList.add('active');
                        }
                    }
                }
            }
        }
    });
});

