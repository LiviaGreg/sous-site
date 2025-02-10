
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="animais.css"> <!-- Link para o CSS externo -->
    <title>Conheça as ONGs</title>
</head>
<body>

    <header class="header">
        <div class="logo">
            <h1>SOUS</h1>
            <p>Só Unidos Seguiremos</p>
        </div>
        <div class="navbar">
            <nav style="background-color: #00A5E0; padding: 10px;">
                <div style="display: flex; align-items: center;">
                    <!-- Ícones de Redes Sociais -->
                    <div style="margin-right: 15px;">
                        <a href="https://wa.me/seunumerodewhatsapp" target="_blank" style="color: white;">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="https://instagram.com/seuinstagram" target="_blank" style="color: white;">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://tiktok.com/@seutiktok" target="_blank" style="color: white;">
                            <i class="fab fa-tiktok"></i>
                        </a>
                    </div>
                    <a href="indexx.php" class="inicio">Inicio</a>
                    <a href="quemsomos" class="sobre">Sobre nós</a>
                    <a href="login.php" class="inicio">Entrar</a>
        </div>
    </header>


    <section class="main">
        <div class="text-section">
            <h1>ONGs que abraçam a causa animal</h1>
            <p>Descubra as ONGs que estão fazendo a diferença e saiba como você pode ajudar.</p>
        </div>

        <div class="ongs-list">
            <div class="ong-card">
                <img src="patinha.png" alt="Imagem da ONG 1">
                <h2>Patinha Solidária</h2>
                <p>A Patinha Eunápolis é uma organização não governamental (ONG) dedicada ao resgate, 
                    proteção e cuidado de animais.</p>
                <button onclick="window.location.href='patinhasolidaria.php'">Saiba mais</a>
            </div>
            <div class="ong-card">
                <img src="baixados.jpg" alt="Imagem da ONG 2">
                <h2>ONG Animal</h2>
                <p>Uma ONG de proteção animal que resgata, cuida e promove a adoção de animais abandonados.
                </p>
                <button>Saiba Mais</button>
            </div>
            <!-- Adicione mais ONGs conforme necessário -->
        </div>
    </section>
</body>
</html>
