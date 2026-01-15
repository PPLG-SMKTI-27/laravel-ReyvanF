<?php
// projects.php
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Proyek | Reyvan Fatahillah Al-Aqsho</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            background: radial-gradient(circle at top, #111827, #020617);
            color: #e5e7eb;
            font-family: 'Poppins', sans-serif;
        }

        section {
            max-width: 1100px;
            margin: auto;
            padding: 100px 20px;
        }

        h1 span {
            background: linear-gradient(135deg, #6366f1, #22d3ee);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .project {
            background: #111827;
            border-radius: 24px;
            padding: 30px;
            border: 1px solid rgba(255,255,255,.05);
        }

        .project h3 {
            margin-bottom: 10px;
        }

        .project p {
            color: #9ca3af;
        }

        .back {
            display: inline-block;
            margin-top: 60px;
            color: #22d3ee;
            text-decoration: none;
        }
    </style>
</head>
<body>

<section>
    <h1><span>Proyek</span> Saya</h1>
    <p>Beberapa proyek yang pernah saya kerjakan sebagai Fullstack Programmer.</p>
    <ul>
        @foreach ($projek as $projeks)
            <li>{{ $projeks }} </li>
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

</body>
</html>
