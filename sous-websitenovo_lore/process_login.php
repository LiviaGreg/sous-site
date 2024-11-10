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
