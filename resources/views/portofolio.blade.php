@extends('layout.main')

@section('title', 'Reyvan Fatahillah Al-Aqsho | Fullstack Programmer')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/portofolio.css') }}">
@endsection

@section('content')
    <div class="hero">
    <div class="hero-content">
        <img src="/assets/bebas.png" alt="Foto Reyvan" class="profile-img">
        <div class="badge">🚀 Fullstack Programmer</div>
        <h1>Membangun <span>Website Modern</span><br>Dengan Kode Berkualitas</h1>
        <p>
            Saya <strong>Reyvan Fatahillah Al-Aqsho</strong>, seorang Fullstack Programmer
            yang fokus pada performa, desain elegan, dan sistem yang scalable.
        </p>
        <a href="#contact" class="btn">Hubungi Saya</a>
    </div>
    </div>


    <section>
        <h2><span>Tentang</span> Saya</h2>
        <p>Profil singkat tentang saya dan apa yang saya kerjakan.</p>
        <div class="about-box">
            Saya berpengalaman dalam pengembangan aplikasi web end-to-end,
            mulai dari perancangan database, backend logic, hingga frontend UI modern.
            Terbiasa menggunakan PHP, JavaScript, dan MySQL untuk membangun sistem yang aman dan efisien.
        </div>
    </section>


    <section>
        <h2><span>Keahlian</span> Utama</h2>
        <p>Teknologi yang sering saya gunakan dalam pengembangan aplikasi.</p>
        <div class="skills-grid">
            @foreach ($skill as $skilli)
                <div class="skill">{{ $skilli }}</div>
            @endforeach
        </div>
    </section>


    <section class="section-center">
        <h2><span>Proyek</span> Saya</h2>
        <p>Lihat detail proyek yang pernah saya kerjakan.</p>

        <a href="/projects" class="btn">
            🚀 Lihat Semua Proyek
        </a>
    </section>



    <section id="contact">
        <h2><span>Kontak</span></h2>
        <p>Tertarik bekerja sama? Hubungi saya.</p>
        <div class="contact-box">
            <a class="btn" href="https://mail.google.com">Email</a>
            <a class="btn" href="https://github.com">GitHub</a>
            <a class="btn" href="https://id.likedin.com">LinkedIn</a>
        </div>
    </section>

    <footer>
        &copy; {{ date('Y') }} Reyvan Fatahillah Al-Aqsho. All Rights Reserved.
    </footer>
@endsection

