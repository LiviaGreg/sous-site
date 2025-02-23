<?php
// Simulação de login (login real deve incluir uma base de dados e segurança)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lógica básica de verificação de login
    if ($username == "admin" && $password == "1234") {
        echo "Login bem-sucedido!";
    } else {
        echo "Usuário ou senha incorretos.";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOUS - Só Unidos Seguiremos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>SOUS</h1>
            <p>Só Unidos Seguiremos</p>
        </div>
        <nav class="navbar">
            <a href="#" class="inicio">Início</a>
            <a href="#" class="sobre">Sobre Nós</a>
            <a href="#pagina" class="ongs">Ongs</a>
            <a href="login.php" class="entrar">Entrar</a>
        </nav>
    </header>

    <section class="hero">
        <h2>De quem ajuda</h2>
        <h2>para quem ajuda</h2>
        <p>Um site para ajudar ONGs a se conectar com voluntários e doadores.</p>
    </section>

    <div id="pagina">
        <section class="ongs">
            <h2>Conheça as ONGs</h2>
            <div class="ong-card">
                <h3>Mais Aumor</h3>
                <p>Ongs - Animal</p>
            </div>
            <div class="ong-card">
                <h3>Bichos na Área</h3>
                <p>Ongs - Animal</p>
            </div>
            <div class="ong-card">
                <h3> <a href="patinhasolidaria.php">Patinha Solidária</a> </h3>
                <p>Ongs - Animal</p>
            </div>
            <div class="ong-card">
                <h3><a href="https://biotecdenuncia.nicepage.io">BioTec</a></h3>
                <p>Ongs - Ambiental</p>
            </div>
        </section>
    </div>    

    <section class="contact">
        <h2>Fale Conosco</h2>
        <p>Rua dos bobos, 0</p>
        <p>Email: casa@muitoengraçada.com.br</p>
    </section>

    <footer>
        <div class="social-media">
            <a href="#">Instagram</a>
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
        </div>
        <p>&copy; 2024 SOUS - Só Unidos Seguiremos</p>
    </footer>
</body>
</html>
