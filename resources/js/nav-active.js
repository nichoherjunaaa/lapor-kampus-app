function setActiveNav(page) {
    // Remove active class from all nav items
    document.querySelectorAll('.nav-item').forEach(item => {
        item.classList.remove('active');
        item.classList.add('text-gray-600', 'hover:text-gray-800', 'hover:bg-gray-100');
    });

    // Add active class to selected nav items
    const desktopNav = document.getElementById(`nav-${page}`);
    const mobileNav = document.getElementById(`nav-${page}-mobile`);

    if (desktopNav) {
        desktopNav.classList.add('active');
        desktopNav.classList.remove('text-gray-600', 'hover:text-gray-800', 'hover:bg-gray-100');
    }

    if (mobileNav) {
        mobileNav.classList.add('active');
        mobileNav.classList.remove('text-gray-600');
    }

    // Handle page navigation (in real app, this would navigate to different pages)
    if (page === 'lapor') {
        window.location.href = 'create';
    } else if (page === 'daftar') {
        window.location.href = 'report';
    }
}