@extends('app')

@section('content')
<h1>Selamat Datang!</h1>

<div class="home-intro">
    <p>Halo, saya <strong>Rayen Andika Ashari</strong>.  
    Ini adalah halaman utama aplikasi sederhana untuk mengelola data Buku dan Mahasiswa.  
    Silakan gunakan menu di atas untuk mulai menjelajahi fitur-fitur yang tersedia.</p>
</div>

<div class="home-actions">
    <a href="/buku"><button>Lihat Daftar Buku</button></a>
    <a href="/mahasiswa"><button>Lihat Daftar Mahasiswa</button></a>
</div>
@endsection
