<!DOCTYPE html>
<html lang="pt-BR"> <!-- Define o tipo de documento e a língua padrão da página como português do Brasil -->
<head>
    <meta charset="UTF-8"> <!-- Define a codificação de caracteres como UTF-8, permitindo caracteres especiais -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Ajusta a visualização para dispositivos móveis -->
    <link rel="stylesheet" href="front/stylecadastro.css"> <!-- Link para o arquivo CSS externo para estilizar a página -->
    <title>Cadastro - SOUS</title> <!-- Título da página, exibido na aba do navegador -->
</head>
<body>
    <section class="cadastro-section">
        <div class="cadastro-container">
            <h2>Cadastro da ONG</h2>
            <!-- Formulário para cadastro de ONGs -->
            <form action="process_cadastro.php" method="post" enctype="multipart/form-data">
                <!-- Atributo action define o script que processará o formulário (PHP) -->
                <!-- enctype="multipart/form-data" permite upload de arquivos no formulário -->
                <div class="form-row"> <!-- Linha de formulário para organizar os campos -->
                    
                    <!-- Primeira Caixa -->
                    <div class="form-box">
                        <div class="input-box">
                            <label for="nome">Nome da ONG:</label> <!-- Rótulo para o campo nome -->
                            <input type="text" id="nome" name="nome" placeholder="Nome da ONG" required> <!-- Campo de texto para o nome da ONG -->
                        </div>
                        <div class="input-box">
                            <label for="email">Email:</label> <!-- Rótulo para o campo email -->
                            <input type="email" id="email" name="email" placeholder="Email" required> <!-- Campo de entrada para email com validação de formato -->
                        </div>
                        <div class="input-box">
                            <label for="telefone">Telefone:</label> <!-- Rótulo para o campo telefone -->
                            <input type="tel" id="telefone" placeholder="Telefone" name="telefone" required> <!-- Campo de entrada para telefone com tipo específico -->
                        </div>
                        <div class="input-box">
                            <label for="cidade">Cidade:</label> <!-- Rótulo para o campo cidade -->
                            <input type="text" id="cidade" name="cidade" placeholder="Cidade" required> <!-- Campo de texto para cidade -->
                        </div>
                    </div>


                    <!-- Segunda Caixa -->
                    <div class="form-box">
                        <div class="input-box">
                            <label for="cnpj">CNPJ:</label> <!-- Rótulo para o campo CNPJ -->
                            <input type="text" id="cnpj" name="cnpj" placeholder="CNPJ" required> <!-- Campo para CNPJ -->
                        </div>
                        <div class="input-box">
                            <label for="categoria">Categoria:</label> <!-- Rótulo para o campo categoria -->
                            <select id="categoria" name="categoria" required> <!-- Menu suspenso para selecionar categoria -->
                                <option value="Animal">Animal</option>
                                <option value="Ambiental">Ambiental</option>
                                <option value="Social">Social</option>
                            </select>
                        </div>
                        <div class="input-box">
                            <label for="logo">Logo:</label> <!-- Rótulo para o campo logo -->
                            <input type="file" id="logo" name="logo" required> <!-- Campo para upload de imagem do logo -->
                        </div>
                        <div class="input-box">
                            <label for="senha">Senha:</label> <!-- Rótulo para o campo senha -->
                            <input type="password" id="senha" name="senha" placeholder="Senha" required> <!-- Campo de senha com tipo protegido -->
                        </div>
                    </div>
                </div>
                <button type="submit" class="submit-btn" name="cadastro">Cadastrar</button><br><br> <!-- Botão de enviar o formulário -->
                <button type="button" class="submit-btn" onclick="window.location.href='indexx.php'">Voltar</button> <!-- Botão para retornar à página de login -->
            </form>
            
        </div>
    </section>
    
    <script>
        function mostrarSenha() {
            var senhaInput = document.getElementById("senha"); // Seleciona o campo de senha
            var tipo = senhaInput.type === "password" ? "text" : "password"; // Alterna entre tipo texto e senha
            senhaInput.type = tipo; // Aplica o tipo definido ao campo
        }
    </script>
</body>
</html>