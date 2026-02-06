<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


    <style>
        :root {
            --primary-dark: #d58e1f;
            --primary-black: #000000;
            --primary-light: #FFF3FF;
            --primary-accent: #FFD900;
            --cinza-um: #201f20;
            
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--primary-black);
            background-color: var(--primary-light);
            line-height: 1.6;
        }

        /* ===== CARROSSEL BANNER ===== */
        .banner-carousel {
            width: 100%;
            height: 55%;
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, var(--primary-black) 0%, var(--primary-dark) 100%);
        }

        .carousel-container {
            display: flex;
            height: 100%;
            transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .carousel-slide {
            min-width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

   .carousel-slide::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
        linear-gradient(
            to bottom,
            rgba(0,0,0,0.55),
            rgba(0,0,0,0.75)
        );
    z-index: 1;
}
        .carousel-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

    .carousel-content {
    position: absolute;
    z-index: 2;
    color: white;
    text-align: center;
    max-width: 800px;
    padding: 0 20px;
    opacity: 0;
    transform: translateY(40px);
    transition: all 0.8s ease;
}

.carousel-slide.active .carousel-content {
    opacity: 1;
    transform: translateY(0);
}


        @keyframes slideInContent {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .carousel-content h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .carousel-content p {
            font-size: 1.3rem;
            margin-bottom: 30px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7);
        }

        .carousel-button {
            padding: 12px 40px;
            background-color: var(--primary-dark);
            color: white;
            border: none;
            border-radius: 50px;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(158, 16, 54, 0.4);
        }

        .carousel-button:hover {
            background-color: var(--primary-accent);
            color: var(--primary-black);
            transform: translateY(-2px);
        }

        .carousel-controls {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 3;
            display: flex;
            gap: 10px;
        }

        .carousel-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .carousel-dot.active {
            background-color: var(--primary-dark);
            transform: scale(1.3);
        }

        .carousel-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(255, 255, 255, 0.3);
            color: white;
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 1.5rem;
            transition: all 0.3s ease;
            z-index: 3;
        }

        .carousel-arrow:hover {
            background-color: rgba(158, 16, 54, 0.8);
        }

        .carousel-arrow.prev {
            left: 30px;
        }

        .carousel-arrow.next {
            right: 30px;
        }

        /* ===== SEÇÃO CATEGORIAS COM SCROLL ===== */
        .categories-section {
            padding: 80px 40px;
            background-color: white;
            animation: fadeInUp 1s ease-out;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            color: var(--primary-black);
            margin-bottom: 60px;
            position: relative;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background-color: var(--primary-dark);
            margin: 15px auto 0;
            border-radius: 2px;
        }

        .categories-scroll-wrapper {
            position: relative;
            overflow: hidden;
        }

        .categories-container {
            display: flex;
            overflow-x: auto;
            scroll-behavior: smooth;
            gap: 20px;
            padding: 20px 0;
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
        }

        .categories-container::-webkit-scrollbar {
            height: 8px;
        }

        .categories-container::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        .categories-container::-webkit-scrollbar-thumb {
            background: var(--primary-dark);
            border-radius: 10px;
        }

        .category-card {
            min-width: 338px;
            background: linear-gradient(135deg, var(--primary-light), white);
            border-radius: 20px;
            padding: 30px 20px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            scroll-snap-align: center;
            border: 2px solid transparent;
        }

        .category-card:hover {
            transform: translateY(-10px);
            border-color: var(--primary-dark);
            box-shadow: 0 10px 30px rgba(158, 16, 54, 0.2);
        }

        .category-icon {
            font-size: 3rem;
            margin-bottom: 15px;
            transition: all 0.3s ease;
        }

        .category-card:hover .category-icon {
            transform: scale(1.2) rotate(10deg);
        }

        .category-name {
            font-size: 1.1rem;
            color: var(--primary-black);
            font-weight: 600;
        }

        .categories-indicators {
            display: none;
        }

        .indicator-dot {
            display: none;
        }

        .indicator-dot.active {
            display: none;
        }

        /* ===== SEÇÃO SOBRE NÓS ===== */
        .about-section {
            padding: 80px 40px;
            background: linear-gradient(135deg, var(--primary-light) 0%, white 100%);
            min-height: 600px;
            display: flex;
            align-items: center;
            animation: fadeInUp 1s ease-out;
            animation-delay: 0.2s;
            animation-fill-mode: both;
        }

        .about-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            width: 100%;
        }

        .about-image {
    border-radius: 15px;
    overflow: hidden;
    height: 650px;
}

.about-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}



        .grid-item {
            background: linear-gradient(45deg, var(--primary-black), var(--primary-dark));
            border-radius: 4px;
            animation: gridPulse 3s ease-in-out infinite;
        }

        .grid-item:nth-child(odd) {
            animation-delay: 0.1s;
            background: linear-gradient(45deg, var(--primary-dark), var(--primary-accent));
        }

        @keyframes gridPulse {
            0%, 100% {
                opacity: 0.6;
                transform: scale(1);
            }
            50% {
                opacity: 1;
                transform: scale(1.05);
            }
        }

        .about-content h2 {
            font-size: 2.3rem;
            color: var(--primary-black);
            margin-bottom: 20px;
            position: relative;
        }

        .about-content h2::before {
            content: '';
            position: absolute;
            left: 0;
            top: -10px;
            width: 60px;
            height: 4px;
            background-color: var(--primary-dark);
            border-radius: 2px;
        }

        .about-content p {
            color: #555;
            font-size: 1rem;
            line-height: 1.8;
            margin-bottom: 20px;
            text-align: justify;
        }

        .about-features {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 30px;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 10px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .feature-item:hover {
            background-color: rgba(158, 16, 54, 0.1);
            padding-left: 20px;
        }

        .feature-icon {
            color: var(--primary-dark);
            font-size: 1.5rem;
        }

        /* ===== SEÇÃO PRODUTOS DESTAQUE ===== */
        .featured-section {
            display: none;
        }

        .featured-grid {
            display: none;
        }

        .product-card {
            display: none;
        }

        .product-image {
            display: none;
        }

        .product-info {
            display: none;
        }

        .product-name {
            display: none;
        }

        .product-description {
            display: none;
        }

        .product-price {
            display: none;
        }

        /* ===== SEÇÃO AVALIAÇÕES ===== */
        .reviews-section {
            padding: 80px 40px;
            background: linear-gradient(100deg, var(--primary-black) 10%, var(--primary-dark) 100%);
            color: white;
            animation: fadeInUp 1s ease-out;
        }

        .reviews-section .section-title {
            color: white;
        }

        .reviews-container {
            max-width: 100%;
            margin: 0 auto;
            display: flex;
            overflow-x: auto;
            scroll-behavior: smooth;
            gap: 20px;
            padding: 20px 40px;
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
        }

        .reviews-container::-webkit-scrollbar {
            height: 8px;
        }

        .reviews-container::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
        }

        .reviews-container::-webkit-scrollbar-thumb {
            background: var(--primary-dark);
            border-radius: 10px;
        }

        .review-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 30px;
            border-radius: 15px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            animation: reviewSlideIn 0.6s ease-out;
            min-width: 300px;
            max-width: 340px;
            height: 340px;
            scroll-snap-align: center;
            flex-shrink: 0;
            display: flex;
            flex-direction: column;
        }

        .review-card:hover {
            background: rgba(255, 255, 255, 0.15);
            border-color: var(--primary-dark);
            transform: translateY(-10px);
        }

        @keyframes reviewSlideIn {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .review-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
        }

        .review-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-dark), var(--primary-accent));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 600;
        }

        .review-author {
            display: flex;
            flex-direction: column;
        }

        .review-name {
            font-weight: 600;
            font-size: 1.1rem;
        }

        .review-date {
            font-size: 0.85rem;
            color: #aaa;
        }

        .review-stars {
            color: var(--primary-accent);
            margin-bottom: 12px;
            font-size: 1.1rem;
            letter-spacing: 2px;
        }

        .review-text {
            color: #ddd;
            line-height: 1.7;
            font-size: 0.95rem;
            flex: 1;
            overflow-y: auto;
        }

        /* ===== ANIMAÇÕES GENÉRICAS ===== */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .section-animated {
            opacity: 0;
            animation: fadeInUp 0.8s ease-out forwards;
        }

        /* ===== RESPONSIVO ===== */
        @media (max-width: 768px) {
            .carousel-content h1 {
                font-size: 2rem;
            }

            .carousel-content p {
                font-size: 1rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .about-container {
                grid-template-columns: 1fr;
            }

            .about-content h2 {
                font-size: 1.8rem;
            }

            .reviews-container {
                padding: 20px;
            }

            .carousel-arrow {
                width: 40px;
                height: 40px;
                font-size: 1.2rem;
            }

            .carousel-arrow.prev {
                left: 10px;
            }

            .carousel-arrow.next {
                right: 10px;
            }
        }

        @media (max-width: 480px) {
            .categories-section,
            .about-section,
            .reviews-section {
                padding: 40px 20px;
            }

            .carousel-content h1 {
                font-size: 1.5rem;
            }

            .section-title {
                font-size: 1.5rem;
            }

            .category-card {
                min-width: 150px;
                padding: 20px 15px;
            }
        }

      
#whatsappBtn {
  position: fixed;
  right: 40px;   /* 👉 lado direito */
  bottom: 40px;
  width: 60px;
  height: 60px;
  background-color: #25d366;
  border: none;
  border-radius: 50%;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 4px 10px rgba(0,0,0,0.25);
  opacity: 0;
  pointer-events: none;
  transform: scale(0.9);
  transition: opacity 0.3s ease, transform 0.3s ease;
  z-index: 1000;
}


/* quando aparecer */
#whatsappBtn.show {
  opacity: 1;
  pointer-events: auto;
  transform: scale(1);
  animation: pulse 1.6s infinite;
}

/* ícone */
.whatsappIcon {
  width: 50px;
  height: 38px;
  color: white;
}

@keyframes pulse {
  0% {
    box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
  }
  70% {
    box-shadow: 0 0 0 15px rgba(37, 211, 102, 0);
  }
  100% {
    box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
  }
}

@media (max-width: 768px) {
  #whatsappBtn {
    right: 20px;
    bottom: 20px;
  }
}

.hero {
    position: relative;
    height: 92vh;
    overflow: hidden;
}

.slides {
    display: flex;
    height: 100%;
    transition: transform 1.2s ease-in-out;
}

.slide {
    min-width: 100%;
    background-size: cover;
    background-position: center;
}

.slide:nth-child(1) { background-image: url("imgs/banner.jpeg"); }
.slide:nth-child(2) { background-image: url("https://images.unsplash.com/photo-1600891964599-f61ba0e24092"); }
.slide:nth-child(3) { background-image: url("https://images.unsplash.com/photo-1544025162-d76694265947"); }

/* Overlay mais bonito */
.hero::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(
        to bottom,
        rgba(0,0,0,0.65),
        rgba(0,0,0,0.35),
        rgba(0,0,0,0.7)
    );
    z-index: 2;
}

/* Conteúdo */
.hero-content {
    position: absolute;
    inset: 0;
    z-index: 4;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: white;
    text-align: center;
    padding: 20px;
    animation: fadeUp 1.2s ease forwards;
}

.hero-content h1 {
    font-size: clamp(36px, 5vw, 56px);
    font-weight: 900;
    letter-spacing: 1px;
    text-transform: uppercase;
}


.hero-content p {
    margin: 20px 0 36px;
    font-size: 18px;
    max-width: 640px;
    opacity: 0.9;
}

/* Botão */
.hero-btn {
    background: linear-gradient(135deg, #FFD900, #FFD900);
    color: white;
    text-decoration: none;
    padding: 16px 48px;
    border-radius: 999px;
    font-size: 14px;
    font-weight: 800;
    letter-spacing: 1px;
    box-shadow: 0 12px 30px rgba(0,0,0,0.45);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.hero-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.6);
}

/* ================= SETAS ================= */
.arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 5;
    width: 46px;
    height: 46px;
    border-radius: 50%;
    background: rgba(0,0,0,0.55);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: background 0.3s;
}

.arrow:hover {
    background: var(--gold);
}

.arrow.left { left: 20px; }
.arrow.right { right: 20px; }




    </style>
</head>
<body>
    <?php include 'header.php' ?>
    
</head>
<body>

    <!-- ===== SEÇÃO CATEGORIAS ===== -->

    <section class="hero">
    <div class="slides" id="slides">
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
    </div>

    <div class="hero-content">
        <h1>VOCÊ SABE, É GRILL</h1>
        <p>Churrasqueiras premium feitas para quem leva o fogo a sério</p>
        <a href="produtos.php" class="hero-btn">VER CATÁLOGO</a>
    </div>

    <div class="arrow left" onclick="prevSlide()"><i class="bi bi-chevron-left"></i></div>
    <div class="arrow right" onclick="nextSlide()"><i class="bi bi-chevron-right"></i></div>
</section>

    <section class="categories-section section-animated">
        <h2 class="section-title">Encontre o Que Você Precisa</h2>
        <div class="categories-scroll-wrapper">
            <div class="categories-container" id="categoriesContainer">
                <div class="category-card" data-category="churrasqueiras">
             <div class="category-icon"> <i class="fa-solid fa-fire"></i></div>
           <div class="category-name">Churrasqueiras</div>
        </div>
     <div class="category-card" data-category="fornos">
    <div class="category-icon"><i class="fa-solid fa-temperature-high"></i></div>
    <div class="category-name">Fornos</div>
     </div>
                <div class="category-card">
                    <div class="category-icon"><i class="fa-solid fa-bars"></i>
</div>
                    <div class="category-name">Grelhas</div>
                </div>
                <div class="category-card">
                    <div class="category-icon"><i class="fa-solid fa-utensils"></i>
</div>
                    <div class="category-name">Utensílios</div>
                </div>
            </div>
        </div>

    </section>

    <!-- ===== SEÇÃO SOBRE NÓS ===== -->
    <section id="about-section" class="about-section">
        <div class="about-container">
            <div class="about-image">
                <div class="about-image-grid">
                  <img src="imgs/sobre.jpeg" alt="">
                </div>
            </div>
            <div class="about-content">
                <h2>Sobre Nós</h2>
                <p>
                    Fundada em 2011 pelo proprietário Ricardo José Amado, a empresa nasceu da necessidade de oferecer churrasqueiras pré-moldadas que atendessem aos mais diversos perfis de clientes.
No início, o portfólio era enxuto, mas ao longo dos anos foi sendo ampliado de forma constante, acompanhando as demandas do mercado e as expectativas dos consumidores, até chegar ao catálogo atual.
                <p>
                    Desde sempre, sua filosofia de trabalho é baseada no uso consciente de recursos, priorizando a reciclagem e reduzindo ao máximo os impactos ao meio ambiente. Em constante evolução, a empresa segue inovando, aprendendo e se aperfeiçoando para entregar, a cada dia, produtos de alta qualidade e total satisfação aos seus clientes.
                <div class="about-features">
                    <div class="feature-item">
                        <span class="feature-icon">✓</span>
                        <span>Mais de 15 anos no mercado</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✓</span>
                        <span>Produtos de Alta Qualidade</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✓</span>
                        <span>Garantia Estendida</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

<button id="whatsappBtn" aria-label="WhatsApp">
  <svg viewBox="0 0 32 32" class="whatsappIcon">
    <path fill="currentColor" d="M19.11 17.205c-.277-.138-1.64-.81-1.894-.902-.252-.092-.436-.138-.62.138-.184.277-.713.902-.874 1.086-.16.184-.32.207-.597.07-.277-.138-1.17-.43-2.23-1.37-.824-.735-1.38-1.64-1.54-1.916-.16-.277-.017-.426.12-.563.124-.123.277-.32.415-.482.138-.16.184-.277.277-.46.092-.184.046-.345-.023-.483-.07-.138-.62-1.496-.85-2.05-.224-.538-.452-.465-.62-.474h-.528c-.184 0-.483.07-.735.345-.252.277-.965.942-.965 2.296 0 1.355.99 2.666 1.128 2.85.138.184 1.95 2.98 4.73 4.18.66.284 1.175.453 1.576.58.662.21 1.264.18 1.74.11.53-.08 1.64-.67 1.87-1.315.23-.646.23-1.2.16-1.315-.07-.115-.252-.184-.528-.322z"/>
    <path fill="currentColor" d="M16 2.667c-7.364 0-13.333 5.97-13.333 13.333 0 2.352.616 4.66 1.784 6.7L2.667 29.333l6.84-1.784A13.266 13.266 0 0 0 16 29.333c7.364 0 13.333-5.97 13.333-13.333S23.364 2.667 16 2.667zm0 24c-2.186 0-4.31-.584-6.146-1.688l-.44-.26-4.056 1.058 1.082-3.95-.286-.456A11.266 11.266 0 1 1 16 26.667z"/>
  </svg>
</button>


    <!-- ===== SEÇÃO AVALIAÇÕES ===== -->
    <section class="reviews-section section-animated">
        <h2 class="section-title">O Que Nossos Clientes Dizem</h2>

        <div class="reviews-container">
            <div class="review-card">
                <div class="review-header">
                    <div class="review-avatar">J</div>
                    <div class="review-author">
                        <div class="review-name">João Silva</div>
                        <div class="review-date">Há 2 meses</div>
                    </div>
                </div>
                <div class="review-stars">★★★★★</div>
                <div class="review-text">
                    Excelente qualidade! A churrasqueira chegou bem embalada e funciona perfeitamente. Já realizei vários churrascoscom perfeição. Muito satisfeito com a compra!
                </div>
            </div>

            <div class="review-card">
                <div class="review-header">
                    <div class="review-avatar">M</div>
                    <div class="review-author">
                        <div class="review-name">Maria Santos</div>
                        <div class="review-date">Há 1 mês</div>
                    </div>
                </div>
                <div class="review-stars">★★★★★</div>
                <div class="review-text">
                    Atendimento impecável! O vendedor tirou todas as minhas dúvidas e me ajudou a escolher o forno perfeito. O produto superou minhas expectativas. Recomendo!
                </div>
            </div>

            <div class="review-card">
                <div class="review-header">
                    <div class="review-avatar">C</div>
                    <div class="review-author">
                        <div class="review-name">Carlos Oliveira</div>
                        <div class="review-date">Há 3 semanas</div>
                    </div>
                </div>
                <div class="review-stars">★★★★★</div>
                <div class="review-text">
                    Melhor investimento que fiz! A qualidade do inox é notável, fácil de limpar e mantém a temperatura perfeitamente. Voltaria a comprar com certeza!
                </div>
            </div>

            <div class="review-card">
                <div class="review-header">
                    <div class="review-avatar">A</div>
                    <div class="review-author">
                        <div class="review-name">Ana Costa</div>
                        <div class="review-date">Há 1 semana</div>
                    </div>
                </div>
                <div class="review-stars">★★★★★</div>
                <div class="review-text">
                    Entrega rápida e bem embalada. Montar foi fácil com as instruções fornecidas. Estou impressionada com o acabamento e durabilidade. Muito bom mesmo!
                </div>
            </div>

            <div class="review-card">
                <div class="review-header">
                    <div class="review-avatar">P</div>
                    <div class="review-author">
                        <div class="review-name">Pedro Mendes</div>
                        <div class="review-date">Há 5 dias</div>
                    </div>
                </div>
                <div class="review-stars">★★★★★</div>
                <div class="review-text">
                    Adorei! Excelente custo-benefício. Os acessórios incluídos são de boa qualidade. Já fiz 3 churrascoscom minha família e amigos. Todos aprovaram!
                </div>
            </div>

            <div class="review-card">
                <div class="review-header">
                    <div class="review-avatar">L</div>
                    <div class="review-author">
                        <div class="review-name">Lucas Ferreira</div>
                        <div class="review-date">Há 2 dias</div>
                    </div>
                </div>
                <div class="review-stars">★★★★★</div>
                <div class="review-text">
                    Perfeito! Produto de qualidade premium com preço justo. O suporte ao cliente é ótimo. Recomendo para qualquer pessoa que quer uma churrasqueira de verdade!
                </div>
            </div>
        </div>
    </section>

    <script>
        // ===== CARROSSEL BANNER =====
let currentSlide = 0;
const slides = document.querySelectorAll('.carousel-slide');
const container = document.getElementById('carouselContainer');
const dots = document.querySelectorAll('.carousel-dot');
let autoplay;

function setActiveSlide(index) {
    slides.forEach(slide => slide.classList.remove('active'));
    dots.forEach(dot => dot.classList.remove('active'));

    slides[index].classList.add('active');
    dots[index].classList.add('active');

    container.style.transform = `translateX(-${index * 100}%)`;
    currentSlide = index;
}

document.querySelectorAll('.carousel-button').forEach(btn => {
    btn.addEventListener('click', () => {
        const target = btn.dataset.target;
        window.location.href = `produtos.php#${target}`;
    });
});


function nextSlide() {
    const next = (currentSlide + 1) % slides.length;
    setActiveSlide(next);
}

function prevSlide() {
    const prev = (currentSlide - 1 + slides.length) % slides.length;
    setActiveSlide(prev);
}

function startAutoplay() {
    autoplay = setInterval(nextSlide, 6000);
}

function stopAutoplay() {
    clearInterval(autoplay);
}

document.getElementById('nextBtn').onclick = () => {
    stopAutoplay();
    nextSlide();
    startAutoplay();
};

document.getElementById('prevBtn').onclick = () => {
    stopAutoplay();
    prevSlide();
    startAutoplay();
};

dots.forEach((dot, i) => {
    dot.onclick = () => {
        stopAutoplay();
        setActiveSlide(i);
        startAutoplay();
    };
});

setActiveSlide(0);
startAutoplay();


        // ===== CATEGORIAS SCROLL =====
        const categoriesContainer = document.getElementById('categoriesContainer');
        const categoryIndicators = document.getElementById('categoryIndicators');
        const categoryCards = document.querySelectorAll('.category-card');

        // Criar indicadores
        function createCategoryIndicators() {
            const cardWidth = categoryCards[0].offsetWidth + 20;
            const totalCards = categoryCards.length;
            const visibleCards = Math.floor(categoriesContainer.offsetWidth / cardWidth);
            const totalPages = Math.ceil(totalCards / visibleCards);

            categoryIndicators.innerHTML = '';
            for (let i = 0; i < totalPages; i++) {
                const dot = document.createElement('span');
                dot.className = 'indicator-dot' + (i === 0 ? ' active' : '');
                dot.onclick = () => scrollToPage(i);
                categoryIndicators.appendChild(dot);
            }
        }

        
        function scrollToPage(page) {
            const cardWidth = categoryCards[0].offsetWidth + 20;
            const visibleCards = Math.floor(categoriesContainer.offsetWidth / cardWidth);
            const scrollLeft = page * visibleCards * cardWidth;
            categoriesContainer.scrollTo({ left: scrollLeft, behavior: 'smooth' });
        }

        categoriesContainer.addEventListener('scroll', () => {
            const cardWidth = categoryCards[0].offsetWidth + 20;
            const visibleCards = Math.floor(categoriesContainer.offsetWidth / cardWidth);
            const currentPage = Math.round(categoriesContainer.scrollLeft / (visibleCards * cardWidth));
            
            document.querySelectorAll('.indicator-dot').forEach((dot, index) => {
                dot.classList.toggle('active', index === currentPage);
            });
        });

        createCategoryIndicators();
        window.addEventListener('resize', createCategoryIndicators);

        // ===== ANIMAÇÃO DE SEÇÕES =====
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const sectionObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationDelay = '0s';
                    entry.target.classList.add('section-animated');
                    sectionObserver.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.section-animated').forEach(section => {
            sectionObserver.observe(section);
        });

        // Animar cards ao scroll
        const cardObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    entry.target.style.animationDelay = (index * 0.1) + 's';
                    entry.target.classList.add('section-animated');
                    cardObserver.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.review-card').forEach(card => {
            cardObserver.observe(card);
        });
    </script>

    <script>
const whatsappBtn = document.getElementById('whatsappBtn');
const showAfter = 300; 

window.addEventListener('scroll', () => {
  if (window.scrollY > showAfter) {
    whatsappBtn.classList.add('show');
  } else {
    whatsappBtn.classList.remove('show');
  }
});

document.querySelectorAll('.category-card').forEach(card => {
    card.addEventListener('click', () => {
        const category = card.dataset.category;
        window.location.href = `produtos.php#${category}`;
    });
});


</script>

<?php include 'footer.php' ?>
</body>
</html>