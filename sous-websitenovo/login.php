<!DOCTYPE html>
<html lang="pt-BR"> <!-- Define o tipo de documento e a língua da página como português do Brasil -->
<head>
    <meta charset="UTF-8"> <!-- Define a codificação de caracteres como UTF-8, permitindo caracteres especiais -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Ajusta a página para ser responsiva em dispositivos móveis -->
    <link rel="stylesheet" href="front/sty.css"> <!-- Link para o arquivo CSS externo que estiliza a página -->
    <title>Login - SOUS</title> <!-- Define o título da página, que aparecerá na aba do navegador -->
</head>
<body>

<section class="login-section">
        <div class="login-cont"> <!-- Contêiner para centralizar e estilizar o conteúdo do login -->
            <h2>Login</h2> <!-- Título indicando que a seção é destinada a ONGs -->
            
            <!-- Formulário de login que envia dados ao script PHP para processamento -->
            <form action="process_login.php" method="post">
                <!-- Campo de entrada para o CNPJ da ONG -->
                <input type="text" name="cnpj" placeholder="CNPJ" required>
                
                <!-- Campo de entrada para a senha -->
                <input type="password" name="senha" placeholder="Senha" required>
                
                <!-- Opções adicionais: checkbox e link para recuperação de senha -->
                <div class="options">
                    <label>
                        <input type="checkbox" name="remember"> Lembrar de mim <!-- Checkbox para lembrar login -->
                    </label>
                    <a href="#">Esqueci minha senha</a> <!-- Link para recuperação de senha -->
                </div>
                
                <!-- Botão de submissão do formulário -->
                <button type="submit" name="login">Entrar</button>
                
                <!-- Botões para navegação: cadastro e voltar -->
                <div class="buttons">
                    <button type="button" onclick="window.location.href='cadastro.php'">Cadastro</button> <!-- Redireciona para a página de cadastro -->
                    <button type="button" onclick="window.location.href='indexx.php'">Voltar</button> <!-- Redireciona para a página inicial -->
                </div>
            </form>
        </div>
    </section>

</body>
</html>
