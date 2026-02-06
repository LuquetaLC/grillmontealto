<!DOCTYPE html>
<html lang="pt-br">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<head>
    <meta charset="UTF-8">
    <title>CARD DINAMICO - altera o nome glrrr</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .section-title {
            text-align: center;
            margin: 60px 0 20px 0;
            font-size: 28px;
            color: #333;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        /* Subcategoria título centralizado */
        .subcategory-title {
            font-weight: 600;
            font-size: 14px;
            color: #555;
            margin: 40px 0 15px 0;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            text-align: center; /* centralizado */
        }

        /* Grid geral das cards */
        .products-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            max-width: 1100px;
            gap: 30px;
            margin: 20px auto 60px auto;
            justify-items: start; /* Cards alinhados à esquerda */
        }

        /* Manter largura fixa para cards */
        .product-card {
            width: 320px;
            background: #fff;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            font-family: Arial, sans-serif;
        }

        .image {
            position: relative;
            overflow: hidden;
        }

        .image img {
            width: 100%;
            border-radius: 15px;
        }

        .saber-mais {
            font-family: Arial, sans-serif;
            position: absolute;
            left: 50%;
            bottom: -60px;
            transform: translateX(-50%);
            transition: bottom 0.35s ease;
        }

        .product-card:hover .saber-mais {
            bottom: 20px;
        }

        .saber-mais button {
            background: #000;
            color: #fff;
            border: none;
            padding: 12px 26px;
            border-radius: 25px;
            cursor: pointer;
            font-size: 14px;
            font-family: Arial, sans-serif;
        }

        .colors {
            display: flex;
            gap: 8px;
            margin: 15px 0;
        }

        .colors span {
            width: 16px;
            height: 16px;
            border-radius: 50%;
            cursor: pointer;
            border: 2px solid transparent;
        }

        .colors span.active {
            border: 2px solid #000;
            transform: scale(1.15);
        }

        .title {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 8px;
            text-align: center; /* título dos cards centralizado */
        }

        /* Modal CSS */
        .modal {
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.6);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 999;
        }

        .modal.active {
            display: flex;
        }

        .modal-content {
            background: #fff;
            border-radius: 20px;
            max-width: 900px;
            width: 90%;
            padding: 30px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            position: relative;
        }

        .modal-content img {
            width: 100%;
            border-radius: 15px;
        }

        .modal-close {
            position: absolute;
            top: 15px;
            right: 20px;
            font-size: 22px;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        table th,
        table td {
            border-bottom: 1px solid #ddd;
            padding: 8px;
            font-size: 14px;
            text-align: left;
        }

        table th {
            font-weight: 600;
        }


 .product-card {
    opacity: 0;
    transform: translateY(30px) scale(0.97);
    transition: 
        opacity 0.6s ease,
        transform 0.6s ease,
        box-shadow 0.3s ease;
}

.product-card.show {
    opacity: 1;
    transform: translateY(0) scale(1);
}

.product-card:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}
/* ================= ROOT ================= */
:root {
    --red-main: #201f20;
    --red-dark: #d58b1f;
    --text-light: #ffffff;
    --search-bg: rgba(66, 66, 66, 0.2);
    --shadow: rgba(0,0,0,0.35);
}

/* ================= CATÁLOGO MOBILE ================= */
@media (max-width: 768px) {

    /* Containers */
    .products-container {
        grid-template-columns: 1fr;
        justify-items: center;
        gap: 22px;
        padding: 0 16px;
    }

    /* Cards */
    .product-card {
        width: 100%;
        max-width: 360px;
        padding: 16px;
        border-radius: 18px;
    }

    .image img {
        border-radius: 14px;
    }

    /* Botão sempre visível no mobile */
    .saber-mais {
        position: static;
        transform: none;
        margin-top: 12px;
        display: flex;
        justify-content: center;
    }

    .product-card:hover .saber-mais {
        bottom: auto;
    }

    .saber-mais button {
        width: 100%;
        max-width: 240px;
        padding: 12px 0;
        font-size: 14px;
    }

    /* Título */
    .title {
        font-size: 15px;
        line-height: 1.3;
        text-align: center;
    }

    /* Cores */
    .colors {
        justify-content: center;
    }

    /* Títulos das seções */
    .section-title {
        font-size: 22px;
        margin: 40px 0 10px;
    }

    .subcategory-title {
        font-size: 13px;
        margin: 26px 0 12px;
    }

    /* Modal */
    .modal-content {
        grid-template-columns: 1fr;
        padding: 20px;
        gap: 20px;
        max-height: 90vh;
        overflow-y: auto;
    }
}




    </style>
</head>

<body>

<?php include 'header.php' ?>
    <h2><br></h2>
    <br>
    <h2 class="section-title" id="churrasqueiras">Churrasqueiras</h2>

    <!-- Churrasqueiras Lis + Prediais juntos -->
    <h3 class="subcategory-title">Churrasqueiras Lisas + Prediais</h3>
    <div class="products-container">
        <!--Churraqueira Lisa TMN 3 4 5-->
        <div class="product-card" data-sizes='[{"tam":"3 Esp.","larg":"55cm","alt":"1,90m","prof":"55cm"},{"tam":"4 Esp.","larg":"65cm","alt":"1,90m","prof":"55cm"},{"tam":"5 Esp.","larg":"75cm","alt":"1,90m","prof":"55cm"}]'>
            <div class="image">
                <img class="productImage" src="imgs/churrasqueira lisa.webp">
                <div class="saber-mais"><button>Saber mais</button></div>
            </div>
            <div class="colors">
                <span data-color="Concreto Natural" data-img="imgs/churrasqueira lisa.webp" style="background:#D6D6D2"></span>
            </div>
            <h2 class="title" data-base="Churrasqueira Lisa Tamanhos 3 // 4 // 5">
                Churrasqueira Lisa Tamanhos 3 // 4 // 5 - Concreto Natural
            </h2>
        </div>

        <!--Churraqueira Lisa TMN 4-->
        <div class="product-card" data-sizes='[{"tam":"4 Esp.","larg":"65cm","alt":"1,90m","prof":"55cm"}]'>
            <div class="image">
                <img class="productImage" src="imgs/churrasqueira lisa.webp">
                <div class="saber-mais"><button>Saber mais</button></div>
            </div>
            <div class="colors">
                <span data-color="Concreto Natural" data-img="imgs/churrasqueira lisa.webp" style="background:#D6D6D2"></span>
            </div>
            <h2 class="title" data-base="Churrasqueira Lisa Tamanho 4">
                Churrasqueira Lisa Tamanho 4 - Concreto Natural
            </h2>
        </div>

        <!--Churraqueira Predial 4 5-->
        <div class="product-card" data-sizes='[{"tam":"4 Esp.","larg":"65cm","alt":"1,90m","prof":"55cm"},{"tam":"5 Esp.","larg":"75cm","alt":"1,90m","prof":"55cm"}]'>
            <div class="image">
                <img class="productImage" src="imgs/churrasquira predial.webp">
                <div class="saber-mais"><button>Saber mais</button></div>
            </div>
            <div class="colors">
                <span data-color="Concreto Natural" data-img="imgs/churrasquira predial.webp" style="background:#D6D6D2"></span>
            </div>
            <h2 class="title" data-base="Churrasqueira Predial Tamanhos 4 // 5">
                Churrasqueira Predial Tamanhos 4 // 5 - Concreto Natural
            </h2>
        </div>
    </div>

    <!-- Churrasqueiras Desenhadas (fica separada) -->
    <h3 class="subcategory-title">Churrasqueiras Desenhadas</h3>
    <div class="products-container">
        <!--Churraqueira Desenhada TMN 4 -->
        <div class="product-card" data-sizes='[{"tam":"4 Esp.","larg":"65cm","alt":"1,90m","prof":"55cm"}]'>
            <div class="image">
                <img class="productImage" src="imgs/churrasqueira tijolinho vermelha.webp">
                <div class="saber-mais"><button>Saber mais</button></div>
            </div>
            <div class="colors">
                <span data-color="Vermelho Cerâmica" data-img="imgs/churrasqueira tijolinho vermelha.webp" style="background:#7B2E25"></span>
                <span data-color="Tijolo Envelhecido" data-img="imgs/churrasqueira tijolinho envelhecida.webp" style="background:#B5A77A"></span>
                <span data-color="Marrom Café" data-img="imgs/churrasqueira tijolinho marrom.webp" style="background:#4B2E1E"></span>
                <span data-color="Bege Palha" data-img="imgs/churrasqueira tijolinho palha.webp" style="background:#E6C98C"></span>
            </div>
            <h2 class="title" data-base="Churrasqueira Desenhada Tamanho 4">
                Churrasqueira Desenhada Tamanho 4 - Vermelho Cerâmica
            </h2>
        </div>

        <!--Churraqueira com Mesa Desenhada TMN 4 -->
        <div class="product-card" data-sizes='[{"tam":"4 Esp.","larg":"65cm","alt":"1,90m","prof":"55cm"}]'>
            <div class="image">
                <img class="productImage" src="imgs/churrasquera desenhada com foeno e fogao palha.webp">
                <div class="saber-mais"><button>Saber mais</button></div>
            </div>
            <div class="colors">
                <span data-color="Bege Palha" data-img="300x400.png" style="background:#E6C98C"></span>
            </div>
            <h2 class="title" data-base="Churrasqueira com Mesa Desenhada Tamanho 4">
                Churrasqueira com Mesa Desenhada Tamanho 4 - Bege Palha
            </h2>
        </div>

        <!--Churraqueira Desenhada com Friso TMN 4 -->
        <div class="product-card" data-sizes='[{"tam":"4 Esp.","larg":"65cm","alt":"1,90m","prof":"55cm"}]'>
            <div class="image">
                <img class="productImage" src="imgs/churrasqueiramadeira.jpg">
                <div class="saber-mais"><button>Saber mais</button></div>
            </div>
            <div class="colors">
                <span data-color="Amadeirado Imbuia" data-img="300x400.png" style="background:#5A3A2E"></span>
            </div>
            <h2 class="title" data-base="Churrasqueira Desenhada com Friso Tamanho 4">
                Churrasqueira Desenhada com Friso Tamanho 4 - Amadeirado Imbuia
            </h2>
        </div>
    </div>

    <hr style="max-width: 1100px; margin: 40px auto; border: 0; border-top: 1px solid #ddd;">

    <h2 class="section-title" id="fornos">Fogões e Fornos</h2>


    <!-- Fogões Liso / Tradicional + Especiais juntos -->
    <h3 class="subcategory-title">Fogões Lisos / Tradicionais + Especiais</h3>
    <div class="products-container">
        <!-- Fogão Liso  TMN 4 5-->
        <div class="product-card" data-sizes='[{"tam":"4 Esp.","larg":"65cm","alt":"1,90m","prof":"55cm"},{"tam":"5 Esp.","larg":"75cm","alt":"1,90m","prof":"55cm"}]'>
            <div class="image">
                <img class="productImage" src="imgs/churrasquira fogão lisolisa.webp">
                <div class="saber-mais"><button>Saber mais</button></div>
            </div>
            <div class="colors">
                <span data-color="Concreto Natural" data-img="300x400.png" style="background:#D6D6D2"></span>
            </div>
            <h2 class="title" data-base="Fogão Liso Tamanhos 4 // 5">
                Fogão Liso Tamanhos 4 // 5 - Concreto Natural
            </h2>
        </div>

        <!--Fogão Napoli TAM 4-->
        <div class="product-card" data-sizes='[{"tam":"4 Esp.","larg":"65cm","alt":"1,90m","prof":"55cm"}]'>
            <div class="image">
                <img class="productImage" src="imgs/churrasquira napoli.webp">
                <div class="saber-mais"><button>Saber mais</button></div>
            </div>
            <div class="colors">
                <span data-color="Concreto Natural" data-img="300x400.png" style="background:#D6D6D2"></span>
            </div>
            <h2 class="title" data-base="Fogão Napoli Tamanho 4">
                Fogão Napoli Tamanho 4 - Concreto Natural
            </h2>
        </div>

        <!-- Fogão Iglu -->
        <div class="product-card" data-sizes='[{"Diam":"1m.","larg":"65cm"}]'>
            <div class="image">
                <img class="productImage" src="imgs/fogão iglu.webp">
                <div class="saber-mais"><button>Saber mais</button></div>
            </div>
            <div class="colors">
                <span data-color="Concreto Natural" data-img="imgs/fogão iglu.webp" style="background:#D6D6D2"></span>
            </div>
            <h2 class="title" data-base="Fogão Iglu">
                Fogão Iglu - Concreto Natural
            </h2>
        </div>
    </div>

        <!-- Fogões com Churrasqueira -->
    <h3 class="subcategory-title">Fogões com Churrasqueira</h3>
    <div class="products-container">
        <!--Fogão Desenhado com Churrasqueira TAM 4-->
        <div class="product-card" data-sizes='[{"tam":"4 Esp.","larg":"65cm","alt":"1,90m","prof":"55cm"}]'>
            <div class="image">
                <img class="productImage" src="imgs/churrasquera desenhada com foeno e fogao vermelha.webp">
                <div class="saber-mais"><button>Saber mais</button></div>
            </div>
            <div class="colors">
                <span data-color="Vermelho Cerâmica" data-img="imgs/churrasquera desenhada com foeno e fogao vermelha.webp" style="background:#7B2E25"></span>
                <span data-color="Tijolo Envelhecido" data-img="imgs/churrasquera desenhada com foeno e fogao envelhecida.webp" style="background:#B5A77A"></span>
                <span data-color="Marrom Café" data-img="imgs/churrasquera desenhada com foeno e fogao marrom.webp" style="background:#4B2E1E"></span>
                <span data-color="Bege Palha" data-img="imgs/churrasquera desenhada com foeno e fogao palha.webp" style="background:#E6C98C"></span>
            </div>
            <h2 class="title" data-base="Fogão Desenhado com Churrasqueira Tamanho 4">
                Fogão Desenhado com Churrasqueira Tamanho 4 - Vermelho Cerâmica
            </h2>
        </div>
    </div>

    <div class="modal" id="productModal">
        <div class="modal-content">
            <span class="modal-close">&times;</span>
            <img id="modalImage">
            <div>
                <h2 id="modalTitle"></h2>
                <p>Dimensões do produto:</p>
                <table></table>
            </div>
        </div>
    </div>

    <!--Parte do Java script, funcionalidade do Saber Mais, não altera , by: aug-->

        
    <script>
        // Troca de cores e imagens
        document.querySelectorAll('.product-card').forEach(card => {
            const colors = card.querySelectorAll('.colors span');
            const title = card.querySelector('.title');
            const image = card.querySelector('.productImage');
            const baseTitle = title.dataset.base;

            colors.forEach(color => {
                color.addEventListener('click', () => {
                    colors.forEach(c => c.classList.remove('active'));
                    color.classList.add('active');
                    title.textContent = baseTitle + " - " + color.dataset.color;
                    image.src = color.dataset.img;
                });
            });
        });

        // Animação de entrada ao aparecer na tela
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
            observer.unobserve(entry.target);
        }
    });
}, {
    threshold: 0.2
});

document.querySelectorAll('.product-card').forEach(card => {
    observer.observe(card);
});

        // Modal dinâmico (Saber mais)

        const modal = document.getElementById('productModal');
        const modalTitle = document.getElementById('modalTitle');
        const modalImage = document.getElementById('modalImage');

        document.querySelectorAll('.saber-mais button').forEach(btn => {
            btn.addEventListener('click', e => {
                const card = e.target.closest('.product-card');

                modalTitle.textContent = card.querySelector('.title').textContent;
                modalImage.src = card.querySelector('.productImage').src;

                const table = modal.querySelector('table');
                const sizes = JSON.parse(card.dataset.sizes);

                table.innerHTML = '';

                const headers = Object.keys(sizes[0]);
                let headerRow = '<tr>';
                headers.forEach(h => {
                    headerRow += `<th>${h}</th>`;
                });
                headerRow += '</tr>';
                table.innerHTML = headerRow;

                sizes.forEach(s => {
                    let row = '<tr>';
                    headers.forEach(h => {
                        row += `<td>${s[h]}</td>`;
                    });
                    row += '</tr>';
                    table.innerHTML += row;
                });

                modal.classList.add('active');
            });
        });


        // Fechar modal

        document.querySelector('.modal-close').onclick = () => {
            modal.classList.remove('active');
        };

        modal.onclick = e => {
            if (e.target === modal) modal.classList.remove('active');
        };
    </script>

<?php include 'footer.php' ?>
</body>
</html>