<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js" defer></script>
    <title>Nicola Rossio</title>
</head>
<body>

<!-- Header -->
<header>

    <div class="menu-closed">
        <div class="menu-icon">
            <img class="img-menu" src="assets/images/formas/menu-branco.png" alt="menu icon" onclick="openMenu()">
            <p class="title-menu">MENU</p>
        </div>
        
        <div class="logo">
            <img src="assets/images/formas/logotipo-branco2.png" alt="Logotipo Nicola Rossio">
        </div>

        <div class="button-header">
            <a href="#" class="button-primary">FAZER RESERVA</a>
        </div>
    </div>

    <div class="menu-expanded">
        <div class="header-menu-open">
            <div class="menu-icon">
                <img class="img-menu" src="assets/images/formas/cruz.png" alt="Fechar menu" onclick="closeMenu()">
            </div>
            
            <div class="logo">
                <img src="assets/images/formas/logotipo-branco2.png" alt="Logotipo Nicola Rossio">
            </div>

            <div class="button-header">
                <a href="#" class="button-reverse">FAZER RESERVA</a>
            </div>
        </div>

        <nav class="menu-principal">
            <ul>
                <li>
                    <p>O HOTEL</p>
                    <ul class="submenu">
                        <li>CONHEÇA O HOTEL</li>
                        <li>PEQUENO-ALMOÇO</li>
                        <li>ROTAS DE LISBOA</li>
                    </ul>
                </li>
                <li>
                    <p>QUARTOS</p>
                    <ul class="submenu">
                        <li>STANDARD</li>
                        <li>SUPERIOR</li>
                    </ul>
                </li>
                <li><p>OFERTAS</p></li>
                <li><p>RESTAURANTES</p></li>
                <li><p>NOTÍCIAS</p></li>
                <li><p>CONTACTOS</p></li>
            </ul>
        </nav>

        <div class="search-lang-phone">
            <form action="" enctype="multipart/form-data">
                <input type="text" name="search" id="search" placeholder="PESQUISAR">
                <button class="search-button" type="submit"><img src="assets/images/formas/lupa-branco.png" alt="Botão pesqusiar"></button>
            </form>

            <div class="language">
                <p>SELECT LANGUAGE:</p>
                <ul>
                    <li class="active" id="EN"><a href="#" onclick="changeLanguage('EN')">EN</a></li>
                    <li id="PT"><a href="#" onclick="changeLanguage('PT')">PT</a></li>
                    <li id="ES"><a href="#" onclick="changeLanguage('ES')">ES</a></li>
                    <li id="FR"><a href="#" onclick="changeLanguage('FR')">FR</a></li>
                </ul>
            </div>

            <div class="button-header">
                <a href="#" class="button-reverse">+351 219 355 281</a>
            </div>

        </div>
    </div>
</header>
<!-- Header -->

<!-- Carousel -->
<section class="carousel-1">
    <div class="controls-carousel-1">
        <div class="control-left">
            <img src="assets/images/formas/seta-esquerda.png" alt="Seta esquerda">
        </div>
        <div class="control-right">
            <img src="assets/images/formas/seta-direita.png" alt="Seta direita">
        </div>
    </div>

    <div class="content-carousel-1">
        <div class="slide" id="1">
            <img src="assets/images/homepage/nicola-rossio-hotel-banner-1.jpg" alt="Hotel Nicola Rossio">
            <h3>NO CORAÇÃO DA BAIXA LISBOETA</h3>
            <h1>O REQUINTE DO ROSSIO</h1>
            <a href="#" class="button-primary">DESCOBRIR</a>
        </div>
    </div>
</section>
<!-- Carousel -->
    
</body>
</html>