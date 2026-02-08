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
            @forelse ($projek as $p)
                <li>{{ $p['title'] }}</li>
            @empty
                <li><em>Belum ada project</em></li>
            @endforelse
        </ul>

        <div class="projects-grid">
            @forelse ($projek as $p)
                <div class="project">
                    <h3>{{ $p['title'] }}</h3>
                    <p>{{ $p['description'] }}</p>
                </div>
            @empty
                <p><strong>Belum ada project</strong></p>
            @endforelse
        </div>

        <a href="/" class="back">← Kembali ke Beranda</a>
    </section>
@endsection