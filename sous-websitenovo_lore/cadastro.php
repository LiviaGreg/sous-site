<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylecadastro.css">
    <title>Cadastro - SOUS</title>
</head>
<body>
    <section class="cadastro-section">
        <div class="cadastro-container">
            <h2>Cadastro da ONG</h2>
            <form action="process_cadastro.php" method="post">
                <div class="input-box">
                    <label for="nome">Nome da ONG:</label>
                    <input type="text" id="nome" name="nome" placeholder="Nome da ONG" required>
                </div>
                <div class="input-box">
                    <label for="telefone">Telefone:</label>
                    <input type="tel" id="telefone" name="telefone" placeholder="Telefone" required>
                </div>
                <div class="input-box">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-box">
                    <label for="endereco">Endereço:</label>
                    <input type="text" id="endereco" name="endereco" placeholder="Endereço" required>
                </div>
                <button type="submit" class="submit-btn">Cadastrar</button>
            </form>
        </div>
    </section>
</body>
</html>
