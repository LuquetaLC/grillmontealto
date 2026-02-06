<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Você sabe, é Grill</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<style>
:root {
    --dark-main: #1c1b1c;
    --gold: #d58b1f;
    --white: #ffffff;
    --glass: rgba(0,0,0,0.55);
    --shadow: rgba(0,0,0,0.45);
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}

body {
    background: #f4f4f4;
}

/* ================= HERO ================= */

/* ================= HEADER ================= */
.outback-header {
    position: fixed;
    left: 50%;
    transform: translateX(-50%);
    width: 100%;
    max-width: 1503px;
    z-index: 1000;
    background: rgba(0,0,0,0.65);
    backdrop-filter: blur(14px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.45);
}

.header-inner {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 12px 26px;
}

.logo img {
    height: 38px;
    filter: brightness(0) invert(1);
}

/* BUSCA */
.search-box {
    flex: 1;
    max-width: 420px;
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px 16px;
    border-radius: 999px;
    background: #ffffff11;
}

.search-box input {
    flex: 1;
    border: none;
    background: transparent;
    outline: none;
    color: white;
}

.search-box i {
    color: white;
}
.search-box input::placeholder {
    color: #fdfdfdff;
}

/* MENU DESKTOP */
.menu {
    display: flex;
    gap: 26px;
    margin-left: auto;
}

.menu a {
    color: white;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 1px;
    text-decoration: none;
    position: relative;
}

.menu a::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -6px;
    width: 0;
    height: 2px;
    background: var(--gold);
    transition: width 0.3s ease;
}

.menu a:hover::after {
    width: 100%;
}

/* BOTÃO MOBILE */
.menu-toggle {
    display: none;
    background: none;
    border: none;
    color: white;
    font-size: 30px;
    cursor: pointer;
    margin-left: auto;
}

/* MOBILE */
@media (max-width: 1024px) {

    .search-box {
        display: none;
    }

    .menu-toggle {
        display: block;
    }

    .menu {
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%) translateY(-10px);
        width: 100%;
        max-width: 420px;

        background: rgba(0,0,0,0.95);
        backdrop-filter: blur(12px);
        padding: 28px 0;

        flex-direction: column;
        align-items: center;
        gap: 22px;

        opacity: 0;
        pointer-events: none;
        transition: all 0.35s ease;
    }

    .menu.show {
        opacity: 1;
        transform: translateX(-50%) translateY(0);
        pointer-events: auto;
    }
}

@media (max-width: 768px) {


.outback-header {
   position: relative;
}

    .hero {
        height: 45vh;
        min-height: 420px;
    }

    .hero-content h1 {
        font-size: 32px;
    }

    .hero-content p {
        font-size: 14px;
    }

    .hero-btn {
        width: 100%;
        max-width: 260px;
        padding: 14px 0;
    }
}

@media (min-width: 769px) {
    .hero {
        background-image: url("imgs/banner.jpeg");
    }
}

@media (max-width: 768px) {
    .hero {
        display: none;
    }
}

/* Banner de fallback visível apenas em mobile */
.mobile-banner {
    display: none;
}

@media (max-width: 768px) {
    .mobile-banner {
        display: block;
        margin-top: 0;
    }

    .mobile-banner img {
        width: 100%;
        height: auto;
        display: block;
    }
}







</style>
</head>

<body>

<header class="outback-header">
    <div class="header-inner">
      
        <div class="logo">
            <a href="index.php"><img src="images/logo.png"></a>
        </div>
        

        <div class="search-box">
            <input type="text" placeholder="Pesquisar">
            <i class="bi bi-search"></i>
        </div>

        <button class="menu-toggle" id="menuToggle">
    <i class="bi bi-list"></i>
</button>

        <nav class="menu" id="menu">
            <a href="produtos.php">CATÁLOGO</a>
            <a href="index.php#about-section">SOBRE</a>
            <a href="contato.php">CONTATO</a>
            <a href="#footer">LOCALIZAÇÃO</a>
        </nav>
    </div>
</header>

<div class="mobile-banner">
    <img src="imgs/mobilebanner.jpeg" alt="Banner Mobile">
</div>


<script>
let index = 0;
const slides = document.getElementById("slides");
const totalSlides = 3;

function updateSlide() {
    slides.style.transform = `translateX(-${index * 100}%)`;
}

function nextSlide() {
    index = (index + 1) % totalSlides;
    updateSlide();
}

function prevSlide() {
    index = (index - 1 + totalSlides) % totalSlides;
    updateSlide();
}

setInterval(nextSlide, 6500);
const toggle = document.getElementById('menuToggle');
const menu = document.getElementById('menu');
const icon = toggle.querySelector('i');

toggle.addEventListener('click', () => {
    if (window.innerWidth <= 1024) {
        menu.classList.toggle('show');

        icon.className = menu.classList.contains('show')
            ? 'bi bi-x'
            : 'bi bi-list';
    }
});



</script>

</body>
</html>