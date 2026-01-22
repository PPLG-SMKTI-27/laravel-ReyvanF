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
            @foreach ($projek as $p)
                <li>{{ $p['project'] }}</li>
            @endforeach
        </ul>
        <div class="projects-grid">
            @foreach ($projek as $p)
                <div class="project">
                    <h3>{{ $p['project'] }}</h3>
                    <p>{{ $p['desc'] }}</p>
                </div> 
            @endforeach 
        </div>
        <a href="/" class="back">← Kembali ke Beranda</a>
    </section>
@endsection