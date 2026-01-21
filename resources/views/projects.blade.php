@extends('layout.main')

@section('title', 'Proyek | Reyvan Fatahillah Al-Aqsho')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/projects.css') }}">
@endsection

@section('content')
    <section>
        <h1><span>Proyek</span> Saya</h1>
        <p>Beberapa proyek yang pernah saya kerjakan sebagai Fullstack Programmer.</p>
        <ul>
            @foreach ($projek as $projeks)
                <li>{{ $projeks }}</li>
            @endforeach
        </ul>
        <div class="projects-grid">
            <div class="project">
                <h3>Website Toko Kue</h3>
                <p>
                    Aplikasi PHP MVC dengan login multi-role, manajemen produk,
                    restock, dan database MySQL.
                </p>
            </div>
            <div class="project">
                <h3>Art Market Platform</h3>
                <p>
                    Marketplace karya seni dengan sistem transaksi,
                    landing page modern, dan UI eksklusif.
                </p>
            </div>
        </div>
        <a href="/" class="back">← Kembali ke Beranda</a>
    </section>

@endsection