<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riko Florist - Premium Flower Arrangements</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a href="/" class="logo-brand">
                <img src="{{ asset('images/logo.png') }}" alt="Riko Florist Logo" class="header-logo">
                <span class="brand-name">RIKO FLORIST</span>
            </a>
            
            <div class="desktop-menu">
                <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                
                <!-- Produk Dropdown -->
                <div class="dropdown">
                    <a href="#produk" class="nav-link dropbtn {{ request()->is('produk*') ? 'active' : '' }}">
                        Produk 
                        <svg class="dropdown-arrow" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1.5L6 6.5L11 1.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                    <div class="dropdown-content">
                        <div class="dropdown-grid">
                            <a href="/produk/bunga-papan" class="dropdown-item">
                                <div>
                                    <h4>Bunga Papan</h4>
                                </div>
                            </a>
                            <a href="/produk/buket-bunga" class="dropdown-item">
                                <div>
                                    <h4>Buket Bunga</h4>
                                </div>
                            </a>
                            <a href="/produk/bunga-meja" class="dropdown-item">
                                <div>
                                    <h4>Bunga Meja</h4>
                                </div>
                            </a>
                            <a href="/produk/standing-flower" class="dropdown-item">
                                <div>
                                    <h4>Standing Flower</h4>
                                </div>
                            </a>
                            <a href="/produk/bunga-krans" class="dropdown-item">
                                <div>
                                    <h4>Bunga Krans</h4>
                                </div>
                            </a>
                            <a href="/produk/bunga-salib" class="dropdown-item">
                                <div>
                                    <h4>Bunga Salib</h4>
                                </div>
                            </a>
                            <a href="/produk/parcel-buah" class="dropdown-item">
                                <div>
                                    <h4>Parcel Buah</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <a href="/custom-order" class="nav-link {{ request()->is('custom-order') ? 'active' : '' }}">CUSTOM ORDER</a>
                <a href="/about-us" class="nav-link {{ request()->is('about-us') ? 'active' : '' }}">ABOUT US</a>
                <a href="/contact" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">CONTACT</a>
            </div>
            
            <div class="menu-toggle" id="mobile-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Hero Section with Sliding Background -->
    <section class="hero">
        <div class="hero-background">
            <div class="slide active" style="background-image: url('{{ asset('images/slide1.jpg') }}')"></div>
            <div class="slide" style="background-image: url('{{ asset('images/slide2.jpg') }}')"></div>
            <div class="slide" style="background-image: url('{{ asset('images/slide3.jpg') }}')"></div>
            <div class="bg-overlay"></div>
        </div>
        
        <div class="hero-content">
            <h2><strong>SELAMAT DATANG DI RIKO FLORIST</strong></h2>
            <h1>TOKO BUNGA TERBAIK DI BOGOR</h1>
            <p>Menyediakan Papan Bunga, Happy wedding, Selamat & Sukses, Congratulations, Duka Cita, Standing Flower, dll.</p>
            <a href="#" class="shop-button">SHOP NOW</a>
        </div>
    </section>

    <!-- Information Section -->
<section class="info-section">
    <div class="info-container">
        <div class="info-card">
            <div class="info-icon">💐</div>
            <h3>HARGA TERJANGKAU</h3>
            <p>Harga bunga kami terjangkau dengan kualitas terbaik.</p>
        </div>
        
        <div class="info-card">
            <div class="info-icon">🚚</div>
            <h3>PENGIRIMAN AMAN</h3>
            <p>Pengiriman aman & cepat ke seluruh Indonesia.</p>
        </div>
        
        <div class="info-card">
            <div class="info-icon">⏰</div>
            <h3>PELAYANAN 24 JAM</h3>
            <p>Kami siap melayani order bunga 24 jam.</p>
        </div>

        <div class="info-card">
            <div class="info-icon">🎁</div>
            <h3>GRATIS ONGKIR BOGOR</h3>
            <p>Khusus wilayah Bogor bebas biaya pengiriman!</p>
        </div>
    </div>
</section>



<!-- KATALOG BUNGA PAPAN -->
<section class="catalog-section">
    <div class="section-title-wrapper">
        <h2 class="section-title">KATALOG BUNGA PAPAN</h2>
    </div>
    
    <div class="catalog-grid">
        <!-- Product 1 -->
        <div class="catalog-card">
            <img src="{{ asset('images/bunga-papan/bungapapan1.png') }}" alt="Bunga Papan Selamat & Sukses" class="catalog-image">
            <div class="catalog-info">
                <h3>Bunga Papan Selamat & Sukses</h3>
                <div class="price-action">
                    <span class="catalog-price">Rp 1.800.000</span>
                    <a href="https://wa.me/6283811931178?text=Halo%20Riko%20Florist,%20saya%20ingin%20memesan%20Bunga%20Papan%20Selamat%20%26%20Sukses" class="order-btn">Pesan Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="catalog-card">
            <img src="{{ asset('images/bunga-papan/bungapapan2.png') }}" alt="Bunga Papan Selamat" class="catalog-image">
            <div class="catalog-info">
                <h3>Bunga Papan Selamat</h3>
                <div class="price-action">
                    <span class="catalog-price">Rp 1.800.000</span>
                    <a href="https://wa.me/6283811931178?text=Halo%20Riko%20Florist,%20saya%20ingin%20memesan%20Bunga%20Papan%20Selamat" class="order-btn">Pesan Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Product 3 -->
        <div class="catalog-card">
            <img src="{{ asset('images/bunga-papan/bungapapan.png') }}" alt="Bunga Papan Selamat" class="catalog-image">
            <div class="catalog-info">
                <h3>Bunga Papan Selamat</h3>
                <div class="price-action">
                    <span class="catalog-price">Rp 1.800.000</span>
                    <a href="https://wa.me/6283811931178?text=Halo%20Riko%20Florist,%20saya%20ingin%20memesan%20Bunga%20Papan%20Selamat" class="order-btn">Pesan Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Product 4 -->
        <div class="catalog-card">
            <img src="{{ asset('images/bunga-papan/bungapapan4.png') }}" alt="Standing Flower" class="catalog-image">
            <div class="catalog-info">
                <h3>Standing Flower</h3>
                <div class="price-action">
                    <span class="catalog-price">Rp 1.800.000</span>
                    <a href="https://wa.me/6283811931178?text=Halo%20Riko%20Florist,%20saya%20ingin%20memesan%20Standing%20Flower" class="order-btn">Pesan Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Product 5 -->
        <div class="catalog-card">
            <img src="{{ asset('images/bunga-papan/bungapapan5.png') }}" alt="Bunga Papan Congratulations" class="catalog-image">
            <div class="catalog-info">
                <h3>Bunga Papan Congratulations</h3>
                <div class="price-action">
                    <span class="catalog-price">Rp 2.000.000</span>
                    <a href="https://wa.me/6283811931178?text=Halo%20Riko%20Florist,%20saya%20ingin%20memesan%20Bunga%20Papan%20Congratulations" class="order-btn">Pesan Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Product 6 -->
        <div class="catalog-card">
            <img src="{{ asset('images/bunga-papan/bungapapan6.png') }}" alt="Bunga Papan Duka Cita" class="catalog-image">
            <div class="catalog-info">
                <h3>Bunga Papan Duka Cita</h3>
                <div class="price-action">
                    <span class="catalog-price">Rp 1.500.000</span>
                    <a href="https://wa.me/6283811931178?text=Halo%20Riko%20Florist,%20saya%20ingin%20memesan%20Bunga%20Papan%20Duka%20Cita" class="order-btn">Pesan Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- KATALOG BUNGA BUKET -->
<section class="catalog-section">
    <div class="section-title-wrapper">
        <h2 class="section-title">KATALOG BUNGA BUKET</h2>
    </div>
    
    <div class="catalog-grid">
        <!-- Product 1 -->
        <div class="catalog-card">
            <img src="{{ asset('images/bunga-buket/buket1.png') }}" alt="Buket Mawar Merah" class="catalog-image">
            <div class="catalog-info">
                <h3>Buket Mawar Merah</h3>
                <div class="price-action">
                    <span class="catalog-price">Rp 850.000</span>
                    <a href="https://wa.me/6283811931178?text=Halo%20Riko%20Florist,%20saya%20ingin%20memesan%20Buket%20Mawar%20Merah" class="order-btn">Pesan Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="catalog-card">
            <img src="{{ asset('images/bunga-buket/buket2.png') }}" alt="Buket Baby Breath" class="catalog-image">
            <div class="catalog-info">
                <h3>Buket Baby Breath</h3>
                <div class="price-action">
                    <span class="catalog-price">Rp 750.000</span>
                    <a href="https://wa.me/6283811931178?text=Halo%20Riko%20Florist,%20saya%20ingin%20memesan%20Buket%20Baby%20Breath" class="order-btn">Pesan Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Product 3 -->
        <div class="catalog-card">
            <img src="{{ asset('images/bunga-buket/buket3.png') }}" alt="Buket Tulip" class="catalog-image">
            <div class="catalog-info">
                <h3>Buket Tulip</h3>
                <div class="price-action">
                    <span class="catalog-price">Rp 950.000</span>
                    <a href="https://wa.me/6283811931178?text=Halo%20Riko%20Florist,%20saya%20ingin%20memesan%20Buket%20Tulip" class="order-btn">Pesan Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Product 4 -->
        <div class="catalog-card">
            <img src="{{ asset('images/bunga-buket/buket4.png') }}" alt="Buket Lavender" class="catalog-image">
            <div class="catalog-info">
                <h3>Buket Lavender</h3>
                <div class="price-action">
                    <span class="catalog-price">Rp 800.000</span>
                    <a href="https://wa.me/6283811931178?text=Halo%20Riko%20Florist,%20saya%20ingin%20memesan%20Buket%20Lavender" class="order-btn">Pesan Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Product 5 -->
        <div class="catalog-card">
            <img src="{{ asset('images/bunga-buket/buket5.png') }}" alt="Buket Gardenia" class="catalog-image">
            <div class="catalog-info">
                <h3>Buket Gardenia</h3>
                <div class="price-action">
                    <span class="catalog-price">Rp 900.000</span>
                    <a href="https://wa.me/6283811931178?text=Halo%20Riko%20Florist,%20saya%20ingin%20memesan%20Buket%20Gardenia" class="order-btn">Pesan Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Product 6 -->
        <div class="catalog-card">
            <img src="{{ asset('images/bunga-buket/buket6.png') }}" alt="Buket Mixed Flowers" class="catalog-image">
            <div class="catalog-info">
                <h3>Buket Mixed Flowers</h3>
                <div class="price-action">
                    <span class="catalog-price">Rp 1.100.000</span>
                    <a href="https://wa.me/6283811931178?text=Halo%20Riko%20Florist,%20saya%20ingin%20memesan%20Buket%20Mixed%20Flowers" class="order-btn">Pesan Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- KATALOG BUNGA MEJA -->
<section class="catalog-section" style="background-color: #f5f5f5;">
    <div class="section-title-wrapper">
        <h2 class="section-title">KATALOG BUNGA MEJA</h2>
    </div>
    
    <div class="catalog-grid">
        <!-- Product 1 -->
        <div class="catalog-card">
            <img src="{{ asset('images/bunga-meja/meja1.png') }}" alt="Rangkaian Meja Mawar" class="catalog-image">
            <div class="catalog-info">
                <h3>Rangkaian Meja Mawar</h3>
                <div class="price-action">
                    <span class="catalog-price">Rp 650.000</span>
                    <a href="https://wa.me/6283811931178?text=Halo%20Riko%20Florist,%20saya%20ingin%20memesan%20Rangkaian%20Meja%20Mawar" class="order-btn">Pesan Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="catalog-card">
            <img src="{{ asset('images/bunga-meja/meja2.png') }}" alt="Rangkaian Meja Anggrek" class="catalog-image">
            <div class="catalog-info">
                <h3>Rangkaian Meja Anggrek</h3>
                <div class="price-action">
                    <span class="catalog-price">Rp 750.000</span>
                    <a href="https://wa.me/6283811931178?text=Halo%20Riko%20Florist,%20saya%20ingin%20memesan%20Rangkaian%20Meja%20Anggrek" class="order-btn">Pesan Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Product 3 -->
        <div class="catalog-card">
            <img src="{{ asset('images/bunga-meja/meja3.png') }}" alt="Rangkaian Meja Lily" class="catalog-image">
            <div class="catalog-info">
                <h3>Rangkaian Meja Lily</h3>
                <div class="price-action">
                    <span class="catalog-price">Rp 700.000</span>
                    <a href="https://wa.me/6283811931178?text=Halo%20Riko%20Florist,%20saya%20ingin%20memesan%20Rangkaian%20Meja%20Lily" class="order-btn">Pesan Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Product 4 -->
        <div class="catalog-card">
            <img src="{{ asset('images/bunga-meja/meja4.png') }}" alt="Rangkaian Meja Mini" class="catalog-image">
            <div class="catalog-info">
                <h3>Rangkaian Meja Mini</h3>
                <div class="price-action">
                    <span class="catalog-price">Rp 550.000</span>
                    <a href="https://wa.me/6283811931178?text=Halo%20Riko%20Florist,%20saya%20ingin%20memesan%20Rangkaian%20Meja%20Mini" class="order-btn">Pesan Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Product 5 -->
        <div class="catalog-card">
            <img src="{{ asset('images/bunga-meja/meja5.png') }}" alt="Rangkaian Meja Modern" class="catalog-image">
            <div class="catalog-info">
                <h3>Rangkaian Meja Modern</h3>
                <div class="price-action">
                    <span class="catalog-price">Rp 850.000</span>
                    <a href="https://wa.me/6283811931178?text=Halo%20Riko%20Florist,%20saya%20ingin%20memesan%20Rangkaian%20Meja%20Modern" class="order-btn">Pesan Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Product 6 -->
        <div class="catalog-card">
            <img src="{{ asset('images/bunga-meja/meja6.png') }}" alt="Rangkaian Meja Klasik" class="catalog-image">
            <div class="catalog-info">
                <h3>Rangkaian Meja Klasik</h3>
                <div class="price-action">
                    <span class="catalog-price">Rp 800.000</span>
                    <a href="https://wa.me/6283811931178?text=Halo%20Riko%20Florist,%20saya%20ingin%20memesan%20Rangkaian%20Meja%20Klasik" class="order-btn">Pesan Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- KATALOG STANDING FLOWER -->
<section class="catalog-section">
    <div class="section-title-wrapper">
        <h2 class="section-title">KATALOG STANDING FLOWER</h2>
    </div>
    
    <div class="catalog-grid">
        <!-- Product 1 -->
        <div class="catalog-card">
            <img src="{{ asset('images/standing-flower/standing1.png') }}" alt="Standing Flower Mawar" class="catalog-image">
            <div class="catalog-info">
                <h3>Standing Flower Mawar</h3>
                <div class="price-action">
                    <span class="catalog-price">Rp 1.500.000</span>
                    <a href="https://wa.me/6283811931178?text=Halo%20Riko%20Florist,%20saya%20ingin%20memesan%20Standing%20Flower%20Mawar" class="order-btn">Pesan Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="catalog-card">
            <img src="{{ asset('images/standing-flower/standing2.png') }}" alt="Standing Flower Anggrek" class="catalog-image">
            <div class="catalog-info">
                <h3>Standing Flower Anggrek</h3>
                <div class="price-action">
                    <span class="catalog-price">Rp 1.800.000</span>
                    <a href="https://wa.me/6283811931178?text=Halo%20Riko%20Florist,%20saya%20ingin%20memesan%20Standing%20Flower%20Anggrek" class="order-btn">Pesan Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Product 3 -->
        <div class="catalog-card">
            <img src="{{ asset('images/standing-flower/standing3.png') }}" alt="Standing Flower Lily" class="catalog-image">
            <div class="catalog-info">
                <h3>Standing Flower Lily</h3>
                <div class="price-action">
                    <span class="catalog-price">Rp 1.700.000</span>
                    <a href="https://wa.me/6283811931178?text=Halo%20Riko%20Florist,%20saya%20ingin%20memesan%20Standing%20Flower%20Lily" class="order-btn">Pesan Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Product 4 -->
        <div class="catalog-card">
            <img src="{{ asset('images/standing-flower/standing4.png') }}" alt="Standing Flower Premium" class="catalog-image">
            <div class="catalog-info">
                <h3>Standing Flower Premium</h3>
                <div class="price-action">
                    <span class="catalog-price">Rp 2.200.000</span>
                    <a href="https://wa.me/6283811931178?text=Halo%20Riko%20Florist,%20saya%20ingin%20memesan%20Standing%20Flower%20Premium" class="order-btn">Pesan Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Product 5 -->
        <div class="catalog-card">
            <img src="{{ asset('images/standing-flower/standing5.png') }}" alt="Standing Flower Minimalis" class="catalog-image">
            <div class="catalog-info">
                <h3>Standing Flower Minimalis</h3>
                <div class="price-action">
                    <span class="catalog-price">Rp 1.600.000</span>
                    <a href="https://wa.me/6283811931178?text=Halo%20Riko%20Florist,%20saya%20ingin%20memesan%20Standing%20Flower%20Minimalis" class="order-btn">Pesan Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Product 6 -->
        <div class="catalog-card">
            <img src="{{ asset('images/standing-flower/standing6.png') }}" alt="Standing Flower Luxury" class="catalog-image">
            <div class="catalog-info">
                <h3>Standing Flower Luxury</h3>
                <div class="price-action">
                    <span class="catalog-price">Rp 2.500.000</span>
                    <a href="https://wa.me/6283811931178?text=Halo%20Riko%20Florist,%20saya%20ingin%20memesan%20Standing%20Flower%20Luxury" class="order-btn">Pesan Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer Section -->
<footer class="footer">
    <div class="footer-container">
        <!-- About Section -->
        <div class="footer-section">
            <h3 class="footer-heading">Tentang Riko Florist</h3>
            <p class="footer-text">
                Riko Florist menyediakan rangkaian bunga segar berkualitas tinggi untuk berbagai acara. 
                Berdiri sejak 2010, kami berkomitmen memberikan produk terbaik dengan pelayanan ramah.
            </p>
        </div>

        <!-- Contact Section -->
        <div class="footer-section">
            <h3 class="footer-heading">Hubungi Kami</h3>
            <ul class="footer-contact">
                <li><i class="fas fa-map-marker-alt"></i> Jl. Bunga Indah No. 123, Bogor</li>
                <li><i class="fas fa-phone"></i> (0251) 1234 5678</li>
                <li><i class="fab fa-whatsapp"></i> +62 812 3456 7890</li>
                <li><i class="fas fa-envelope"></i> info@rikoflorist.com</li>
            </ul>
        </div>

        <!-- Payment Methods -->
        <div class="footer-section">
            <h3 class="footer-heading">Pembayaran</h3>
            <div class="payment-methods">
                <img src="{{ asset('images/bca.png') }}" alt="BCA" class="payment-icon">
                <img src="{{ asset('images/gopay.png') }}" alt="Gopay" class="payment-icon">
                <img src="{{ asset('images/dana.png') }}" alt="DANA" class="payment-icon">
            </div>
            <p class="footer-text">Kami menerima pembayaran via transfer BCA dan e-wallet</p>
        </div>

        <!-- Business Hours -->
        <div class="footer-section">
            <h3 class="footer-heading">Jam Operasional</h3>
            <ul class="business-hours">
                <li>Senin-Jumat: 08.00 - 20.00 WIB</li>
                <li>Sabtu-Minggu: 09.00 - 18.00 WIB</li>
            </ul>
        </div>
    </div>

    <!-- Copyright -->
    <div class="copyright">
        <p>&copy; 2025 Riko Florist. All rights reserved.</p>
    </div>
</footer>

    <script>
        // Hero Slider
        document.addEventListener('DOMContentLoaded', function() {
            // Existing hero slider code
            const heroSlides = document.querySelectorAll('.hero-background .slide');
            let currentHeroSlide = 0;
            
            function showHeroSlide(n) {
                heroSlides.forEach(slide => slide.classList.remove('active'));
                currentHeroSlide = (n + heroSlides.length) % heroSlides.length;
                heroSlides[currentHeroSlide].classList.add('active');
            }
            
            setInterval(() => showHeroSlide(currentHeroSlide + 1), 5000);
            
            // Catalog hover effects
            const catalogItems = document.querySelectorAll('.catalog-item');
            catalogItems.forEach(item => {
                item.addEventListener('mouseenter', () => {
                    item.style.transform = 'translateY(-5px)';
                    item.style.boxShadow = '0 6px 16px rgba(0,0,0,0.15)';
                });
                item.addEventListener('mouseleave', () => {
                    item.style.transform = 'translateY(0)';
                    item.style.boxShadow = '0 4px 12px rgba(0,0,0,0.1)';
                });
            });
        });
    </script>
</body>
</html>