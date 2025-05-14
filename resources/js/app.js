// Perbaikan JavaScript (letakkan di file utama/app.js)
document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle - bekerja di semua halaman
    const menuToggle = document.querySelector('.menu-toggle');
    const desktopMenu = document.querySelector('.desktop-menu');
    
    if (menuToggle && desktopMenu) {
        menuToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            this.classList.toggle('active');
            desktopMenu.classList.toggle('active');
            document.body.style.overflow = this.classList.contains('active') ? 'hidden' : '';
        });
        
        // Close menu when clicking on nav links
        document.querySelectorAll('.desktop-menu a').forEach(link => {
            link.addEventListener('click', () => {
                menuToggle.classList.remove('active');
                desktopMenu.classList.remove('active');
                document.body.style.overflow = '';
            });
        });
    }
    
    // Dropdown functionality
    document.querySelectorAll('.dropbtn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                e.stopPropagation();
                
                const dropdown = this.closest('.dropdown');
                const content = dropdown.querySelector('.dropdown-content');
                
                // Close other dropdowns
                document.querySelectorAll('.dropdown').forEach(item => {
                    if (item !== dropdown) {
                        item.classList.remove('active');
                        item.querySelector('.dropdown-content').style.display = 'none';
                    }
                });
                
                // Toggle current dropdown
                dropdown.classList.toggle('active');
                content.style.display = dropdown.classList.contains('active') ? 'block' : 'none';
            }
        });
    });
    
    // Close when clicking outside
    document.addEventListener('click', function() {
        const menuToggle = document.querySelector('.menu-toggle');
        const desktopMenu = document.querySelector('.desktop-menu');
        
        if (menuToggle && desktopMenu) {
            menuToggle.classList.remove('active');
            desktopMenu.classList.remove('active');
            document.body.style.overflow = '';
        }
        
        document.querySelectorAll('.dropdown').forEach(dropdown => {
            dropdown.classList.remove('active');
            dropdown.querySelector('.dropdown-content').style.display = 'none';
        });
    });
});