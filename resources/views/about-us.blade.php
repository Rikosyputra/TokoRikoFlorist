@extends('layouts.app')

@section('title', 'About Us - Riko Florist')

@section('content')
<div class="about-page">
    <!-- Hero Section -->
    <section class="about-hero">
        <div class="container">
            <h1>Tentang Riko Florist</h1>
            <p>Menghadirkan keindahan bunga dengan sentuhan profesional sejak 2010</p>
        </div>
    </section>

    <!-- About Content -->
    <section class="about-content">
        <div class="container">
            <div class="about-grid">
                <div class="about-image">
                    <img src="{{ asset('images/about-shop.jpg') }}" alt="Toko Riko Florist">
                </div>
                <div class="about-text">
                    <h2>Cerita Kami</h2>
                    <p>Riko Florist didirikan pada tahun 2010 dengan misi menghadirkan rangkaian bunga berkualitas tinggi untuk berbagai acara khusus. Dari awal yang sederhana di Bogor, kami telah berkembang menjadi salah satu florist terpercaya di wilayah ini.</p>
                    <p>Dengan pengalaman lebih dari 10 tahun, kami bangga telah melayani ribuan pelanggan dengan berbagai kebutuhan bunga, mulai dari pernikahan, ulang tahun, hingga acara duka cita.</p>
                    <p><strong>Riko Wijaya</strong><br>Founder Riko Florist</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values-section">
        <div class="container">
            <h2>Nilai-Nilai Kami</h2>
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">🌿</div>
                    <h3>Kualitas Terbaik</h3>
                    <p>Kami hanya menggunakan bunga segar pilihan dengan kualitas terbaik untuk setiap pesanan</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">💖</div>
                    <h3>Kreativitas</h3>
                    <p>Desain unik dan kreatif yang disesuaikan dengan kebutuhan dan kepribadian pelanggan</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">⏱️</div>
                    <h3>Tepat Waktu</h3>
                    <p>Pengiriman tepat waktu dengan jaminan bunga tetap segar sampai tujuan</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <h2>Tim Kami</h2>
            <div class="team-grid">
                <div class="team-member">
                    <img src="{{ asset('images/team1.jpg') }}" alt="Riko Wijaya">
                    <h3>Riko Wijaya</h3>
                    <p>Founder & Head Florist</p>
                </div>
                <div class="team-member">
                    <img src="{{ asset('images/team2.jpg') }}" alt="Dewi Lestari">
                    <h3>Dewi Lestari</h3>
                    <p>Floral Designer</p>
                </div>
                <div class="team-member">
                    <img src="{{ asset('images/team3.jpg') }}" alt="Budi Santoso">
                    <h3>Budi Santoso</h3>
                    <p>Customer Service</p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('styles')
<style>
    /* About Page Styles */
    .about-page {
        font-family: 'Poppins', sans-serif;
        color: #333;
        line-height: 1.6;
    }

    /* Hero Section */
    .about-hero {
        background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset("images/about-bg.jpg") }}');
        background-size: cover;
        background-position: center;
        padding: 100px 0;
        text-align: center;
        color: white;
    }

    .about-hero h1 {
        font-family: 'Playfair Display', serif;
        font-size: 3rem;
        margin-bottom: 15px;
    }

    .about-hero p {
        font-size: 1.2rem;
        max-width: 700px;
        margin: 0 auto;
    }

    /* About Content */
    .about-content {
        padding: 60px 0;
    }

    .about-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 50px;
        align-items: center;
    }

    .about-image img {
        width: 100%;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .about-text h2 {
        font-family: 'Playfair Display', serif;
        font-size: 2rem;
        color: #7a4a24;
        margin-bottom: 20px;
    }

    .about-text p {
        margin-bottom: 15px;
        color: #555;
    }

    .about-text p strong {
        color: #7a4a24;
    }

    /* Values Section */
    .values-section {
        background-color: #f9f3e9;
        padding: 60px 0;
        text-align: center;
    }

    .values-section h2 {
        font-family: 'Playfair Display', serif;
        font-size: 2rem;
        color: #7a4a24;
        margin-bottom: 40px;
    }

    .values-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }

    .value-card {
        background: white;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }

    .value-icon {
        font-size: 2.5rem;
        margin-bottom: 15px;
    }

    .value-card h3 {
        font-size: 1.3rem;
        color: #7a4a24;
        margin-bottom: 15px;
    }

    .value-card p {
        color: #555;
    }

    /* Team Section */
    .team-section {
        padding: 60px 0;
        text-align: center;
    }

    .team-section h2 {
        font-family: 'Playfair Display', serif;
        font-size: 2rem;
        color: #7a4a24;
        margin-bottom: 40px;
    }

    .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
    }

    .team-member img {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 50%;
        margin-bottom: 15px;
        border: 3px solid #7a4a24;
    }

    .team-member h3 {
        font-size: 1.2rem;
        margin-bottom: 5px;
    }

    .team-member p {
        color: #777;
        font-size: 0.9rem;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .about-hero {
            padding: 70px 0;
        }

        .about-hero h1 {
            font-size: 2.2rem;
        }

        .about-grid {
            grid-template-columns: 1fr;
        }

        .about-image {
            order: 2;
        }
    }

    @media (max-width: 480px) {
        .about-hero h1 {
            font-size: 1.8rem;
        }

        .about-hero p {
            font-size: 1rem;
        }

        .values-grid,
        .team-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
@endsection