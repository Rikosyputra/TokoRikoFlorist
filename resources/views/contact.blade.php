@extends('layouts.app')

@section('title', 'Contact Us - Riko Florist')

@section('content')
<div class="contact-page">
    <!-- Contact Header -->
    <section class="contact-header">
        <div class="container">
            <h1>Hubungi Kami</h1>
            <p>Hubungi kami melalui media sosial atau WhatsApp untuk pemesanan dan informasi</p>
        </div>
    </section>

    <!-- Social Media Contacts -->
    <section class="social-contacts">
        <div class="container">
            <div class="social-grid">
                <!-- WhatsApp -->
                <div class="social-card whatsapp">
                    <div class="social-icon">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <h3>WhatsApp</h3>
                    <p>+62 812 3456 7890</p>
                    <a href="https://wa.me/6281234567890" target="_blank" class="social-button">Chat Sekarang</a>
                </div>

                <!-- Instagram -->
                <div class="social-card instagram">
                    <div class="social-icon">
                        <i class="fab fa-instagram"></i>
                    </div>
                    <h3>Instagram</h3>
                    <p>@rikoflorist</p>
                    <a href="https://instagram.com/rikoflorist" target="_blank" class="social-button">Follow Kami</a>
                </div>

                <!-- Facebook -->
                <div class="social-card facebook">
                    <div class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                    <h3>Facebook</h3>
                    <p>Riko Florist Bogor</p>
                    <a href="https://facebook.com/rikoflorist" target="_blank" class="social-button">Kunjungi Halaman</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Business Hours -->
    <section class="business-hours">
        <div class="container">
            <h2>Jam Operasional</h2>
            <div class="hours-card">
                <p><strong>Senin-Jumat:</strong> 08.00 - 20.00 WIB</p>
                <p><strong>Sabtu-Minggu:</strong> 09.00 - 18.00 WIB</p>
                <p class="note">*Pesanan di luar jam operasional tetap kami proses di jam kerja berikutnya</p>
            </div>
        </div>
    </section>
</div>
@endsection

@section('styles')
<style>
    /* Contact Page Styles */
    .contact-page {
        font-family: 'Poppins', sans-serif;
        color: #333;
        line-height: 1.6;
    }

    /* Contact Header */
    .contact-header {
        background-color: #f9f3e9;
        padding: 60px 0;
        text-align: center;
    }

    .contact-header h1 {
        font-family: 'Playfair Display', serif;
        font-size: 2.5rem;
        color: #7a4a24;
        margin-bottom: 15px;
    }

    .contact-header p {
        font-size: 1.1rem;
        color: #555;
        max-width: 700px;
        margin: 0 auto;
    }

    /* Social Contacts */
    .social-contacts {
        padding: 60px 0;
    }

    .social-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-top: 30px;
    }

    .social-card {
        background: white;
        border-radius: 8px;
        padding: 30px;
        text-align: center;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
    }

    .social-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }

    .social-icon {
        font-size: 2.5rem;
        margin-bottom: 20px;
    }

    .social-card.whatsapp .social-icon {
        color: #25D366;
    }

    .social-card.instagram .social-icon {
        color: #E1306C;
    }

    .social-card.facebook .social-icon {
        color: #1877F2;
    }

    .social-card h3 {
        font-size: 1.3rem;
        margin-bottom: 10px;
        color: #7a4a24;
    }

    .social-card p {
        color: #555;
        margin-bottom: 20px;
        font-size: 1.1rem;
    }

    .social-button {
        display: inline-block;
        padding: 10px 20px;
        border-radius: 4px;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s;
    }

    .social-card.whatsapp .social-button {
        background: #25D366;
        color: white;
    }

    .social-card.instagram .social-button {
        background: #E1306C;
        color: white;
    }

    .social-card.facebook .social-button {
        background: #1877F2;
        color: white;
    }

    .social-button:hover {
        opacity: 0.9;
        transform: translateY(-2px);
    }

    /* Business Hours */
    .business-hours {
        padding: 0 0 60px;
        text-align: center;
    }

    .business-hours h2 {
        font-family: 'Playfair Display', serif;
        font-size: 1.8rem;
        color: #7a4a24;
        margin-bottom: 20px;
    }

    .hours-card {
        background: white;
        border-radius: 8px;
        padding: 25px;
        max-width: 500px;
        margin: 0 auto;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }

    .hours-card p {
        margin-bottom: 10px;
        font-size: 1.1rem;
    }

    .hours-card p.note {
        font-size: 0.9rem;
        color: #777;
        margin-top: 20px;
        font-style: italic;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .contact-header {
            padding: 40px 0;
        }

        .contact-header h1 {
            font-size: 2rem;
        }

        .social-contacts {
            padding: 40px 0;
        }

        .social-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
@endsection