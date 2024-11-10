<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login - SOUS</title>
</head>
<body>

    <section class="login-section">
        <div class="login-cont">
            <h2>Sou uma Ong</h2>
            <form action="process_login.php" method="post">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <div class="options">
                    <label>
                        <input type="checkbox" name="remember"> Remember me
                    </label>
                    <a href="#">Forgot my password</a>
                </div>
                <button type="submit">Log in</button>
                <div class="buttons">
                    <button type="button" onclick="window.location.href='cadastro.php'"> Cadastro </button>
                    <button type="button" onclick="window.location.href='index.html'">Voltar</button>
                </div>
            </form>
        </div>
    </section>

</body>
</html>
