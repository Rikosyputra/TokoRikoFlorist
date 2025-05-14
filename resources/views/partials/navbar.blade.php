<nav class="navbar">
    <div class="container">
        <a href="/" class="logo-brand">
            <img src="{{ asset('images/logo.png') }}" alt="Riko Florist Logo" class="header-logo">
            <span class="brand-name">RIKO FLORIST</span>
        </a>
        
        <div class="desktop-menu">
            <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
            
            <div class="dropdown">
                <button class="nav-link dropbtn {{ request()->is('produk*') ? 'active' : '' }}">
                    Produk 
                    <svg class="dropdown-arrow" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1.5L6 6.5L11 1.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="dropdown-content">
                    <div class="dropdown-grid">
                        <a href="/produk/bunga-papan" class="dropdown-item">Bunga Papan</a>
                        <a href="/produk/buket-bunga" class="dropdown-item">Buket Bunga</a>
                        <a href="/produk/bunga-meja" class="dropdown-item">Bunga Meja</a>
                        <a href="/produk/standing-flower" class="dropdown-item">Standing Flower</a>
                        <a href="/produk/bunga-krans" class="dropdown-item">Bunga Krans</a>
                        <a href="/produk/bunga-salib" class="dropdown-item">Bunga Salib</a>
                        <a href="/produk/parcel-buah" class="dropdown-item">Parcel Buah</a>
                    </div>
                </div>
            </div>
            
            <a href="/custom-order" class="nav-link {{ request()->is('custom-order') ? 'active' : '' }}">CUSTOM ORDER</a>
            <a href="/about-us" class="nav-link {{ request()->is('about-us') ? 'active' : '' }}">ABOUT US</a>
            <a href="/contact" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">CONTACT</a>
        </div>
        
        <button class="menu-toggle" id="mobileMenuToggle" aria-label="Toggle menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</nav>

<div class="mobile-overlay" id="mobileOverlay"></div>