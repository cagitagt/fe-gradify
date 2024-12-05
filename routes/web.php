<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/univ', function () {
    return view('univ', ['faculties' =>
    [
        "Fakultas Kedokteran", "Fakultas Kedokteran Gigi", "Fakultas Kesehatan Masyarakat", "Fakultas Ilmu Keperawatan", "Fakultas Farmasi", "Fakultas Matematika dan Ilmu Pengetahuan Alam", "Fakultas Teknik", "Fakultas Ilmu Komputer", "Fakultas Hukum", "Fakultas Ekonomi dan Bisnis", "Fakultas Ilmu Pengetahuan Budaya", "Fakultas Psikologi", "Fakultas Ilmu Sosial dan Ilmu Politik"
    ]
]);
});

Route::get('/study', function () {
    return view('study');
});

Route::get('/materials', function () {
    return view('materials');
});

Route::get('/regist', function () {
    return view('regist');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/membership', function () {
    return view('membership');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});