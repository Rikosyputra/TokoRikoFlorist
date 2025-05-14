@extends('layouts.app')

@section('title', 'Custom Order - Riko Florist')

@section('content')
<section class="custom-order-section">
    <div class="container">
        <div class="order-header">
            <h1>Pesan Bunga Custom</h1>
            <p>Desain bunga sesuai keinginan Anda, langsung konsultasi via WhatsApp</p>
        </div>
        
        <div class="order-steps">
            <div class="step">
                <div class="step-number">1</div>
                <p>Isi form pesanan</p>
            </div>
            <div class="step">
                <div class="step-number">2</div>
                <p>Otomatis terhubung ke WhatsApp</p>
            </div>
            <div class="step">
                <div class="step-number">3</div>
                <p>Diskusikan desain dengan florist kami</p>
            </div>
        </div>

        <div class="order-form-container">
            <form id="customOrderForm">
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Nama Anda</label>
                        <input type="text" id="name" placeholder="Contoh: Budi Santoso" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Nomor WhatsApp</label>
                        <input type="tel" id="phone" placeholder="Contoh: 081234567890" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="occasion">Untuk Acara Apa?</label>
                    <select id="occasion" required>
                        <option value="">Pilih jenis acara</option>
                        <option value="Pernikahan">Pernikahan</option>
                        <option value="Ulang Tahun">Ulang Tahun</option>
                        <option value="Wisuda">Wisuda</option>
                        <option value="Anniversary">Anniversary</option>
                        <option value="Tunangan">Tunangan</option>
                        <option value="Ucapan Selamat">Ucapan Selamat</option>
                        <option value="Duka Cita">Duka Cita</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="product">Produk</label>
                    <select id="product" required>
                        <option value="">Pilih jenis produk</option>
                        <option value="Buket Bunga">Buket Bunga</option>
                        <option value="Bunga Krans">Bunga Krans</option>
                        <option value="Bunga Meja">Bunga Meja</option>
                        <option value="Bunga Papan">Bunga Papan</option>
                        <option value="Bunga Salib">Bunga Salib</option>
                        <option value="Parcel Buah">Parcel Buah</option>
                        <option value="Standing Flower">Standing Flower</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="budget">Budget Anda (Rp)</label>
                    <select id="budget" required>
                        <option value="">Pilih range budget</option>
                        <option value="500.000-1.000.000">Rp 500.000 - 1.000.000</option>
                        <option value="1.000.000-2.000.000">Rp 1.000.000 - 2.000.000</option>
                        <option value="2.000.000-3.000.000">Rp 2.000.000 - 3.000.000</option>
                        <option value="3.000.000-5.000.000">Rp 3.000.000 - 5.000.000</option>
                        <option value="5.000.000+">Rp 5.000.000+</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="delivery-date">Tanggal Pengiriman (Jika Diketahui)</label>
                    <input type="date" id="delivery-date">
                </div>

                <div class="form-group">
                    <label for="description">Deskripsi Detail Pesanan</label>
                    <textarea id="description" rows="4" placeholder="Contoh: Saya ingin buket bunga mawar merah dengan pita emas, diameter sekitar 30cm, plus kartu ucapan dengan tulisan 'Selamat Ulang Tahun'" required></textarea>
                </div>

                <button type="submit" class="whatsapp-btn">
                    <i class="fab fa-whatsapp"></i> Kirim via WhatsApp
                </button>
            </form>
            
            <div class="whatsapp-note">
                <p>Anda akan langsung terhubung dengan tim florist kami di WhatsApp untuk diskusi lebih lanjut</p>
            </div>
        </div>
    </div>
</section>

<!-- Floating WhatsApp Button -->
<div class="floating-whatsapp">
    <a href="https://wa.me/6283811931178?text=Saya%20ingin%20konsultasi%20custom%20order%20bunga" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>
</div>
@endsection

@section('styles')
<style>
    /* Custom Order Section */
    .custom-order-section {
        padding: 60px 0;
        background-color: #f9f9f9;
    }
    
    .order-header {
        text-align: center;
        margin-bottom: 40px;
    }
    
    .order-header h1 {
        font-family: 'Playfair Display', serif;
        color: #7a4a24;
        font-size: 2.5rem;
        margin-bottom: 15px;
    }
    
    .order-header p {
        color: #555;
        font-size: 1.1rem;
        max-width: 700px;
        margin: 0 auto;
    }
    
    /* Order Steps */
    .order-steps {
        display: flex;
        justify-content: space-between;
        margin: 40px auto;
        max-width: 800px;
    }
    
    .step {
        text-align: center;
        flex: 1;
        position: relative;
    }
    
    .step:not(:last-child):after {
        content: "";
        position: absolute;
        top: 20px;
        left: 60%;
        width: 80%;
        height: 2px;
        background: #d4a373;
    }
    
    .step-number {
        width: 40px;
        height: 40px;
        background: #7a4a24;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 10px;
        font-weight: bold;
    }
    
    /* Order Form */
    .order-form-container {
        max-width: 700px;
        margin: 0 auto;
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    
    .form-row {
        display: flex;
        gap: 20px;
        margin-bottom: 20px;
    }
    
    .form-group {
        margin-bottom: 20px;
    }
    
    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 500;
        color: #555;
    }
    
    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid #ddd;
        border-radius: 6px;
        font-family: 'Poppins', sans-serif;
        font-size: 1rem;
    }
    
    .form-group textarea {
        resize: vertical;
        min-height: 120px;
    }
    
    /* WhatsApp Button */
    .whatsapp-btn {
        background: #25D366;
        color: white;
        border: none;
        padding: 15px 25px;
        border-radius: 6px;
        font-size: 1.1rem;
        font-weight: 500;
        cursor: pointer;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        transition: all 0.3s;
        margin-top: 20px;
    }
    
    .whatsapp-btn:hover {
        background: #128C7E;
        transform: translateY(-2px);
    }
    
    .whatsapp-note {
        text-align: center;
        margin-top: 20px;
        color: #555;
        font-size: 0.9rem;
    }
    
    /* Floating WhatsApp */
    .floating-whatsapp {
        position: fixed;
        bottom: 30px;
        right: 30px;
        z-index: 100;
    }
    
    .floating-whatsapp a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 60px;
        height: 60px;
        background: #25D366;
        color: white;
        border-radius: 50%;
        font-size: 1.8rem;
        box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        transition: all 0.3s;
    }
    
    .floating-whatsapp a:hover {
        background: #128C7E;
        transform: scale(1.1);
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .order-steps {
            flex-direction: column;
            gap: 30px;
        }
        
        .step:not(:last-child):after {
            display: none;
        }
        
        .form-row {
            flex-direction: column;
            gap: 0;
        }
        
        .order-header h1 {
            font-size: 2rem;
        }
    }
</style>
@endsection

@section('scripts')
<script>
    document.getElementById('customOrderForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const name = document.getElementById('name').value;
        const phone = document.getElementById('phone').value;
        const occasion = document.getElementById('occasion').value;
        const product = document.getElementById('product').value;
        const budget = document.getElementById('budget').value;
        const deliveryDate = document.getElementById('delivery-date').value;
        const description = document.getElementById('description').value;
        
        // Format phone number (remove +62 or 0 if any)
        const formattedPhone = phone.replace(/^\+62|^0/, '');
        
        // Format date if exists
        const formattedDate = deliveryDate ? new Date(deliveryDate).toLocaleDateString('id-ID') : 'Belum ditentukan';
        
        // Create WhatsApp message
        const message = `Halo Riko Florist, saya ${name} ingin custom order bunga dengan detail berikut:%0A%0A*Untuk Acara:* ${occasion}%0A*Produk:* ${product}%0A*Budget:* ${budget}%0A*Tanggal Pengiriman:* ${formattedDate}%0A%0A*Deskripsi Pesanan:*%0A${description}%0A%0ASaya ingin konsultasi lebih lanjut.`;
        
        // Open WhatsApp
        window.open(`https://wa.me/6283811931178?text=${message}`, '_blank');
    });
</script>
@endsection