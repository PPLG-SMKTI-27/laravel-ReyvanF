<?php
// index.php - Modern Luxury Portfolio
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Reyvan Fatahillah Al-Aqsho | Fullstack Programmer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary: #6366f1;
            --secondary: #22d3ee;
            --bg-dark: #0b1120;
            --bg-card: #111827;
            --text-main: #e5e7eb;
            --text-muted: #9ca3af;
            --gradient: linear-gradient(135deg, #6366f1, #22d3ee);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: radial-gradient(circle at top, #111827, #020617);
            color: var(--text-main);
        }

        a { text-decoration: none; }

        /* ===== HERO ===== */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 40px 20px;
        }

        .hero-content {
            max-width: 900px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .profile-img {
            width: 160px;
            height: 160px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 25px;
            border: 4px solid transparent;
            background: linear-gradient(#020617, #020617) padding-box,
                        var(--gradient) border-box;
            box-shadow: 0 20px 60px rgba(99,102,241,.4);
        }

        .badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 8px 18px;
            border-radius: 999px;
            background: rgba(99,102,241,0.15);
            color: var(--secondary);
            font-size: 0.85rem;
            margin-bottom: 20px;
        }

        .hero h1 {
            font-size: clamp(2.8rem, 6vw, 4rem);
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .hero h1 span {
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero p {
            color: var(--text-muted);
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto 40px;
        }

        .btn {
            display: inline-block;
            padding: 14px 34px;
            border-radius: 999px;
            background: var(--gradient);
            color: white;
            font-weight: 500;
            transition: transform .3s, box-shadow .3s;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(99,102,241,.35);
        }

        /* ===== SECTION ===== */
        section {
            max-width: 1100px;
            margin: auto;
            padding: 100px 20px;
        }

        section h2 {
            font-size: 2.2rem;
            margin-bottom: 16px;
        }

        section h2 span {
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        section > p {
            color: var(--text-muted);
            max-width: 700px;
            margin-bottom: 60px;
        }

        /* ===== ABOUT ===== */
        .about-box {
            background: linear-gradient(145deg, #111827, #020617);
            border: 1px solid rgba(255,255,255,.05);
            border-radius: 24px;
            padding: 40px;
            box-shadow: 0 30px 80px rgba(0,0,0,.5);
        }

        /* ===== SKILLS ===== */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 20px;
        }

        .skill {
            background: var(--bg-card);
            border-radius: 20px;
            padding: 25px;
            text-align: center;
            border: 1px solid rgba(255,255,255,.05);
            transition: transform .3s, box-shadow .3s;
        }

        .skill:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 50px rgba(0,0,0,.6);
        }

        /* ===== PROJECTS ===== */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .project {
            background: var(--bg-card);
            border-radius: 24px;
            padding: 30px;
            border: 1px solid rgba(255,255,255,.05);
            position: relative;
            overflow: hidden;
        }

        .project::before {
            content: "";
            position: absolute;
            inset: 0;
            background: var(--gradient);
            opacity: 0;
            transition: opacity .3s;
            z-index: 0;
        }

        .project:hover::before {
            opacity: .08;
        }

        .project h3 {
            position: relative;
            z-index: 1;
            margin-bottom: 10px;
        }

        .project p {
            position: relative;
            z-index: 1;
            color: var(--text-muted);
        }

        /* ===== CONTACT ===== */
        .contact-box {
            text-align: center;
        }

        .contact-box a {
            margin: 10px;
        }

        footer {
            text-align: center;
            padding: 40px 20px;
            color: var(--text-muted);
            border-top: 1px solid rgba(255,255,255,.05);
        }
        .section-center {
            text-align: center;
        }

        .section-center > p {
            margin-left: auto;
            margin-right: auto;
        }

    </style>
</head>
<body>

<!-- HERO -->
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

<!-- ABOUT -->
<section>
    <h2><span>Tentang</span> Saya</h2>
    <p>Profil singkat tentang saya dan apa yang saya kerjakan.</p>
    <div class="about-box">
        Saya berpengalaman dalam pengembangan aplikasi web end-to-end,
        mulai dari perancangan database, backend logic, hingga frontend UI modern.
        Terbiasa menggunakan PHP, JavaScript, dan MySQL untuk membangun sistem yang aman dan efisien.
    </div>
</section>

<!-- SKILLS -->
<section>
    <h2><span>Keahlian</span> Utama</h2>
    <p>Teknologi yang sering saya gunakan dalam pengembangan aplikasi.</p>
    <div class="skills-grid">
        @foreach ($skill as $skilli)
            <div class="skill">{{ $skilli }}</div>
        @endforeach
    </div>
</section>

<!-- PROJECTS -->
<!-- PROJECTS -->
<section class="section-center">
    <h2><span>Proyek</span> Saya</h2>
    <p>Lihat detail proyek yang pernah saya kerjakan.</p>

    <a href="/projects" class="btn">
        🚀 Lihat Semua Proyek
    </a>
</section>


<!-- CONTACT -->
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
    &copy; <?php echo date('Y'); ?> Reyvan Fatahillah Al-Aqsho. All Rights Reserved.
</footer>

</body>
</html>
