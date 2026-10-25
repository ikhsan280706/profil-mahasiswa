@extends('layouts.app')

@section('title', 'Home - Profil Mahasiswa')

@section('content')

<h1>Selamat Datang!</h1>

<p>Ini adalah website profil mahasiswa yang dibuat menggunakan Laravel Blade.</p>

<hr>

<section id="tentang">
    <h2>Tentang Saya</h2>

    <p><strong>Nama:</strong> Nama Mahasiswa</p>
    <p><strong>NIM:</strong> 12345678</p>
    <p><strong>Program Studi:</strong> Teknik Informatika</p>
    <p><strong>Universitas:</strong> Nama Universitas</p>
</section>

<hr>

<section id="kontak">
    <h2>Kontak</h2>

    <p>Email: mahasiswa@example.com</p>
</section>

@endsection