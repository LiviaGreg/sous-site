<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="front/sty.css"> <!-- Certifique-se de que o caminho está correto -->
</head>

<?php
// Inclui os arquivos PHP necessários para configuração e funções.
include "bdd.php";   // Inclui o arquivo com as configurações de conexão ao banco de dados.
include "funcaoerror.php";   // Inclui o arquivo com funções personalizadas.

// Extrai os dados da requisição POST em variáveis separadas.
extract($_POST);

// Função para remover acentuação
function removerAcentos($string) {
    $acentos = array('á', 'à', 'ã', 'â', 'é', 'è', 'ê', 'í', 'ó', 'ò', 'ô', 'õ', 'ú', 'ù', 'û', 'ç');
    $sem_acentos = array('a', 'a', 'a', 'a', 'e', 'e', 'e', 'i', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'c');
    return str_replace($acentos, $sem_acentos, $string);
}

// Verifica se o formulário foi enviado (o botão "cadastrar" foi clicado).
if (isset($cadastro)) {

    // Remove espaços em branco no início e no fim dos dados do formulário.
    $nome = trim($nome);
    $email = trim($email);
    $telefone = trim($telefone);
    $cidade = trim($cidade);
    $cnpj = trim($cnpj);
    $categoria = trim($categoria); 
    $senha = trim($senha);

    // Normaliza a cidade: transforma para maiúsculas e remove os acentos
    $cidadeNormalizada = strtoupper(removerAcentos($cidade));

    // Verificar se a cidade é "EUNAPOLIS" (sem acentos e maiúscula)
    if ($cidadeNormalizada !== 'EUNAPOLIS') {
        echo "<div class='error-box'>
                <p>Só aceitamos a cidade de Eunápolis até o momento. <br><br><a href='cadastro.php'>Clique aqui para voltar para o cadastro</a> <br> <a href='indexx.php'>Clique aqui para ir à tela de início</a> .</p>
             </div>";
        exit;
    }

    // Processar o upload do logo.
    $logoPath = '';
    if (isset($_FILES['logo']) && $_FILES['logo']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = __DIR__ . '/uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }
        $logoPath = $uploadDir . basename($_FILES['logo']['name']);
        if (!move_uploaded_file($_FILES['logo']['tmp_name'], $logoPath)) {
            die("Erro ao salvar o arquivo de logo.");
        }
    }

    // Verificar campos obrigatórios.
    if (empty($nome) || empty($email) || empty($telefone) || empty($cidade) || empty($cnpj) || empty($categoria) || empty($senha)) {
        echo "Todos os campos devem ser preenchidos.";
        exit;
    }

    // Verificar duplicação de CNPJ.
    $consulta = "SELECT COUNT(*) FROM ongs WHERE CNPJ = '$cnpj'";
    $resultado = banco($dbHost, $dbUsername, $dbPassword, $dbName, $consulta);
    $row = $resultado->fetch_row();
    if ($row[0] > 0) {
        echo "<div class='error-box'>
                <p>O CNPJ já está cadastrado. <br><br><a href='login.php'>Clique aqui para se logar</a> <br> <a href='cadastro.php'>Clique aqui para voltar para o cadastro</a> .</p>
             </div>"; // Link para a página de cadastro
        exit;
    }

    // Inserir no banco de dados, agora com a cidade normalizada
    $consulta = "INSERT INTO `ongs` (`nome`, `email`, `telefone`, `cidade`, `CNPJ`, `categoria`, `logo`, `senha`) 
                 VALUES ('$nome', '$email', '$telefone', '$cidadeNormalizada', '$cnpj', '$categoria', '$logoPath', '$senha')";
    $resultado = banco($dbHost, $dbUsername, $dbPassword, $dbName, $consulta);

    if ($resultado === true) {
        echo "<div class='error-box'>
                <p>Cadastro realizado com sucesso! <br><br><a href='login.php'>Clique aqui para se logar</a> <br> <a href='cadastro.php'>Clique aqui para voltar para o cadastro</a> .</p>
             </div>"; // Link para a página de login
        exit;
    } else {
        echo "Ocorreu um erro ao cadastrar a ONG. ";
        echo '<a href="cadastro.php">Voltar para o cadastro</a>'; // Link para a página de cadastro
        exit;
    }
}
?>
