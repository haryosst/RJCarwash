<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('HomePage.homepage');
});

Route::get('/layanan/Premium-Wash', function () {
    return view('Layanan.Premium-Wash'); // Sesuaikan path
});

Route::get('/layanan/Interior-Detailing', function () {
    return view('Layanan.Interior-Detailing'); // Sesuaikan path
});

Route::get('/layanan/Exterior-Detailing', function () {
    return view('Layanan.Exterior-Detailing'); // Sesuaikan path
});

Route::get('/layanan/Glass-Detailing', function () {
    return view('Layanan.Glass-Detailing'); // Sesuaikan path
});

Route::get('/layanan/Engine-Detailing', function () {
    return view('Layanan.Engine-Detailing'); // Sesuaikan path
});

Route::get('/Pricelist/PriceList', function () {
    return view('Pricelist.PriceList'); // Sesuaikan path
});