@extends('layouts.app')

@section('title', 'Karangan Bunga Papan - Riko Florist')

@section('content')
<div class="product-page">
    <!-- Hero Section -->
    <section class="product-hero">
        <div class="hero-bg">
            <div class="container hero-container">
                <div class="hero-image">
                    <img src="{{ asset('images/buket-bunga/hero-image.png') }}" alt="Karangan Bunga Papan Pernikahan" class="hero-img">
                </div>
                <div class="hero-text">
                    <h1>Karangan Bunga Papan Pernikahan di Indonesia</h1>
                    <p class="hero-description">
                        Pesan karangan bunga pernikahan. Pengiriman cepat tepat waktu, bisa same day delivery.
                    </p>
                    
                    <div class="features-highlight">
                        <h2>Pilih Tujuan Pengiriman</h2>
                        <ul>
                            <li>Gratis ongkir wilayah Bogor</li>
                            <li>Pengiriman ke seluruh Indonesia</li>
                            <li>Garansi sampai segar</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section (Etalase) -->
    <section class="product-listings">
        <div class="container">
            <div class="section-header">
                <h2>Produk Bunga Papan</h2>
            </div>

            <div class="products-grid">
                <!-- Product 1 -->
                <div class="product-card">
                    <img src="{{ asset('images/bunga-papan/product1.jpg') }}" alt="Bunga Papan Wedding Lux" class="product-image">
                    <div class="product-info">
                        <h3 class="product-title">Bunga Papan Wedding Lux</h3>
                        <div class="seller-info">
                    
                        </div>
                        <div class="product-price">Rp 2.500.000</div>
                        <a href="https://wa.me/6283811931178?text=Saya%20tertarik%20dengan%20Bunga%20Papan%20Wedding%20Lux" class="order-btn">Pesan Sekarang</a>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="product-card">
                   
                    <img src="{{ asset('images/bunga-papan/product2.jpg') }}" alt="Bunga Papan Elegant" class="product-image">
                    <div class="product-info">
                        <h3 class="product-title">Bunga Papan Elegant</h3>
                        <div class="product-price">Rp 1.800.000</div>
                        <a href="https://wa.me/6283811931178?text=Saya%20tertarik%20dengan%20Bunga%20Papan%20Elegant" class="order-btn">Pesan Sekarang</a>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="product-card">
                    <img src="{{ asset('images/bunga-papan/product3.jpg') }}" alt="Bunga Papan Minimalis" class="product-image">
                    <div class="product-info">
                        <h3 class="product-title">Bunga Papan Minimalis</h3>
                        <div class="seller-info">
                        </div>
                        <div class="product-price">Rp 1.200.000</div>
                        <a href="https://wa.me/6283811931178?text=Saya%20tertarik%20dengan%20Bunga%20Papan%20Minimalis" class="order-btn">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('styles')
<style>
    /* Base Styles */
    .product-page {
        font-family: 'Poppins', sans-serif;
        color: #333;
        line-height: 1.6;
    }
    
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    /* Hero Section - Only these lines were modified */
    .product-hero {
        width: 100%;
    }
    
    .hero-bg {
        background-color: #f9f3e9;
        width: 100%;
    }

    .hero-container {
        display: flex;
        align-items: center;
        gap: 40px;
        padding: 40px 20px;
        background-color: transparent;
    }

    .hero-image {
        flex: 0 0 45%;
    }

    .hero-img {
        width: 100%;
        height: 350px;
        object-fit: cover;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .hero-text {
        flex: 1;
        text-align: left;
        padding: 0 20px;
    }

    .product-hero h1 {
        font-family: 'Playfair Display', serif;
        font-size: 2.2rem;
        color: #7a4a24;
        margin-bottom: 15px;
        line-height: 1.3;
    }

    .hero-description {
        font-size: 1rem;
        color: #555;
        margin-bottom: 25px;
        line-height: 1.6;
    }

    .features-highlight h2 {
        font-size: 1.3rem;
        color: #7a4a24;
        margin-bottom: 15px;
        font-weight: 600;
    }

    .features-highlight ul {
        list-style-type: none;
        padding-left: 0;
        margin-bottom: 20px;
    }

    .features-highlight li {
        position: relative;
        padding-left: 25px;
        margin-bottom: 8px;
        font-size: 0.95rem;
    }

    .features-highlight li:before {
        content: "•";
        color: #d4a373;
        font-size: 1.2rem;
        position: absolute;
        left: 0;
        top: -2px;
    }

    /* Products Section */
    .product-listings {
        padding: 60px 0;
        background: #f8f8f8;
    }
    
    .section-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }
    
    .section-header h2 {
        font-family: 'Playfair Display', serif;
        color: #7a4a24;
        font-size: 1.8rem;
    }
    
    .filter-select {
        padding: 10px 15px;
        border-radius: 4px;
        border: 1px solid #ddd;
        background: white;
        font-family: 'Poppins', sans-serif;
    }
    
    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 25px;
    }
    
    .product-card {
        background: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        position: relative;
    }
    
    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .badge-premium {
        position: absolute;
        top: 15px;
        left: 15px;
        background: #7a4a24;
        color: white;
        padding: 5px 10px;
        border-radius: 4px;
        font-size: 0.8rem;
        font-weight: 600;
        z-index: 1;
    }
    
    .product-image {
        width: 100%;
        height: 250px;
        object-fit: cover;
        display: block;
    }
    
    .product-info {
        padding: 20px;
    }
    
    .product-title {
        font-size: 1.1rem;
        margin-bottom: 10px;
        color: #333;
    }
    
    .seller-info {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 10px;
    }
    
    .seller-badge {
        background: #e9c46a;
        color: #333;
        padding: 3px 8px;
        border-radius: 4px;
        font-size: 0.7rem;
        font-weight: 600;
    }
    
    .product-price {
        font-weight: 700;
        color: #7a4a24;
        font-size: 1.2rem;
        margin: 15px 0;
    }
    
    .order-btn {
        display: block;
        text-align: center;
        background: #7a4a24;
        color: white;
        padding: 10px;
        border-radius: 4px;
        text-decoration: none;
        font-weight: 500;
        transition: background 0.3s ease;
    }
    
    .order-btn:hover {
        background: #5a3a1c;
    }
    
    /* Responsive Styles */
    @media (max-width: 768px) {
        .hero-container {
            flex-direction: column;
            padding: 30px 15px;
        }
        
        .hero-image {
            width: 100%;
            margin-bottom: 20px;
        }
        
        .hero-img {
            height: 250px;
        }
        
        .section-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
        }
    }
    
    @media (max-width: 480px) {
        .hero-img {
            height: 200px;
        }
        
        .product-hero h1 {
            font-size: 1.8rem;
        }
        
        .products-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
@endsection