<?php
session_start();

// Captura os dados do formulário com validação
$nome = filter_var($_POST['nome'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$idade = filter_var($_POST['idade'], FILTER_VALIDATE_INT);

if ($nome && $idade) {
    // Armazena os dados
    setcookie('nome', $nome, time() + 86400); // Expira em 1 dia
    $_SESSION['idade'] = $idade;

    // Redireciona para a página boasvindas.php
    header('Location: boasvindas.php');
    exit;
} else {
    echo "Dados inválidos!";
}
?>  
