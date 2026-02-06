
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Contato</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
:root {
  --primary-dark: #252420;
  --primary-black: #000000;
  --primary-light: #FFF3FF;
  --primary-accent: #FFD900;
}

* {
  box-sizing: border-box;
  font-family: Arial, sans-serif;
}

body {
  margin: 0;
  background: var(--primary-light);
  color: var(--primary-black);
}


/* ===== TÍTULOS ===== */
.section-title {
  font-size: 32px;
  margin-bottom: 10px;
  color: var(--primary-dark);
  text-align: center;
}

.section-subtitle {
  font-size: 16px;
  margin-bottom: 40px;
  opacity: 0.8;
  text-align: center;
}

/* ===== CONTATO ===== */
.contact-wrapper {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 40px;
  max-width: 900px;     
  margin: 0 auto;      
}

.contact-info {
  background: var(--primary-dark);
  color: #fff;
  padding: 40px;
  border-radius: 20px;
}

.contact-info h3 {
  margin-bottom: 20px;
}

.contact-info p {
  margin-bottom: 12px;
  font-size: 15px;
}

.contact-form {
  background: #fff;
  padding: 40px;
  border-radius: 20px;
  box-shadow: 0 15px 40px rgba(0,0,0,0.1);
}

.contact-form label {
  display: block;
  font-size: 14px;
  margin-bottom: 6px;
}

.contact-form input,
.contact-form textarea {
  width: 100%;
  padding: 12px;
  margin-bottom: 20px;
  border-radius: 10px;
  border: 1px solid #ddd;
  font-size: 14px;
}

.contact-form textarea {
  resize: none;
  height: 120px;
}

/* ===== CONTAINER CONTATO ===== */
.contact-container {
  padding: 80px 20px;
}

/* ===== MELHORIA VISUAL ===== */
.contact-info,
.contact-form {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.contact-info:hover,
.contact-form:hover {
  transform: translateY(-4px);
}

/* Inputs com foco */
.contact-form input:focus,
.contact-form textarea:focus {
  outline: none;
  border-color: var(--primary-dark);
  box-shadow: 0 0 0 2px rgba(158,16,54,0.2);
}

/* ===== FOOTER RESPONSIVO ===== */
@media (max-width: 900px) {
  .footer-container {
    grid-template-columns: 1fr;
    gap: 40px;
  }

  .footer-about,
  .footer-links,
  .footer-contact,
  .footer-local {
    text-align: center;
    align-items: center;
  }

  .footer-local iframe {
    width: 100%;
    height: 200px;
  }
}

/* ===== BOTÃO WHATSAPP FLUTUANTE ===== */
#whatsappBtn {
  position: fixed;
  bottom: 22px;
  right: 22px;
  width: 58px;
  height: 58px;
  border-radius: 50%;
  background: #25D366;
  border: none;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  z-index: 999;
  box-shadow: 0 15px 35px rgba(0,0,0,0.35);

  /* estado inicial */
  opacity: 0;
  pointer-events: none;
  transform: scale(0.8);
  transition: opacity 0.3s ease, transform 0.3s ease;
}

/* 🔥 estado ativo */
#whatsappBtn.show {
  opacity: 1;
  pointer-events: auto;
  transform: scale(1);
  animation: pulse 1.6s infinite;
}


.whatsappIcon {
  width: 28px;
  height: 28px;
  fill: white;
}


@keyframes pulse {
  0% {
    box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.6);
  }
  70% {
    box-shadow: 0 0 0 14px rgba(37, 211, 102, 0);
  }
  100% {
    box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
  }
}


.contact-form button {
  background: var(--primary-accent);
  color: var(--primary-black);
  border: none;
  padding: 14px;
  border-radius: 30px;
  cursor: pointer;
  font-weight: bold;
  font-size: 14px;
  transition: 0.3s;
  width: 100%;
}

.contact-form button:hover {
  background: var(--primary-dark);
  color: #fff;
}



/* ===== RESPONSIVO ===== */
@media (max-width: 900px) {
  .contact-wrapper {
    grid-template-columns: 1fr;
  }
}


/* ================= ROOT ================= */
:root {
    --red-main: #201f20;
    --red-dark: #d58b1f;
    --text-light: #ffffff;
    --search-bg: rgba(66, 66, 66, 0.2);
    --shadow: rgba(0,0,0,0.35);
}

/* ===== VARIÁVEIS ===== */
:root {
    --dark-main: #1c1b1c;
    --gold: #d58b1f;
    --white: #ffffff;
    --glass: rgba(0,0,0,0.65);
    --shadow: rgba(0,0,0,0.45);
}

/* ===== HEADER ===== */
.outback-header {
    position: fixed;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 100%;
    max-width: 1503px;
    z-index: 1000;
    background: var(--glass);
    backdrop-filter: blur(14px);
    box-shadow: 0 20px 40px var(--shadow);
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

/* ===== BUSCA ===== */
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
    color: #ffffff;
}

/* ===== MENU DESKTOP ===== */
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

/* ===== BOTÃO MOBILE ===== */
.menu-toggle {
    display: none;
    background: none;
    border: none;
    color: white;
    font-size: 30px;
    cursor: pointer;
    margin-left: auto;
}

/* ===== MOBILE ===== */
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
        left: 0;
        width: 100%;

        background: rgba(0,0,0,0.97);
        backdrop-filter: blur(12px);

        flex-direction: column;
        align-items: center;
        gap: 24px;

        padding: 30px 0;

        opacity: 0;
        pointer-events: none;
        transform: translateY(-10px);
        transition: all 0.35s ease;
    }

    .menu.show {
        opacity: 1;
        pointer-events: auto;
        transform: translateY(0);
    }

    /* header NÃO fixo no mobile */
    .outback-header {
        position: relative;
        left: 0;
        transform: none;
    }
}


</style>
</head>
<button id="whatsappBtn" aria-label="WhatsApp" onclick="abrirWhats()">
  <svg viewBox="0 0 32 32" class="whatsappIcon">
    <path d="M16 2.7c-7.4 0-13.3 6-13.3 13.3 0 2.3.6 4.6 1.7 6.6L2.7 29.3l6.8-1.8c1.9 1 4.1 1.5 6.5 1.5 7.4 0 13.3-6 13.3-13.3S23.4 2.7 16 2.7zm0 24c-2.1 0-4.2-.6-6-1.6l-.4-.3-4 1 1.1-3.9-.3-.4A11.2 11.2 0 1 1 16 26.7z"/>
    <path d="M19.1 17.2c-.3-.1-1.6-.8-1.9-.9-.3-.1-.4-.1-.6.1-.2.3-.7.9-.9 1.1-.1.2-.3.2-.6.1-.3-.1-1.2-.4-2.2-1.4-.8-.7-1.4-1.6-1.5-1.9-.2-.3 0-.4.1-.6l.4-.5c.1-.2.2-.3.3-.5.1-.2 0-.3 0-.5-.1-.1-.6-1.5-.8-2-.2-.5-.4-.5-.6-.5h-.5c-.2 0-.5.1-.7.4-.2.3-1 1-1 2.3s1 2.7 1.1 2.9c.1.2 2 3 4.7 4.2.7.3 1.2.5 1.6.6.7.2 1.3.2 1.7.1.5-.1 1.6-.7 1.9-1.3.2-.6.2-1.2.1-1.3-.1-.1-.2-.2-.5-.3z"/>
  </svg>
</button>

<body>

<header class="outback-header">
    <div class="header-inner">
      
        <div class="logo">
            <a href="index.php">
                <img src="images/logo.png" alt="Logo">
            </a>
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

<div class="contact-container">

  <section>
    <br>
    <h2 class="section-title">Entre em Contato</h2>
    <p class="section-subtitle">
      Preencha os campos e fale conosco diretamente pelo WhatsApp.
    </p>

    <div class="contact-wrapper">

      <div class="contact-info">
        <h3>Informações</h3>
        <p><strong>📍 Endereço:</strong> Monte Alto - SP</p>
        <p><strong>📞 WhatsApp:</strong> (16) 99705-5949</p>
        <p><strong>⏰ Atendimento:</strong> Seg a Sex - 07:00 às 17:00</p>
      </div>

      <!-- FORMULÁRIO WHATSAPP -->
      <form class="contact-form" onsubmit="enviarWhats(event)">
        <label>Nome</label>
        <input type="text" id="nome" placeholder="Seu nome" required>

        <label>Mensagem</label>
        <textarea id="mensagem" placeholder="Digite sua mensagem" required></textarea>

        <button type="submit">Enviar mensagem no WhatsApp</button>
      </form>

    </div>
  </section>

</div>

<?php include 'footer.php' ?>


<script>
function enviarWhats(e) {
  e.preventDefault();

  const nome = document.getElementById('nome').value;
  const mensagem = document.getElementById('mensagem').value;

  const numeroWhats = '5516997055949';

  const texto = encodeURIComponent(
    `Olá! Meu nome é ${nome}.\n\n${mensagem}`
  );

  window.open(`https://wa.me/${numeroWhats}?text=${texto}`, '_blank');

const whatsappBtn = document.getElementById('whatsappBtn');

setTimeout(() => {
  whatsappBtn.classList.add('show');
}, 2000);

}

const whatsappBtn = document.getElementById('whatsappBtn');

window.addEventListener('scroll', () => {
  if (window.scrollY > 200) {
    whatsappBtn.classList.add('show');
  }
});

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







