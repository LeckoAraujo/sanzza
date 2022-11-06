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
            <div class="text-carousel-1">
                <p>NO CORAÇÃO DA BAIXA LISBOETA</p>
                <h1>O REQUINTE <br> NO ROSSIO</h1>
                <a href="#" class="button-primary">DESCOBRIR</a>
            </div>
            <div class="img-carousel-1-background">
                <img src="assets/images/homepage/nicola-rossio-hotel-banner-1-hover.jpg" alt="Hotel Nicola Rossio">
                <img class="img-filter"src="assets/images/homepage/nicola-rossio-hotel-banner-1.jpg" alt="Hotel Nicola Rossio">
            </div>
        </div>
    </div>
</section>
<!-- Carousel -->

<!-- Bem Vindo -->
<section class="bem-vindo">
    <div class="grid-img-1">&nbsp;</div>
    <div class="grid-text">
        <div class="text-grid">
            <h1 class="title-1">BEM-VINDO</h1>
            <h2 class="title-2">AO NICOLA ROSSIO HOTEL</h2>
            <p class="text-p">Sinta o verdadeiro espírito lisboeta no behotelisboa, um hotel de charme que ocupa um edifício do século XVIII integralmente reabilitado no centro histórico da capital portuguesa. Deixe-se conquistar pelo acolhimento atencioso com que brindamos os nossos hóspedes, pelo conforto e tranquilidade deste espaço único, próximo de tudo. A dois passos dos mais emblemáticos monumentos históricos, dos restaurantes mais trendy e da vibrante vida noturna, o behotelisboa é a escolha perfeita para descobrir os encantos desta cidade cosmopolita, cheia de história e tradição.</p>
            <a class="button-second" href="#">DESCOBRIR</a>
        </div>
    </div>
    <div class="grid-img-2">&nbsp;</div>
    <div class="grid-img-3">
        <img src="assets/images/homepage/nicola-rossio-hotel-excerto-1.jpg" alt="Texto da imagem que não consegui ler" width="343">
    </div>
</section>
<!-- Bem Vindo -->

<!-- Vista -->
<section class="vista">
    <div>
        <img src="assets/images/homepage/nicola-rossio-hotel-bem-vindo-3-hover.jpg" alt="A vista do Hotel para o Rossio">
        <img class="filter" src="assets/images/homepage/nicola-rossio-hotel-bem-vindo-3.jpg" alt="A vista do Hotel para o Rossio">
    </div>
    <p class="text-citation">AS VISTAS DO HOTEL PARA O ROSSIO</p>
</section>
<!-- Vista -->

<!-- Inspiração -->
<section class="inspiration">
    <h2 class="mega-title">O NICOLA COMO <br> INSPIRAÇÃO</h2>
    <p class="text-p">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
    <img src="assets/images/homepage/nicola-rossio-hotel-excerto-2.jpg" alt="Outro texto que não consegui ler">
</section>
<!-- Inspiração -->
    
</body>
</html>