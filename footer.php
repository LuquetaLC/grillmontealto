
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUDE AQUI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<style>
/* RESET DE SEGURANÇA */
/* RESET DE SEGURANÇA */
html, body {
  max-width: 100%;
  overflow-x: hidden;
}

* {
  box-sizing: border-box;
}

/* FOOTER */
.footer {
  background: #fff;
  border-top: 1px solid #e5e5e5;
  font-family: Arial, sans-serif;
  color: #444;
}

.footer-container {
  max-width: 1200px;
  margin: auto;
  padding: 50px 20px;
  display: grid;
  grid-template-columns: 1.2fr 1fr 1.2fr 1fr;
  gap: 40px;
}

/* ABOUT */
.footer-about {
  display: flex;
  flex-direction: column;
}

.footer-logo {
  max-width: 120px;
  margin-bottom: 15px;
}

.footer-about p {
  font-size: 14px;
  line-height: 1.6;
}

/* SOCIAL */
.social {
  margin-top: 15px;
}

.social a {
  margin-right: 12px;
  font-size: 18px;
  color: #000;
  text-decoration: none;
}

/* TITULOS */
.footer h4 {
  font-size: 14px;
  font-weight: bold;
  margin-bottom: 15px;
}

/* LINKS */
.footer-links ul {
  list-style: none;
  padding: 0;
}

.footer-links li {
  margin-bottom: 8px;
}

.footer-links a {
  text-decoration: none;
  color: #444;
  font-size: 14px;
}

/* CONTATO */
.footer-contact p {
  font-size: 14px;
  margin-bottom: 14px;
  line-height: 1.5;
}

.footer-contact i {
  margin-right: 6px;
}

/* MAPA */
.footer-local iframe {
  width: 100%;
  max-width: 260px;
  height: 150px;
  border-radius: 6px;
}

/* FOOTER BOTTOM */
.footer-bottom {
  border-top: 1px solid #e5e5e5;
  text-align: center;
  padding: 20px;
  font-size: 12px;
  color: #777;
  background: #fff;
}

/* ========================= */
/* RESPONSIVO */
/* ========================= */

/* TABLET */
@media (max-width: 1024px) {
  .footer-container {
    grid-template-columns: 1fr 1fr;
    gap: 35px;
  }
}

/* MOBILE */
@media (max-width: 600px) {
  .footer-container {
    grid-template-columns: 1fr;
    gap: 30px;
    padding: 40px 16px;
  }

  .footer-about,
  .footer-links,
  .footer-contact,
  .footer-local {
    text-align: center;
    align-items: center;
  }

  .footer-logo {
    margin: 0 auto 15px;
  }

  .footer-links ul {
    padding: 0;
  }

  .footer-contact p {
    max-width: 300px;
    margin-left: auto;
    margin-right: auto;
  }

  .social {
    margin-top: 15px;
  }

  .footer-local iframe {
    max-width: 100%;
    height: 180px;
  }

  .footer-bottom {
    font-size: 11px;
    padding: 16px;
  }
}


</style>

<body>

<footer class="footer" id="footer">
  <div class="footer-container">

    <!-- SOBRE -->
    <div class="footer-about">
      <img src="images/Logofooter.png" alt="Grill Monte Alto LOGO" class="footer-logo">
      <br>
      <p>
        Fundada em 2015, a Grill Monte Alto nasceu com o objetivo
        de se tornar a casa de quem ama fazer um churrasco.
      </p>

      <div class="social">
        <a href="https://www.facebook.com/churrasqueiramontealto/?locale=pt_BR" target="_blank">
          <i class="fab fa-facebook-f"></i>
        </a>

      </div>
    </div>

    <!-- INSTITUCIONAL -->
    <div class="footer-links">
      <h4>INSTITUCIONAL</h4>
      <ul>
        <li><a href="#">Sobre a Grill Monte Alto</a></li>
        <li><a href="#">Tire Suas Dúvidas</a></li>
        <li><a href="footer.html">Fale Conosco</a></li>
      </ul>
    </div>

    <!-- ATENDIMENTO -->
    <div class="footer-contact">
      <h4>ATENDIMENTO</h4>

      <p><i class="fab fa-whatsapp"></i>
    <strong>Fale no WhatsApp</strong><br>
    Atendimento Grill Monte Alto SP<br>
    (16) 99705-5949
      </p>

      <p><i class="fa-solid fa-envelope"></i>
    <strong>Envie um e-mail</strong><br>
    ricardochurrasqueira@hotmail.com
      </p>

      <p>
            <i class="fa-solid fa-clock"></i>
    <strong>HORÁRIO DE ATENDIMENTO</strong><br>
    Segunda à Sexta das 7:00h às 17h
      </p>
    </div>

    <!-- Localização loja -->
    <div class="footer-local">
      <h4>Nossa Localização</h4>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3718.4067035038715!2d-48.4834914!3d-21.255362899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b945bfffffff8b%3A0xaac23eb2c7fce0b0!2sGrill%20Monte%20Alto!5e0!3m2!1spt-BR!2sbr!4v1769700168668!5m2!1spt-BR!2sbr" width="250" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>  

  </div>
</footer>

<div class="footer-bottom">
  <p>
    GRILL - Churrasqueiras Pré-Moldadas © 2026 - TODOS OS DIREITOS RESERVADOS - CNPJ 00.123.456/0001-23 - Monte Alto/SP - Brasil 
    
    <br>
    Desenvolvido pelos alunos do curso de ADS & multimidia do SENAI de Monte Alto 2026.
  </p>
</div>

</body>
</html>

