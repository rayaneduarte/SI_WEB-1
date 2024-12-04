<?php
session_start();

// Recupera os dados
$nome = isset($_COOKIE['nome']) ? $_COOKIE['nome'] : 'Visitante';
$idade = isset($_SESSION['idade']) ? $_SESSION['idade'] : 'desconhecida';

// Carrega o arquivo HTML
$html = file_get_contents('boasvindas.html');

// Substitui os espaços reservados pelos dados
$html = str_replace('{{nome}}', htmlspecialchars($nome), $html);
$html = str_replace('{{idade}}', htmlspecialchars($idade), $html);

// Exibe o HTML final
echo $html;
?>
