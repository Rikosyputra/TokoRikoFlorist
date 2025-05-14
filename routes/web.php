<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('home');
});

// Route untuk produk
Route::prefix('produk')->group(function () {
    Route::get('/bunga-papan', function () {
        return view('produk.bunga-papan');
    });
    
    Route::get('/buket-bunga', function () {
        return view('produk.buket-bunga');
    });
    
    Route::get('/bunga-meja', function () {
        return view('produk.bunga-meja');
    });
    
    Route::get('/standing-flower', function () {
        return view('produk.standing-flower');
    });
    
    Route::get('/bunga-krans', function () {
        return view('produk.bunga-krans');
    });
    
    Route::get('/bunga-salib', function () {
        return view('produk.bunga-salib');
    });
    
    Route::get('/parcel-buah', function () {
        return view('produk.parcel-buah');
    });
});

// Route untuk halaman lainnya
Route::get('/custom-order', function () {
    return view('custom-order');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contact', function () {
    return view('contact');
});