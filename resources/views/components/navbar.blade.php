<style>
   
    .navbar {
        position: fixed;
        top: 0;
        width: 100%;
        background: rgba(10, 10, 10, 0.85);
        backdrop-filter: blur(10px);
        z-index: 1000;
        padding: 15px 0;
    }

    .nav-container {
        max-width: 1200px;
        margin: auto;
        padding: 0 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .logo {
        font-size: 22px;
        font-weight: 700;
        color: #fff;
    }

    .logo span {
        color: #00d4ff;
    }

    .nav-menu {
        display: flex;
        gap: 30px;
        list-style: none;
    }

    .nav-menu a {
        text-decoration: none;
    }

</style>
<nav class="navbar">
    <div class="nav-container">
        <div class="logo">
            Reyvan<span></span>
        </div>
        <ul class="nav-menu">
            <li><a href="/">Beranda</a></li>
            <li><a href="/projects">Proyek</a></li>
            @if (session('login'))
                <li><a href="/logout"><b>Logout</b></a></li>
            @else
                <li><a href="/login"><b>Login</b></a></li>
            @endif
        </ul>
    </div>
</nav>
