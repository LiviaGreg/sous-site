<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="front/sty.css"> <!-- Certifique-se de que o caminho está correto -->
</head>

<?php
session_start();
include('bdd.php'); // Inclui o arquivo de conexão com o banco de dados

// Recebe os dados do formulário de login
$cnpj = $_POST['cnpj'];
$senha = $_POST['senha'];

// Verifica se o CNPJ está cadastrado na tabela "ongs"
$query_cnpj = "SELECT * FROM ongs WHERE cnpj = ?"; // Consulta para encontrar o CNPJ
$stmt = $mysqli->prepare($query_cnpj); // Prepara a consulta para evitar SQL Injection
$stmt->bind_param("s", $cnpj); // Vincula o parâmetro CNPJ ao comando SQL
$stmt->execute(); // Executa a consulta
$result_cnpj = $stmt->get_result(); // Obtém o resultado da consulta

if ($result_cnpj->num_rows > 0) {
    // Se o CNPJ está cadastrado, verifica a senha
    $user_data = $result_cnpj->fetch_assoc(); // Pega os dados do usuário retornados pela consulta
    
    // Verifica se a senha fornecida corresponde à senha armazenada no banco de dados
    if ($senha === $user_data['senha']) {
        // Se a senha estiver correta, redireciona para a página andamento.php
        header("Location: andamento.php");
        exit();
    } else {
        // Senha incorreta
        echo "<div class='error-box'>
                <p>Senha incorreta. <br><br><a href='login.php'>Clique aqui para tentar novamente.</a>.</p>
             </div>";
        
    }
} else {
    // CNPJ não cadastrado, exibe mensagem e sugere cadastro
    echo "<div class='error-box'>
            <p>CNPJ não cadastrado. <br><br><a href='cadastro.php'>Clique aqui para cadastrar-se agora</a>.</p>
          </div>";
}

$stmt->close(); // Fecha o statement
$mysqli->close(); // Fecha a conexão com o banco de dados
?>
