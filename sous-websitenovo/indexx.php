<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> 
    <link rel="stylesheet" href="styles.css">
    <title>SOUS-Só unidos seguiremos</title>
</head>
<body>

<!--Inicio barra de pesquisa-->
    <header class="header">
        <div class="logo">
            <h1>SOUS</h1>
            <p>Só Unidos Seguiremos</p>
        </div>
        <div class="navbar">
            <nav style="background-color: #00A5E0; padding: 10px;">
                <div style="display: flex; align-items: center;">
                    <div style="margin-right: 15px;">
                    <!--Link das redes sociais-->
                        <a href="https://w.app/3KHI8T" target="_blank" style="color: white;">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="https://www.instagram.com/gremifbaeuna?igsh=MXZjeGM1NTFvaGV2" target="_blank" style="color: white;">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://tiktok.com/@seutiktok" target="_blank" style="color: white;">
                            <i class="fab fa-tiktok"></i>
                        </a>
                    </div>
                    <!-- Links de navegação interna -->
                    <a href="indexx.php" class="inicio">Inicio</a>
                    <a href="#quemsomos" class="sobre">Sobre nós</a>
                    <a href="login.php" class="inicio">Entrar</a>
        </div>
    </header>

    <!-- Main Section -->
    <section class="main">
        <div class="text-section">
            <h1>De quem <span class="highlight-blue">ajuda</span><br/> para quem <span class="highlight-orange">ajuda!</span></h1>
            <p>Um site para ajudar ONGs a se conectar com voluntários e doadores.!</p>
            <!--Link para tela de cadastro-->
            <button class ="donate-btn-main" onclick="window.location.href='cadastro.php'">Cadastre-se</a>

        </div>
        <div class="image-section"> <!--Imagem de fundo-->
            <img src="imagem1.png" alt="High-five image">
        </div>
    </section>

        <!-- Seção de busca por categorias -->
    <section class="category-search">
        <p class="category-title">BUSQUE POR CATEGORIA DE INTERESSE:</p>
        <div class="category-bar">
            <a href="animais.php">ANIMAIS</a>
            <span class="separator">—</span>
            <a href="ambientais.php">AMBIENTAIS</a>
            <span class="separator">—</span>
            <a href="social.php">SOCIAIS</a>
        </div>
    </section>


    <!-- Seção Sobre a Plataforma -->
    <div id="quemsomos">
    <section class="platform-section">
            <h1>A Plataforma SOUS</h1>
            <p>Nossa plataforma lhe ajuda a encontrar <span class="highlight">ONGS</span> em Eunápolis que foram verificadas e precisam de seu apoio!</p>
            <div class="info-boxes">
                <div class="info-box blue-box">
                    <h2>SOUS PARA <br> ONGS:</h2>
                    <ul>
                        <li>Mais visibilidade</li>
                        <li>Centralizada para pessoas interessadas em apoiar</li>
                        <li>Divulgue suas conquistas e gastos</li>
                        <li>Celebre e conte como foi a ação</li>
                    </ul>
                </div>
                <div class="info-box orange-box">
                    <h2>SOUS PARA <br> VOLUNTÁRIOS:</h2>
                    <ul>
                        <li>Praticidade para encontrar projetos</li>
                        <li>Conheça mais sobre diferentes Ongs</li>
                        <li>Seja um voluntário e ajude</li>
                        <li>Celebre e conte como foi a ação</li>
                    </ul>
                </div>
            </div>
    </section>
    </div>

    <section class="contact">
        <h2>Fale Conosco</h2>
        <p>IFBA, Eunápolis - BA</p>
        <p>Email: sousong@gmail.com</p>
    </section>

    <footer>
        <p>&copy; 2024 SOUS - Só Unidos Seguiremos</p>
    </footer>

</body>
</html>
