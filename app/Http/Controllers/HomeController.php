<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'tagline' => 'A bouquet that whispers elegance and passion in every exquisite bloom'
        ]);
    }
}